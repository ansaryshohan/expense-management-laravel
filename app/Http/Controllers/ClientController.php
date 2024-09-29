<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\GraduationResult;
use App\Models\HscResult;
use App\Models\PostGraduationResult;
use App\Models\SscResult;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients= Client::all() ;
        // dd($clients);
        return view("master.pages.allClient",compact("clients"));
    }

    public function create()
    {
        return view("master.pages.addClient");
    }
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'firstName'                 => ['required', 'string', 'max:255'],
            'lastName'                  => ['required', 'string', 'max:255'],
            'email'                     => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image'                     => ['required', "image", "mimes:jpeg,png,jpg,gif,svg", "max:5000"],
            'address'                   => ['required'],
            'city'                      => ['required'],
            'division'                  => ['required'],
            'zip'                       => ['required', "max:6"],
            'ssc'                       => ['required'],
            'sscGpa'                    => ['required'],
            'sscYear'                   => ['required'],
            'sscInstitute'              => ['required'],
            'sscBoard'                  => ['required'],
            'hsc'                       => ['required'],
            'hscGpa'                    => ['required'],
            'hscYear'                   => ['required'],
            'hscInstitute'              => ['required'],
            'hscBoard'                  => ['required'],
            'graduation'                => ['required'],
            'graduationGpa'             => ['required'],
            'graduationYear'            => ['required'],
            'graduationInstitute'       => ['required'],
            'postGraduation'            => ['required'],
            'postGraduationGpa'         => ['required'],
            'postGraduationYear'        => ['required'],
            'postGraduationInstitute'   => ['required'],
        ]);

         // image handle
         $renameImage = null;
         if ($request->hasFile("image")) {
             $image = $request->file("image");
             $renameImage = time() . "-" . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME). "." .$image->getClientOriginalExtension();
         }
        //  dd($renameImage);
        
        // user table
        $user = Client::create([
            "first_name"    => $request->firstName,
            "last_name"     => $request->lastName,
            "email"         => $request->email,
            "client_image"  => $renameImage,
            "address"       => $request->address,
            "city"          => $request->city,
            "division"      => $request->division,
            "zip"           => $request->zip
        ]);

        if ($user) {
            // image move on public folder
            $image = $request->file("image");
            $image->move(public_path("clientImg"), $renameImage);

            // ssc result
            SscResult::create([
                "degree_name"   => $request->ssc,
                "result"        => $request->sscGpa,
                "passing_year"  => $request->sscYear,
                "institute"     => $request->sscInstitute,
                "board"         => $request->sscBoard,
                "client_id"     => $user->id,
            ]);
            // hsc result
            HscResult::create([
                "degree_name"   => $request->hsc,
                "result"        => $request->hscGpa,
                "passing_year"  => $request->hscYear,
                "institute"     => $request->hscInstitute,
                "board"         => $request->hscBoard,
                "client_id"     => $user->id,
            ]);
            // graduation_result
            GraduationResult::create([
                "degree_name"       => $request->graduation,
                "result"            => $request->graduationGpa,
                "passing_year"      => $request->graduationYear,
                "institute"         => $request->graduationInstitute,
                "client_id"         => $user->id,
            ]);
            // post_graduation_result
            PostGraduationResult::create([
                "degree_name"    => $request->postGraduation,
                "result"         => $request->postGraduationGpa,
                "passing_year"   => $request->postGraduationYear,
                "institute"      => $request->postGraduationInstitute,
                "client_id"      => $user->id,
            ]);
        }
        ;

        // success message
        return redirect()->back()->with('success', 'Client added successfully!');

    }
    public function show()
    {

    }
}
