<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use DB;


class HomeController extends Controller
{
     public function redirect()
    {
        if(Auth::id())
        {
              if(Auth::user()->usertype=='0')
                {
                    $doctor= doctor::all();
                
                    return view('user.home',compact('doctor'));
                }  

                else
                {
                    $patients=Appointment::count();
                    $doctors=Doctor::count();
                    $users=User::where('usertype','0')->count();

                    
                       $days= Appointment::whereDate('created_at', date('Y-m-d'))->get();
                         
                      
                  
                

                    return view('admin.home',compact('patients','doctors','users','days'));
                }
        }

        else
        {
            return redirect()->back();
        }
        
    } 


    public function index()
    {/*
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
            */$doctor= doctor::all();
            return view('user.home',compact('doctor'));

       
        
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->patient=$request->patient;
        $data->gender=$request->gender;
        $data->doctor=$request->doctor;
        $data->status='In Progress';

        if(Auth::id())
        {
          $data->user_id=Auth::user()->id;  
        }
        
        $data->save();

        return redirect()->back();
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
           return view('user.include.my_appointment',compact('appoint')); 
        }
        else
        {
            return redirect()->back();
        }

        
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();

        return redirect()->back();
    }

   
}
