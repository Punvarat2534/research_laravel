<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Article;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ActivityController extends Controller
{
    public function activity_detail()
    {
        $data = [];     
        return view('activity.activity_detail', $data);
    }



    public function create()
    {
        $data = []; 
        return view('activity.created', $data);
       
    }


    public function insert(Request $request){


        //echo "test";
        $activity = new Activity(); 
        $code = "C2504202501";
        $activity->code = $code;
        $activity->title = $request->txtatvname;
        $activity->short_detail = $request->txtshort_text;
        $activity->full_detail = $request->txtfull_text;
        $activity->type = $request->atvtype;
        $activity->datestart_regist = $request->regist_start;
        $activity->dateend_regist = $request->regist_end;
        $activity->datestart = $request->date_start;
        $activity->dateend = $request->date_end;
        $activity->app_count = $request->txtregiscnt;
        $activity->LineNoti = $request->atvline;
        $activity->ac_condition = $request->txtcondition_text;
        $activity->contact_department = $request->txtdepartment;
        $activity->contact_name = $request->txtcontactnm;
        $activity->contact_phone = $request->txtcontactphone;
        $activity->contact_email = $request->txtcontactemail;
        $activity->contact_lineid = $request->txtLineid;
        $activity->contact_address = $request->txtcontactAdd;
        $activity->maps = $request->txtmap;
        $activity->files = "";
        $activity->event_location = $request->txtevent_localtion;
        $activity->created_by = "superadmin";
        $activity->ip = $request->ip();
 
        $activity->save();

        $data = []; 
        return view('activity.created', $data);

    }



}
