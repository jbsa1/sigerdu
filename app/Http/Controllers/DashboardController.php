<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function user()
    {
        return view('user');
    }

    public function tambahUser()
    {
        return view('tambahUser');
    }

    public function editUser()
    {
        return view('editUser');
    }

    public function konten()
    {
        return view('konten');
    }

    public function materi()
    {
        return view('materi');
    }
}
