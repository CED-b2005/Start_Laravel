<?php


namespace App\Http\Controllers;
use App\Http\Requests\NhapRequest;

class NhapSV_Controller
{
   function show_form(){
        // return view
        return view('nhapSV');
   }

   function handleAddStudent(NhapRequest $request){
        $student = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address')
        ];
        return view('nhapSV')->with(['student'=>$student]);
   }
}