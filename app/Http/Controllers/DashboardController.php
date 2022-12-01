<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Tarik;
use App\Models\Setor;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        $student = Student::all()->count();
        $tarik = Tarik::sum('tarik');
        $setor = Setor::sum('setor');

        // dd($tarik);

        return view('dashboard', compact('user','student','tarik','setor'));
    }

    public function profile()
    {
        return view('Auth.profile');
    }
}
