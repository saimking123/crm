<?php

namespace App\Http\Controllers;
use App\Models\form;
use DB;
use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function registerformget(){
        return view('form/register');
    }
    public function registerformpost(Request $req){
        $form = new form();
        $form->firstname = $req->first_name;
        $form->lastname = $req->last_name;
        $form->address = $req->address;
        $form->role = $req->role;
        $form->password = $req->password;
        $form->phone = $req->phone;
        $form->email= $req->email;
        $form->save();
        return redirect()->back()->with("success data inserted");
    }

    public function loginget(){
        return view('form/login');
    }

    public function loginpost(Request $req){
        $email = $req->email;
        $password = $req->password;
    
        // Assuming you have a "role" column in your "forms" table
        $user = DB::table('forms')->where(["email" => $email, "password" => $password])->first();
    
        if ($user) {
            $redirectPath = "/dashboard"; // Default redirect path
    
            if ($user->role == 0) {
                $redirectPath = "/user-dashboard";
            } elseif ($user->role == 1) {
                $redirectPath = "/manager-dashboard";
            } elseif ($user->role == 2) {
                $redirectPath = "/admin-dashboard";
            }
            // Add more elseif conditions for other roles if needed
    
            $req->session()->put("user", $user);
            return redirect($redirectPath);
        }
    
        // Handle login failure
        return redirect("/login")->with("error", "Invalid email or password");
    }
    

    }
