<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Classroom;

class StudentController extends Controller
{
    public function addStudentForm()
    {
        // $user = User::all();
        $classrooms = Classroom::all();
        return view('Siswa.addStudent',compact('classrooms'));
    }

    public function addStudent(Request $request)
    {
        $request->validate([
            'nama_siswa'=> 'required',
            'kelas'=> 'required',
            'alamat'=> 'required',
            'jk'=> 'required',
            'no_hp'=> 'required',
        ]);

        $student = Student::create([
            // 'no_rekening' =>rand(500,9999),
            'no_rekening' => 'LKBES-' . rand(1000,9999),
            'nama_siswa'=> $request->nama_siswa,
            'kelas_id'=> $request->kelas,
            'alamat'=> $request->alamat,
            'jk'=> $request->jk,
            'no_hp'=> $request->no_hp,
        ]);

        // dd($student);
        return redirect('/daftar_siswa');
    }

    public function index(Request $request)
    {
        $user = User::all();
        $students = Student::with('Kelas')->get();

        if ($request->has('search')) {
            $students = Student::where('nama_siswa','like','%'.$request->search.'%')->paginate(100);
        }else if($request->has('pilihKelas')){
            $students = Student::where('kelas_id'.$request->pilihKelas)->get();
        }else{
            $students = Student::paginate(100);
        }

        return view('siswa.daftar_siswa', compact('user','students'));
    }

    public function edit(Student $id)
    {
        $classrooms = Classroom::all();
        return view('siswa.edit_siswa', compact('id','classrooms'));
    }

    public function update(Request $request, Student $id)
    {
        $id->update([
            'nama_siswa'=> $request->nama_siswa,
            'kelas_id'=> $request->kelas,
            'alamat'=> $request->alamat,
            'jk'=> $request->jk,
            'no_hp'=> $request->no_hp,
        ]);

        return redirect('/daftar_siswa');
    }

    public function destroy(Student $id)
    {
        $id->delete();
        return back();
    }

    public function detail(Student $id)
    {
        return view('siswa.detail',compact('id'));
    }
}
