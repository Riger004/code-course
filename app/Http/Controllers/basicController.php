<?php

namespace Codecourse\Http\Controllers;

use Illuminate\Http\Request;
use Codecourse\Http\Requests;
use Codecourse\Http\Controllers\Controller;
use DB;
use Auth;

class basicController extends Controller
{
	public function index(){

		/*DB::insert('insert into clients (name,phone) values (?,?)',['habib','12101077']);

		$users = DB::table('clients')->get();*/
		if (Auth::check()) {
    // The user is logged in...
			return 'the user is verified';
		}else{
			return 'the user is not verified';
		}
	}

	public function cok(){
		$name='riger';
		$value=55525;
		$expire=time()+(60*60*1);

		$person=$_COOKIE['riger'];

		print_r($person);
	}

	
}
