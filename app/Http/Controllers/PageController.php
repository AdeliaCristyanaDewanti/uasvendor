<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    function index()
    {
        $nama = Auth::user()->name;
        return view('/admin/dashboard');
    }
    function admin()
    {
        // $nama = Auth::user()->name;
        // $langganan = Auth::user()->langganan;
        // $bank = Bank::all();
        // return view('/warlok/dashboard', ['key' => 'nama', 'nama' => $nama, 'langganan' => $langganan, 'bank' => $bank]);
        return view('/admin/dashboard');
    }

    function vendor()
    {
        return view('/vendor/dashboard');
    }

    function bank()
    {
        return view('/bank/dashboard');
    }

    function createproject()
    {
        return view('/bank/createproject');
    }

    public function simpanproject(Request $request)
    {
        $input = $request->all();


        Project::create($input);
        return redirect('/bank');

    }

}
