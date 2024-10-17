<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Comment\Doc;

class ValidationController extends Controller
{
    public function check_docemail_update(Request $request){
        $query_resqonse = Doctor::where([
            ['email',$request->email],
            ['id','<>',$request->id],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_docphoneno_update(Request $request){
        $query_resqonse = Doctor::where([
            ['phone_no',$request->phone_no],
            ['id','<>',$request->id],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_useremail_update(Request $request){
        $query_resqonse = User::where([
            ['email',$request->email],
            ['id','<>',$request->id],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_userphoneno_update(Request $request){
        $query_resqonse = User::where([
            ['phone_no',$request->phone_no],
            ['id','<>',$request->id],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_patient_email(Request $request){
        $query_resqonse = User::where([
            ['email',$request->email],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_patient_phone_no(Request $request){
        $query_resqonse = User::where([
            ['phone_no',$request->phone_no],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_doctor_email(Request $request){
        $query_resqonse = Doctor::where([
            ['email',$request->email],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function check_doctor_phone_no(Request $request){
        $query_resqonse = Doctor::where([
            ['phone_no',$request->phone_no],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }
    public function validate_patient(Request $request){
        $query_resqonse = User::where([
            ['email',$request->email],
        ])->first();
        if($query_resqonse!=NULL){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
    public function validate_doc(Request $request){
        $query_resqonse = Doctor::where([['id',$request->dname]])->first();
        if($query_resqonse!=NULL){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
}
