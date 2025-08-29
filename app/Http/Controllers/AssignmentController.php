<?php

namespace App\Http\Controllers;
use App\Models\Assignments;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function UploadAssignment(Request $req){
     $formfields = $req->validate([
        "topic" => ['min:3','max:50','string','required'],
        "desc" => ['min:5','max:500','string','required'],
        "marks" => ['min:5','max:100','integer','required'],
        "batch" => ['required'],
        "deadline" => ['required'],
        "type" => ['required'],
        "file" => ['required','mimes:jpg,jpeg,docs,xls,pdf,txt,png','max:10000']
     ]);   


//store file in storage
$formfields['file'] = $req->file('file')->store('assignments','public');


Assignments ::create($formfields);


     
    }
}