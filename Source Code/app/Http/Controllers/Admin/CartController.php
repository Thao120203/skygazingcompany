<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Cart\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index(){
        $result=DB::table('cards')->orderBy('id')->get();
        return view('admin.cart.index',['AEs'=>$result]);
    }


    public function store(StoreRequest $request){
        $data= $request->except('_token');

        $quantity = 0;
        $test = DB::table('cards')->where('date',$data['date'])->where('status_payment',1)->get();
        foreach($test as $t){
            $quantity += $t->ticket_number;
        }   
        if ($quantity + $data['ticket_number'] > 100) {
            $conlai=100 - $quantity;
            $wit='Number of tickets leftover: '.$conlai;
            return redirect()->back()->with('error',$wit);
        }

        $data['created_at']=new \DateTime();
        $data['id_account']= Auth::user()->id;
        $data['code']=mt_rand(1,99999999);
        $datab=DB::table('cards')->get();
        foreach($datab as $card){
            if( $data['code']== $card->code ){
                $data['code']=mt_rand(1,99999999);
            }
        }
        $data['status_payment']=0;
        DB::table('cards')->insert($data);
        $data=DB::table('cards')->where('created_at',$data['created_at'])->where('email',$data['email'])->first();
        return redirect()->route('payment',['id'=>$data->id]);
    }

    public function delete($id){
        DB::table('cards')->where('id', '=', $id)->delete();
        return redirect()->route('admin.cart.index')->with('success', 'Delete cart successfully');
    }

    public function edit($id){
        $carts=DB::table('cards')->where('id',$id)->first();
        $data2 = DB::table('astronomicalentities')->get();
        return view('admin.cart.edit',['id'=> $id , 'cart'=> $carts, 'AEs'=>$data2]);
    }

    public function update(Request $request,$id){
        $data=$request->except('_token');
        $data['created_at']=new \DateTime(); 
        DB::table('cards')->where('id',$id)->update($data);
        return redirect()->route('admin.cart.index')->with('success', 'Edit cart successfully');
    }

    public function payment($id){
        $data= DB::table('cards')->where('id', '=', $id)->first();
        
        $quantity = 0;
        $test = DB::table('cards')->where('date',$data->date)->where('status_payment',1)->get();
        foreach($test as $t){
            $quantity += $t->ticket_number;
        }   
        if ($quantity + $data->ticket_number > 100) {
            return redirect()->Route('deleteComplete',$id);
        }
        
        return view('client.payment',['id'=>$id,'data'=>$data]);
    }

    public function complete($code){
        $data = DB::table('cards')->where('code',$code)->first();
        $emails = $data->email;
        $name = $data->client_name;
        $date=$data -> date;
        $quantity=$data -> ticket_number;
        Mail::send('emails.codepayment',compact('name','code','date','quantity'), function($email) use($name,$emails,$code,$date,$quantity){
            $email->subject('Sky Gazing Company');
            $email->to($emails,$name,$code,$date,$quantity);      
        });
        DB::table('cards')->where('code', '=',$code)->update(array('status_payment'=>1));
        return redirect()->route('home');
    }
    
    public function deleteComplete($id){
        DB::table('cards')->where('id', '=', $id)->delete();
        return redirect()->route('buyticket')->with('error','Not enough tickets');
    }
}
