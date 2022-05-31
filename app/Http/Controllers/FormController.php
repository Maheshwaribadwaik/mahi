<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function store(Request $request){
    $form=new Form();
     $form->first_name= $request->first_name;
     $form->last_name= $request->last_name;
     $form->mob_no= $request->mob_no;

     $form->email=$request->email;
     $form->password=$request->password;
     $form->save();





   }
}
