<?php

namespace App\Http\Controllers;
use App\Http\Requests\ForgetRequest;
use Illuminate\Http\Request;
use  App\Http\Requests\RepassRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class ForgetPassword extends Controller
{
    public function forget_pass(){
        return view('emails.forgetpass');
    }
    public function recoverPass(Request $request){
        $request->validate([
            'confirm_email' => 'required',
        ]);
         
        $data= $request->confirm_email;
        $checkwithget = DB::table('members')->where('email','=',$data)->get();
        
        // echo $token_random = Str::random(20);
        if ($checkwithget->isEmpty()){   
            return redirect()->back()->with('mail_error','Mail does not exist');  
        }
        else{   
            $checkwithfirst = DB::table('members')->where('email','=',$data)->first();
            $name= $checkwithfirst ->email;
            $randomNumber = random_int(100000, 999999);
            
            DB::table('members')
            ->updateOrInsert(
                ['email' => $data],
                ['user_token' => $randomNumber]
            );
            Mail::send('emails.send-to-user',compact('name','randomNumber'), function($email) use($name,$data,$randomNumber){
                $email->subject('Sky Gazing Company');
                $email->to($data,$name,$randomNumber);      
            });
            return redirect()->route('fillConfirmCodeView');
            
        };
    }
    public function fillConfirmCodeView(){
        return view('emails.fill-confirm-code');
    }
    public function fillNewPasswordView($id){
        return view('emails.fill-new-password',['id'=>$id]);
    }
    public function fillConfirmCode(ForgetRequest $request){

        $data = $request -> confirm_code;
        $reset=null;
        $checkcode = DB::table('members')->where('user_token','=',$data)->get();
        if ($checkcode->isEmpty()){   
            return redirect()->back()->with('confirm_code_error','Incorrect confirmation code');  
        }
        else{
            $checkcodegetmail = DB::table('members')->where('user_token','=',$data)->first();
            $checkcodegetmail1 = $checkcodegetmail->id;
            DB::table('members')
            ->updateOrInsert(
                ['user_token' => $data],
                ['user_token' =>  $reset]
            );
            return redirect()->route('fillNewPasswordView',['id' => $checkcodegetmail1]);
        };
    }
    public function fillNewPassword(RepassRequest $request,$id){
        $data1 = $request -> newpassword;
        $data2 = $request -> confirmnewpassword; 
        if ($data1 == $data2 ){
            DB::table('members')
            ->updateOrInsert(
                ['id' => $id],
                ['password' =>  bcrypt($data1)]
            );

           return redirect()->route('getUserLogin')->with('success','Create new password successfully');
        }
        else{
            return   redirect()->route('email.fillNewPasswordView');
            // return redirect()->back()->with('confirm_new_pass_error','The password confirm and password must match');  
        };
    
    }
}
