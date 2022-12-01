<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Setor;

class SetorController extends Controller
{
    public function setor()
    {
        $students = Student::all();
        return view('Setor.setor', compact('students'));
    }

    public function addSetor(Request $request)
    {
        $setor = Setor::create([
            'siswa_id' => $request->nama,
            'setor' => $request->jumlah,
            'tgl_setor' => $request->date
        ]);

        return redirect('/daftar_setor');
    }

    public function daftarSetor(Request $request)
    {
        $setors = Setor::with('Siswa')->latest()->paginate(10);
        return view('Setor.daftar_setor', compact('setors'));
    }

    public function edit(Setor $id)
    {
        $students = Student::all();
        // dd($id);
        return view('Setor.editSetor',compact('students','id'));
    }

    public function update(Request $request, Setor $id)
    {
        $id->update([
            'siswa_id' => $request->nama,
            'setor' => $request->jumlah,
            'tgl_setor' => $request->date
        ]);

        return redirect('/daftar_setor');
    }

    public function destroy(Setor $id)
    {
        $id->delete();

        return back();
    }
}
