<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\SolarSystem\StoreRequest;
use App\Http\Requests\SolarSystem\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class SolarSystemController extends Controller
{
    public function index(){
        $result=DB::table('ss')->get();

        return view('admin.ss.index',['ss'=>$result]);
    }

    public function create(){
        $result=DB::table('ss')->orderBy('created_at')->get();
        $data = DB::table('astronomicalentities')->get();
        return view('admin.ss.create',['ss'=>$result,'AEs' => $data]);

    }

    public function store(StoreRequest $request){
        $data= $request->except('_token');
        $data['created_at']=new \DateTime();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $data['image']=$imageName;

        DB::table('ss')->insert($data);
        return redirect()->route('admin.ss.index')->with('success','Create solar system successfully');
    }

    public function edit($id){
        $ss=DB::table('ss')->where('id',$id)->first();
        $data = DB::table('astronomicalentities')->get();
        return view('admin.ss.edit',['id'=> $id , 'ss'=> $ss,'AEs' => $data]);
    }

    public function update(UpdateRequest $request,$id){
        $data=$request->except('_token','image');
        $data['created_at']=new \DateTime();
        if (!empty($request->image)) {
            $data_old = DB::table('ss')->where('id', $id)->first();
            $url_image_old_path = public_path('images/'. $data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('ss')->where('id',$id)->update($data);
        return redirect()->route('admin.ss.index')->with('success','Edit solar system successfully');;
    }

    public function delete($id){
        $data_delete = DB::table('ss')->where('id',$id)->first();
        if (!empty($data_delete)){
            $url_image_delete = public_path('images/'. $data_delete->image);
            if(file_exists($url_image_delete)) unlink($url_image_delete);
        }
        DB::table('ss')->where('id', '=', $id)->delete();
        return redirect()->route('admin.ss.index')->with('success', 'Delete solar system successfully');
    }

}
