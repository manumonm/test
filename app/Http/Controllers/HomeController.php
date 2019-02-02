<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the leadList when login the user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $users = DB::table('leads')->orderBy('id','desc')->paginate(10);
        return view('home', compact('users'));
    }
    
    /**
     * Show the Lead details for agents based on id.
     */
    public function detailView(int $id) {
        $users = DB::table('leads')->where('id', '=', $id)->get();
        return view('leadDetails', compact('users'));
    }

}
