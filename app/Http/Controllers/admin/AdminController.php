<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use App\DataTables\UserDataTable;
use App\DataTables\AppointmentDataTable;
use App\DataTables\DashboardDataTable;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Contracts\Auth\UserProvider;

class AdminController extends Controller
{
    
    public function create(){
        return view('auth.admin');
    }
    public function index(DashboardDataTable $datatable){
        $count = [
            'doc_count'=>Doctor::count(),
            'patient_count'=>User::count(),
            'appointment_count'=>Appointment::whereDate('adate',date('Y-m-d'))->count()
        ];
        return $datatable->render('admin.index',$count);
    }

    protected function attemptlogin(Request $request)
    {
        $request->validate([
            'email' => ['required','string','email','max:255'],
            'password' => ['required']
        ]);

        Auth::guard('admin')->attempt($request->only('email', 'password'));
        if(Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->withErrors(['invalid'=>'Invalid credentials!'])->withInput();
        }
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
