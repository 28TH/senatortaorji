<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Exception;
use Illuminate\Http\Request;

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

    public function submit_application(Request $request)
    {
        try{

                //Validate 

                //request params
                $application = new Application;
                $application->surname = $request->surname;
                $application->firstname = $request->firstname;
                $application->othername = $request->othername;
                $application->email = $request->email;
                $application->phone = $request->phone;
                $application->address = $request->address;
                $application->lga = $request->lga;
                $application->university = $request->university;
                $application->major = $request->cos;
                $application->social_media_url = $request->social_media;

                //upload files
                $application->passport = $request->file('passport')->store('public');
                $application->admission_letter = $request->file('admission_letter')->store('public');
                $application->idcard = $request->file('idcard')->store('public');
                $application->lga_doc = $request->file('lga_doc')->store('public');
                
                //store in DB
                $application->save();

                $id = encrypt($application->id);

                return redirect("/application/{$id}/view");


        }
        catch(\Exception $e){
                // return $e->getMessage();
            return redirect('/scholarship/application?status=err');
        }

    }

    public function application_form($id)
    {
        $id = decrypt($id);

        $data = Application::find($id);

        return view('viewform', $data);
    }

}
