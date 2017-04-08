<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CrudController extends Controller
{
    public function create(){

    	return view('welcome');
    }

    public function store(Request $request){
    	$data=['name'=>$request->name, 'email'=>$request->mail, 'position'=>$request->position, 'github'=>$request->github, 'school'=>$request->school, 'gender'=>$request->gender];
    	DB::table('members')->insert($data);
    	return back();

    }

    public function retrieve(){
    	$s=0;
    	return view('read', compact('s'));
    }

    public function search(Request $request){
    	if($request->search!=''){
    	$member=DB::table('members')->where('name', 'LIKE', '%'.$request->search.'%')->orWhere('github', 'LIKE', '%'.$request->search.'%')->get();

		$s=1;
    	return view('read', compact('member','s'));
    }
    return back();
}

public function edit($id){

	$member=DB::table('members')->where('id',$id)->first();
	return view('edit', compact('member'));
}

public function update(Request $request){
	$data=['name'=>$request->name, 'email'=>$request->mail, 'position'=>$request->position, 'github'=>$request->github, 'school'=>$request->school, 'gender'=>$request->gender];
	DB::table('members')->where('id',$request->id)->update($data);
	return redirect('read');
}

public function delete($id){
	DB::table('members')->where('id',$id)->delete();
	return redirect('read');
}

}
