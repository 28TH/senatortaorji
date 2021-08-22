<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Exception;
use Illuminate\Http\Request;
use App\Mail\ApplicationForm;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;


class ScholarshipController extends Controller
{
    //

    public function show()
    {
        return view('scholarship');
    }

    public function show_form()
    {
        return view('form');
    }

    public function show_privacy()
    {
        return view('privacy');
    }

    public function submit_application(Request $request)
    {

            // return $request->all();

                //Validate files
                $request->validate([
                    'passport' => 'file|max:512|mimes:jpg,png,jpeg',
                    'admission_letter' => 'file|max:512|mimes:jpg,png,jpeg,pdf,doc,docx',
                    'idcard' => 'file|max:512|mimes:jpg,png,jpeg,pdf,doc,docx',
                    'lga_doc' => 'file|max:512|mimes:jpg,png,jpeg,pdf,doc,docx',
                ]);

                //Upload files
                $passport = $request->file('passport')->store('public');
                $admission_letter = $request->file('admission_letter')->store('public');
                $id_card = $request->file('idcard')->store('public');
                $lga_doc = $request->file('lga_doc')->store('public');
                
                //Generate app no.
                $current_year = date('Y');

                $count = Application::whereYear('created_at', $current_year)->count();
                $count += 1;
                $unique_no = str_pad($count, 3, '0', STR_PAD_LEFT);

                $app_no = "APPNO/{$current_year}/{$unique_no}";

                //Save in the DB
                $application = new Application;
                $application->app_no = $app_no;
                $application->surname = $request->surname;
                $application->firstname = $request->firstname;
                $application->othername = $request->othername;
                $application->email = $request->email;
                $application->phone = $request->phone;
                $application->alt_phone = $request->alt_phone;
                $application->address = $request->address;
                $application->lga = $request->lga;
                $application->university = $request->university;
                $application->major = $request->cos;
                $application->social_media_url = $request->social_media;

                $application->passport = Storage::url($passport);
                $application->admission_letter = Storage::url($admission_letter);
                $application->idcard = Storage::url($id_card);
                $application->lga_doc = Storage::url($lga_doc);
                
                //Save to DB
                $application->save();
                $id = encrypt($application->id);

                //send email to applicant
                if($request->email != null)
                    Mail::to([
                        'email' => $request->email,
                       ])->queue( new ApplicationForm(json_decode($application, true)) );
                 
                //redirect to application printing page
                return redirect("/application/{$id}");

    }

    public function application_form($id)
    {
        $id = decrypt($id);

        $data = Application::find($id);

        return view('viewform', $data);
    }

}
