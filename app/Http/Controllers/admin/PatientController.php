<?php

namespace App\Http\Controllers\admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $datatable)
    {
        return $datatable->render('admin.patients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query_resonse = User::where('id',$id)->get();
        return response()->json($query_resonse);
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
        $request->validate([
            'firstname' => ['required', 'string','min:2', 'max:20'],
            'lastname' => ['required', 'string','min:2', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'phone_no' => ['required','digits:10','min:10','max:10'],
            'country' => ['required','string'],
            'gender' => ['required','string'],
            'dob' => ['required','date','before_or_equal:yesterday'],
            'address' => ['required','string','max:150'],
        ]);

        $user = User::where('id',$id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'country' => $request->country,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'age' => (int)date("Y") - (int)date('Y',strtotime($request->dob)),
            'address' => $request->address,
        ]);

        return response()->json(['success'=>'Patient Details Updated Successfully!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return response()->json(['success'=>'Patient Deleted Successfully!']);
    }
}
