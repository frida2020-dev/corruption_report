<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Reports;
use Image;

class AnonymousController extends Controller
{
    public function index()
    {
        return view('anonymous');

    }
    function insert_data(Request $request)
    {
        $request->validate([
            'date_of_incident'  => 'required',
            'place_of_incidence'  => 'required',
            'complain'  => 'required',
           ]);
              // dd($request->name,$request->email,$request->phone,$request->image);
      
           $image_file = $request->user_image;
      
           $image = Image::make($image_file);
      
           Response::make($image->encode('jpeg'));
      
           $form_data = array(
            'date_of_incident'  => $request->date_of_incident,
            'place_of_incidence'  => $request->place_of_incidence,
            'complain'  => $request->complain,
            'image' => $image_file,
            'status'  => $request->status
           );
      
        //    dd($form_data);
      
           Reports::create($form_data);
      
           return redirect()->back()->with('success', 'Data sent successfully');
          
        }
}
