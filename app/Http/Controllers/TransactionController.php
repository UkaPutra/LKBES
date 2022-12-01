<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Student;
use App\Models\Tarik;
use App\Models\Setor;

class TransactionController extends Controller
{
   public function index()
   {
        // $transactions = Transaction::with('Siswa')->get();
        // dd($transactions);
        $students = Student::all();
        // dd($student);
        // $tariks = Tarik::where('siswa_id',$student->id)->sum('tarik');
        // dd($tariks);
        // $setors = Setor::where('siswa_id', $student->id)->sum('setor');
        // dd($setors);
        // $saldo = $setors - $tariks;
        // dd($saldo);
        return view('Saldo.saldo',compact('students'));
   }

   public function detail(Student $id)
   {
        $students = Student::all();
        return view('Saldo.detail_saldo',compact('id','students'));
   }

}
