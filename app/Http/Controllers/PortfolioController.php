<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Courses;
use App\Models\Users;
use App\Http\Requests\PortfolioRequest;
use Auth;

//$pic = \App::make('\App\Libs\Imap')->url($_FILES['picture1']['tmp_name']);

class PortfolioController extends Controller
{
    public function postIndex (PortfolioRequest $r){
		$r['user_id'] = Auth::user()->id;
		if ($_FILES['picture1']){
		$r['picture'] = \App::make('App\Libs\Imap')->url($_FILES['picture1']['tmp_name']);
		}else{
			$r['picture'] = '';
		};
		
		Portfolio::create($r->all());
		
		return redirect()->back();
	}
	
	public function getAll(){
		//$obj = Portfolio::all();
		$user = Auth::user()->id;
		$obj = Portfolio::where('user_id', $user)->get();
		return view('portfolios', compact('obj'));
	}
	
	public function getOne($id = null){
		$obj = Portfolio::find($id);
		return view('picture', compact('obj'));
	}
	
	public function infoOne($id = null){
		$obj = Portfolio::find($id);
		return view('info', compact('obj'));
	}
	
	public function getDelete ($id=null){
		$work = Portfolio::find($id);
		if (file_exists(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture)){
			@unlink(public_path().'/uploads/'.Auth::user()->id.'/'.$work->picture);
			@unlink(public_path().'/uploads/'.Auth::user()->id.'/s_'.$work->picture);
			@unlink(public_path().'/uploads/'.Auth::user()->id.'/ss_'.$work->picture);
		}
		$work->delete();
		return redirect() -> back();
	}
	
	public function getWorks($id = null) {
		$course = Courses::find($id)->name;
		$obj = Portfolio::where('user_id', $id)->get();
		return view('course', compact('obj'))->with ('course', $course);
	}
	public function allPortfolios() {
		$obj = Portfolio::all();
		return view('allPortfolios', compact('obj'));
	}
}