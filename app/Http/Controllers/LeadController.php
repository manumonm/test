<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void

      public function __construct()
      {
      $this->middleware('auth');
      } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('LeadForm');
    }

    /**
     * Create a new lead from the user side.
     *
     * @param  array  $request
     */
    public function create(Request $request) {
        /**
         * Get a validator for an incoming data lead saving request. */
        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'numeric', 'digits:10'],
            'squarefeet' => ['required', 'numeric']
        ]);

        /**
         * Checking the validation success. */
        if ($validatedData) {
            DB::table('leads')->insert(['firstname' => $request->firstname, 'lastname' => $request->lastname, 'address' => $request->address,
                'phonenumber' => $request->phonenumber, 'squarefeet' => $request->squarefeet, 'email' => $request->email]);
            $message = "successfully Added";
        }

        return redirect()->back()->withSuccess('Leads Successfully Added!.');
    }

}
