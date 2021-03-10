<?php

namespace App\Http\Controllers\Admin;

//use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Admin\StoreAppointmentsRequest;
//use App\Http\Requests\Admin\UpdateAppointmentsRequest;

class MyInfoController extends Controller
{
    /**
     * Display a listing of Appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('appointment_access')) {
            return abort(401);
        }

        //$appointments = Appointment::all();

        return view('admin.my_info.myinfo'/*, compact('appointments')*/);
    }

    

}
