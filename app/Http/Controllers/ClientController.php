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
        $clients = Client::all();
        // dd($clients);
        return view("master.pages.allClient", compact("clients"));
    }

    public function create()
    {
        return view("master.pages.addClient");
    }
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image' => ['required', "image", "mimes:jpeg,png,jpg,gif,svg", "max:5000"],
            'address' => ['required'],
            'city' => ['required'],
            'division' => ['required'],
            'zip' => ['required', "max:6"],
            'ssc' => ['required'],
            'sscGpa' => ['required'],
            'sscYear' => ['required'],
            'sscInstitute' => ['required'],
            'sscBoard' => ['required'],
            'hsc' => ['required'],
            'hscGpa' => ['required'],
            'hscYear' => ['required'],
            'hscInstitute' => ['required'],
            'hscBoard' => ['required'],
            'graduation' => ['required'],
            'graduationGpa' => ['required'],
            'graduationYear' => ['required'],
            'graduationInstitute' => ['required'],
            'postGraduation' => ['required'],
            'postGraduationGpa' => ['required'],
            'postGraduationYear' => ['required'],
            'postGraduationInstitute' => ['required'],
        ]);

        // image handle
        $renameImage = null;
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $renameImage = time() . "-" . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . "." . $image->getClientOriginalExtension();
        }
        //  dd($renameImage);

        // user table
        $user = Client::create([
            "first_name" => $request->firstName,
            "last_name" => $request->lastName,
            "email" => $request->email,
            "client_image" => $renameImage,
            "address" => $request->address,
            "city" => $request->city,
            "division" => $request->division,
            "zip" => $request->zip
        ]);

        if ($user) {
            // image move on public folder
            $image = $request->file("image");
            $image->move(public_path("clientImg"), $renameImage);

            // ssc result
            SscResult::create([
                "degree_name" => $request->ssc,
                "result" => $request->sscGpa,
                "passing_year" => $request->sscYear,
                "institute" => $request->sscInstitute,
                "board" => $request->sscBoard,
                "client_id" => $user->id,
            ]);
            // hsc result
            HscResult::create([
                "degree_name" => $request->hsc,
                "result" => $request->hscGpa,
                "passing_year" => $request->hscYear,
                "institute" => $request->hscInstitute,
                "board" => $request->hscBoard,
                "client_id" => $user->id,
            ]);
            // graduation_result
            GraduationResult::create([
                "degree_name" => $request->graduation,
                "result" => $request->graduationGpa,
                "passing_year" => $request->graduationYear,
                "institute" => $request->graduationInstitute,
                "client_id" => $user->id,
            ]);
            // post_graduation_result
            PostGraduationResult::create([
                "degree_name" => $request->postGraduation,
                "result" => $request->postGraduationGpa,
                "passing_year" => $request->postGraduationYear,
                "institute" => $request->postGraduationInstitute,
                "client_id" => $user->id,
            ]);
        }
        ;

        // success message
        return redirect()->back()->with('success', 'Client added successfully!');

    }
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view("master.pages.viewClientPage", compact("client"));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view("master.pages.editClient", compact("client"));
    }
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        // validation
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image' => ["image", "mimes:jpeg,png,jpg,gif,svg", "max:5000"],
            'address' => ['required'],
            'city' => ['required'],
            'division' => ['required'],
            'zip' => ['required', "max:6"],
            'ssc' => ['required'],
            'sscGpa' => ['required'],
            'sscYear' => ['required'],
            'sscInstitute' => ['required'],
            'sscBoard' => ['required'],
            'hsc' => ['required'],
            'hscGpa' => ['required'],
            'hscYear' => ['required'],
            'hscInstitute' => ['required'],
            'hscBoard' => ['required'],
            'graduation' => ['required'],
            'graduationGpa' => ['required'],
            'graduationYear' => ['required'],
            'graduationInstitute' => ['required'],
            'postGraduation' => ['required'],
            'postGraduationGpa' => ['required'],
            'postGraduationYear' => ['required'],
            'postGraduationInstitute' => ['required'],
        ]);

        // image handle
        $clientImage = $client->client_image;
        $renameImage = null;
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $renameImage = time() . "-" . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . "." . $image->getClientOriginalExtension();
        }
        // update in client database
        $updatedImage = $renameImage ?? $clientImage;
        $updatedClient = Client::where("id", $id)->update([
            "first_name" => $request->firstName,
            "last_name" => $request->lastName,
            "email" => $request->email,
            "client_image" => $updatedImage,
            "address" => $request->address,
            "city" => $request->city,
            "division" => $request->division,
            "zip" => $request->zip
        ]);

        // delete existing image
        $fullPath = public_path('clientImg/' . $clientImage);
        if (file_exists($fullPath) && $updatedClient) {
            // delete previous image
            unlink($fullPath);
        }
        // save new image in the clientImg folder
        if ($updatedClient && $request->hasFile("image")) {
            // save new image in public folder
            $request->file("image")->move(public_path("clientImg"), $updatedImage);
        }

        // ssc result
        SscResult::where("client_id", $id)->update([
            "degree_name" => $request->ssc,
            "result" => $request->sscGpa,
            "passing_year" => $request->sscYear,
            "institute" => $request->sscInstitute,
            "board" => $request->sscBoard,
            "client_id" => $client->id,
        ]);
        // hsc result
        HscResult::where("client_id", $id)->update([
            "degree_name" => $request->hsc,
            "result" => $request->hscGpa,
            "passing_year" => $request->hscYear,
            "institute" => $request->hscInstitute,
            "board" => $request->hscBoard,
            "client_id" => $client->id,
        ]);
        // graduation_result
        GraduationResult::where("client_id", $id)->update([
            "degree_name" => $request->graduation,
            "result" => $request->graduationGpa,
            "passing_year" => $request->graduationYear,
            "institute" => $request->graduationInstitute,
            "client_id" => $client->id,
        ]);
        // post_graduation_result
        PostGraduationResult::where("client_id", $id)->update([
            "degree_name" => $request->postGraduation,
            "result" => $request->postGraduationGpa,
            "passing_year" => $request->postGraduationYear,
            "institute" => $request->postGraduationInstitute,
            "client_id" => $client->id,
        ]);

        // success message
        return redirect("/clients")->with('success', 'Client updated successfully!');
    }
    public function destroy($id)
    {
        // dd("route ");
        $client = Client::findOrFail($id);
        if ($client) {

            SscResult::where('client_id', $client->id)->delete();
            HscResult::where('client_id', $client->id)->delete();
            GraduationResult::where('client_id', $client->id)->delete();
            PostGraduationResult::where('client_id', $client->id)->delete();

            $deletedClient = Client::where("id", $id)->delete();

            // delete existing image
            $fullPath = public_path('clientImg/' . $client->client_image);
            if (file_exists($fullPath) && $deletedClient) {
                // delete previous image
                unlink($fullPath);
            }

            // success message
            return redirect("/clients")->with('success', 'Client deleted successfully!');
        }
    }
}
