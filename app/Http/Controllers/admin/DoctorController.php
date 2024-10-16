<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\DoctorDataTable;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DoctorDataTable $datatable)
    {
        return $datatable->render('admin.doctors');
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
            'firstname' => ['required', 'string','min:2', 'max:20'],
            'lastname' => ['required', 'string','min:2', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'phone_no' => ['required','digits:10','min:10','max:10'],
            'department' => ['required','string'],
            'shift' => ['required','string'],
            'gender' => ['required','string'],
            'start_time' => ['required','date_format:H:i'],
            'end_time' => ['required','date_format:H:i','after:start_time'],
            'address' => ['required','string','max:150'],
        ]);

        $user = Doctor::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'department' => $request->department,
            'shift' => $request->shift,
            'gender' => $request->gender,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'address' => $request->address,
        ]);

        if($request->ajax()){
            return true;
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
        $query_resonse = Doctor::where('id',$id)->get();
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
            'department' => ['required','string'],
            'shift' => ['required','string'],
            'gender' => ['required'],
            'start_time' => ['required','date_format:H:i:s'],
            'end_time' => ['required','date_format:H:i:s','after:start_time'],
            'address' => ['required','string','max:150'],
        ]);

        Doctor::where('id',$id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'department' => $request->department,
            'shift' => $request->shift,
            'gender' => $request->gender,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'address' => $request->address,
        ]);

        return response()->json(['success'=>'User Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::where('id',$id)->delete();
        return response()->json(['success'=>'Doctor Deleted Successfully!']);
    }

    public function getActiveDoctors($fields)
    {
        return Doctor::select($fields)->get();
    }
}
