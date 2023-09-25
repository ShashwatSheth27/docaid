<?php

namespace App\Http\Controllers\admin;

use App\DataTables\AppointmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AppointmentDataTable $datatable)
    {
        return $datatable->render('admin.appointments');
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
        $request->validate([
            'dname' => ['required', 'string','min:2', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'adate' => ['required','date','after:now'],
            'atime' => ['required','date_format:H:i:s'],
        ]);

        $user_id = User::where('email',$request->email)->first();
        $doc_id = Doctor::where('firstname',$request->dname)->first();

        $user = Appointment::create([
            'user_id' => $user_id->id,
            'doctor_id' => $doc_id->id,
            'adate' => $request->adate,
            'atime' => $request->atime,
            'end_time' => date('H:i:s', strtotime($request->atime . '+30 minutes')),
        ]);

        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query_resonse = Appointment::where('id',$id)->with('doctor','user')->get();
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
            'dname' => ['required', 'string','min:2', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50'],
            'adate' => ['required','date','after:now'],
            'atime' => ['required','date_format:H:i:s'],
        ]);

        $user_id = User::where('email',$request->email)->first();
        $doc_id = Doctor::where('firstname',$request->dname)->first();

        $user = Appointment::where('id',$id)->update([
            'user_id' => $user_id->id,
            'doctor_id' => $doc_id->id,
            'adate' => $request->adate,
            'atime' => $request->atime,
            'end_time' => date('H:i:s', strtotime($request->atime . '+30 minutes')),
        ]);

        return response()->json(['success'=>'Appointment Details Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::where('id',$id)->delete();
        return response()->json(['success'=>'Appointment Deleted Successfully!']);
    }
}
