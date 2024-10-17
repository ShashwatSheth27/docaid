<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\admin\DoctorController;
use Illuminate\Support\Facades\Auth;

class AppointmentModal extends Component
{
    private $viewData = [];
    private $doctorController;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(DoctorController $doctorController)
    {
        $this->doctorController = $doctorController;
        $fetchFields = ['id','firstname', 'lastname'];
        $data = $this->doctorController->getActiveDoctors($fetchFields);
        $options = [];
        foreach ($data as $value) {
            if(empty($value['id']) || empty($value['firstname'])) continue;
            $options[] = ['id'=>$value['id'], 'name'=>$value['firstname'].' '.$value['lastname']];
        }
        $this->viewData['doctors'] = $options;

        if(Auth::check() && Auth::guard('web')->check() && Auth::user()->email){
            $this->viewData['userEmail'] = Auth::user()->email;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // pass the pre defined options or available time slots
        return view('components.appointment-modal', $this->viewData);
    }
}
