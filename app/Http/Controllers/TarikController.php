<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Tarik;


class TarikController extends Controller
{
    public function tarik()
    {
        $students = Student::all();
        return view('Tarik.tarik', compact('students'));
    }

    public function addTarik(Request $request)
    {
        $tarik = Tarik::create([
            'siswa_id' => $request->nama,
            'tarik' => $request->jumlah,
            'tgl_tarik' => $request->date
        ]);

        return redirect('/daftar_tarik');
    }

    public function daftarTarik(Request $request)
    {
        $tariks = Tarik::with('Siswa')->latest()->paginate(10);
        return view('Tarik.daftar_tarik', compact('tariks'));
    }

    public function edit(Tarik $id)
    {
        $students = Student::all();
        // dd($id);
        return view('Tarik.editTarik',compact('students','id'));
    }

    public function update(Request $request, Tarik $id)
    {
        $id->update([
            'siswa_id' => $request->nama,
            'tarik' => $request->jumlah,
            'tgl_tarik' => $request->date
        ]);

        return redirect('/daftar_tarik');
    }

    public function destroy(Tarik $id)
    {
        $id->delete();

        return back();
    }
}
