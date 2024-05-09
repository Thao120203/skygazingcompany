<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ClientController extends Controller
{
    public function home(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.home',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }
    public function about(){

        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.about',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }
    public function contact(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.contact',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }
    public function storecontact(Request $request){
       $data= $request->except('_token');
        $data['created_at'] = new \DateTime();
       DB::table('contacts')->insert($data);
       Return redirect()->route('home');
    }

    public function history($id){
        $data=DB::table('cards')->where('id_account',$id)->get();
        return view('client.history',['tickets'=>$data]);
    }
}
