<?php

namespace App\Http\Controllers;
use App\Models\form;
use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function registerformget(){
        return view('form/register');
    }
    public function registerformpost(Request $req){
        $form = new form();
        $form->firstname = $req->;
        $form->firstname = $req->;
        $form->firstname = $req->;
        $form->firstname = $req->;
        $form->firstname = $req->;
        $form->firstname = $req->;
        $form->firstname = $req->;

    }
}
