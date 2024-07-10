<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $ad= new AdminModel();
        $admin=$ad->getAdmin();
        return view('admin',compact('admin'));
    }
}
