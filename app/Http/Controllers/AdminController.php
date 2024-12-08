<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $userName = "Adelia Cristyana D.";
        return view('admin.home');
    }

    public function createadmin()
    {
        return view('admins.create');
    }

    public function saveadmin()
    {
        $input = $request->all();


        Admin::create($input);
        return redirect('admins.save');
    }

    public function editadmin()
    {
        return view('admins.edit');
    }

    public function updateadmin()
    {
        return view('admins.update');
    }

    public function deleteadmin()
    {
        return view('admins.delete');
    }
}
