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
    public function __construct() {
        $this->middleware('auth');
    }
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
            'transaction_id' => 'required|unique:concour_registrations',
            'program_choice' => 'required',
            'identification_document' => 'required',
            'identification_number' => 'required',
            'writing_center' => 'required',
            'sponsor' => 'required'
            
        ],
         [
            'program_choice.required' => 'Select a Program Choice',
            'transaction_id.required' => 'Enter Transaction ID',
            'transaction_choice.required' => 'Program Choice is required',
            'transaction_id.unique' => 'Transaction ID is already associated with an application!',
            'identification_document.required' => 'Identification document type is required',
            'sponsor.required' => 'Sponsor\'s name is required',
            'writing_center.required' => 'Writing Center is required'
        ]);

        $applicant_info = new ConcourRegistration;
        $applicant_info->user_id = Auth::user()->id;
        $applicant_info->program_choice = $request->input('program_choice');
        // $applicants_transaction_id = $request->input('transaction_id');
        $applicant_info->transaction_id = $request->input('transaction_id');
        $applicant_info->identification_document = $request->input('identification_document');
        $applicant_info->identification_number = $request->input('identification_number');
        $applicant_info->sponsor = $request->input('sponsor');
        $applicant_info->writing_center = $request->input('writing_center');
        $applicant_info->status = 1;

        // check validity of applicant's transaction id

        // $trans_id = TransactionId::select('transaction_id')->where('transaction_id', '=', $applicants_transaction_id)->get();

        // if($trans_id != null && $trans_id == $applicants_transaction_id) {
        //     $applicant_info->transaction_id = $applicants_transaction_id;
        // } else {
        //     return back()->with('error', 'Invalid Transaction Id');
        // }

        // check existing application

        $existing_app = ConcourRegistration::where('user_id', auth()->user()->id)->where('program_choice', $applicant_info->program_choice)->first();
        
        if($existing_app != null) {
            return back()->with('error', 'You already have an ongoing application');
        }

        $applicant_info->save();

        if($applicant_info->save()) {
            return back()->with('success', 'Application Completed');
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
        $user_application = ConcourRegistration::where('user_id', $id)->get();
        $programs = Program::all();
        // return dd($user_application);

        return view('view-application', compact('user_application', 'programs', 'id'));
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
        $application = ConcourRegistration::find($id);

        $application->delete();

        return back()->with('success', 'Application deleted');
    }

    public function printRegistrationForm($id) {
        $application = ConcourRegistration::find($id);
        return view('registration-form', compact('application'));
    }
}
