<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Reports;
use Image;



class PersonalizedController extends Controller
{
    public function index()
    {
        return view('personalized');

    }

    function insert_data(Request $request)
    {
     $request->validate([
      'name'  => 'required',
      'phone'  => 'required',
    //   'email'  => 'required',
      'date_of_incident'  => 'required',
    //   'gender'  => 'required',
      'place_of_residence'  => 'required',
      'complain'  => 'required',
    //   'image' => 'required|image|max:2048'
     ]);
        // dd($request->name,$request->email,$request->phone,$request->user_image);

     $image_file = $request->user_image;

     $image = Image::make($image_file);

     Response::make($image->encode('jpeg'));

     $form_data = array(
      'name'  => $request->name,
      'phone'  => $request->phone,
      'email'  => $request->email,
      'date_of_incident'  => $request->date_of_incident,
      // 'gender'  => $request->gender,
      'place_of_residence'  => $request->place_of_residence,
      'complain'  => $request->complain,
      'image' => $image_file,
      'status'  => $request->status
     );

    //  dd($form_data);

     Reports::create($form_data);

     return redirect()->back()->with('success', 'Data sent successfully');
    }
}
