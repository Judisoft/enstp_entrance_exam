<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\ConcourRegistration;
use Illuminate\Support\Facades\Auth;
use App\Models\ConcourRegistration;
use App\Models\User;
use App\Models\TransactionId;
use App\Models\Program;

class ConcourRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user();
        $user = Auth::user();
        // $registrant = ConcourRegistration::find(1)->user;

        $programs = Program::all();

        return view('concour-registration', compact('user', 'programs'));
    }

    /**
     * Store a newly created resource in storage.
     *@param App\Http\Requests\ConcourRegistration $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant_info = $request->validate([
            'program_choice' => 'required|unique:concour_registrations',
            'transaction_id' => 'required|unique:concour_registrations'
            
        ],
         [
            'program_choice.required' => 'Select a Program Choice',
            'program_choice.unique' => 'You have already have an submitted  or have an ongoing application',
            'transaction_id.required' => 'Enter Transaction ID',
            'transaction_id.unique' => 'Transaction ID is already associated with an application!'
        ]);

        $applicant_info = new ConcourRegistration;
        $applicant_info->user_id = Auth::user()->id;
        $applicant_info->program_choice = $request->input('program_choice');
        $applicants_transaction_id = $request->input('transaction_id');

        // check validity of applicant's transaction id

        $trans_id = TransactionId::select('transaction_id')->where('transaction_id', '=', $applicants_transaction_id)->get();

        if($trans_id != null && $trans_id == $applicants_transaction_id) {
            $applicant_info->transaction_id = $applicants_transaction_id;
        } else {
            return back()->with('error', 'Invalid Transaction Id');
        }
        

        $applicant_info->save();

        if($applicant_info->id) {
            return back()->with('success', 'Application saved');
        } else {
            return back()->with('error', 'Oups! Something went wrong');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
