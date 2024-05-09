<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Http\Requests\Astronomical\StoreRequest;
use App\Http\Requests\Astronomical\UpdateRequest;


class AstronomicalController extends Controller
{
    public function index(){
        $data=DB::table('astronomicalentities')->get();
        return view('admin.astronomicalentity.index',['AEs'=>$data]);
    }
    public function create(){
        $data= DB::table('astronomicalentities')->get();
        return view('admin.astronomicalentity.create',['AEs'=>$data]);
    }
    public function store(StoreRequest $request){
        $data=$request->except('_token');
        DB::table('astronomicalentities')->insert($data);
        return redirect()->route('admin.astronomicalentity.index')->with('success','Create astronomical entity successfully');;
    }
    public function edit($id){
        $result = DB::table('astronomicalentities')->where('id',$id)->first();
        $results= DB::table('astronomicalentities')->where('id','<>',$id) ->orderBy('id')->get();
        return view('admin.astronomicalentity.edit',['ae'=>$result,'aes'=> $results]);
    }
    public function update(UpdateRequest $request,$id){
        $data = $request->except('_token');
        DB::table('astronomicalentities')->where('id',$id)->update($data);
        return redirect()->route('admin.astronomicalentity.index')->with('success','Edit astronomical entity successfully');
    }
    public function delete($id){
        $data= DB::table('astronomicalentities')->orderBy('id')->get();
        foreach($data as $value){
            if($id==$value->parent){
                return redirect()->route('admin.astronomicalentity.index')->with('error','Can not delete subdirectory');
            }
        }
        DB::table('astronomicalentities')->where('id',$id)->delete();
        return redirect()->route('admin.astronomicalentity.index')->with('success','Delete astronomical entity successfully');
    }
}
