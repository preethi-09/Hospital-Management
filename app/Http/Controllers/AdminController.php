<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;
use Validator;
use Auth;
use DB;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor= new doctor;

        $doctor->fname=$request->fname;
        $doctor->lname=$request->lname;
        $doctor->gender=$request->gender;
        $doctor->dob=$request->dob;
        $doctor->experience=$request->experience;
        $doctor->age=$request->age;
        $doctor->specialist=$request->specialist;
        $doctor->duty=$request->duty;
        $doctor->qualification=$request->qualification;
        $doctor->address=$request->address;
        $doctor->state=$request->state;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->city=$request->city;
        $doctor->country=$request->country;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully!');
    }

    public function showappointment()
    {
        
         $data = appointment::select("*")
                        ->where("status", "=", "In Progress")->paginate(5);
                        
        return view('admin.showappointment',compact('data'));


    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();
    }

     public function cancel($id)
    {
        $data=appointment::find($id);
        $data->status='Cancelled';
        $data->save();

        return redirect()->back();
    }

     public function showdoctor()
    {
        $data=doctor::paginate(5);
        return view('admin.showdoctor',compact('data'));
    }

    public function edit($id)
    {
        $data=doctor::find($id);

        return view('admin.edit_doctor',compact('data'));
        
    }

     public function delete($id)
    {
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor=doctor::find($id);

        $doctor->fname=$request->fname;
        $doctor->lname=$request->lname;
        $doctor->gender=$request->gender;
        $doctor->dob=$request->dob;
        $doctor->experience=$request->experience;
        $doctor->age=$request->age;
        $doctor->specialist=$request->specialist;
        $doctor->duty=$request->duty;
        $doctor->qualification=$request->qualification;
        $doctor->address=$request->address;
        $doctor->state=$request->state;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->city=$request->city;
        $doctor->country=$request->country;
    

        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('doctorimage',$imagename);
            $doctor->image=$imagename;

        }

        
        $doctor->save();
        return redirect('showdoctor')->with('message','Doctor details updated Successfully!');
    }

     public function showpatient()
    {   
            $data = DB::table('appointments')
                    ->whereIn('status', ["approved", "Cancelled"])->paginate(10);
                     

            return view('admin.showpatient',compact('data'));
        
    }

    public function view($id)
    {
       $doctor=doctor::select('*')->where('id','=',$id)->first();

        return view('admin.viewdoctor',compact('doctor'));
        
    }

    public function emailview($id)
    {
        $data=appointment::find($id);
        return view('admin.send_email',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data=appointment::find($id);
        $details=[
            'greeting'=>$request->greeting,
            'body'=>$request->body,
            'actiontext'=>$request->actiontext,
            'actionurl'=>$request->actionurl,
            'endpart'=>$request->endpart

        ];
        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email have been send Successfully! ');
    }

    public function adminhome()
    {
        return redirect('home');
    }

    public function viewappointment()
    {
        return redirect('showappointment');
    }

   /* public function logout(Request $request) {
        //dd('in');
        Auth::logout();
        return view('user.home');
    }*/

   
}
