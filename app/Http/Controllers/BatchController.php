<?php

namespace App\Http\Controllers;
use App\Models\Batches;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function AddBatch(Request $req){
        $formFields = $req->validate([
            "name" => 'required',
            "course" => 'required',
            "start_date" => 'required',
            "end_date" => 'required',
            "capacity" => 'required',
            "status" => 'required',
        ]);

Batches::create($formFields);
return back()->with('message','Batch Added Sucessfully ');

        
    }
}