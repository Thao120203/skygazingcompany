<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
 
class InfoController extends Controller
{
    public function ss($id){
        $data=DB::table('ss')->where('id',$id)->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.infomation.ss',['infoSS'=>$data,'AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function comet($id){
        $data=DB::table('comets')->where('id',$id)->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        return view('client.infomation.cm',['infocm'=>$data,'AEs'=>$aes,'planets'=>$datapln]);
    }

    public function constellation($id){
        $data=DB::table('constellations')->where('id',$id)->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.infomation.constellation',['infoconstellation'=>$data,'AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function news($id){
        $data=DB::table('news')->where('id',$id)->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.infomation.news',['infonews'=>$data,'AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function observatory($id){
        $data=DB::table('observatories')->where('id',$id)->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.infomation.observatory',['infoobservatory'=>$data,'AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function solarsystem(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.list.listsolarsystem',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function ob(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.list.listobservatory',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function nw(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.list.listnews',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function lc(){
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.list.listconstellation',['AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }

    public function cm(){
        $data=DB::table('comets')->first();
        $aes=DB::table('astronomicalentities')->where('name','<>','Comet')->where('id','<',6)->get();
        $datapln=DB::table('ss')->get();
        $datact=DB::table('constellations')->get();
        $dataob=DB::table('observatories')->get();
        $datanews=DB::table('news')->get();
        return view('client.infomation.cm',['infocm'=>$data,'AEs'=>$aes,'planets'=>$datapln,'cts'=>$datact,'obs'=>$dataob,'baos'=>$datanews]);
    }
}
