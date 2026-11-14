<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student List';
        $students = Student::all();

        return view('admin.student.index', compact('title', 'students'));
    }

    public function create()
    {
        $title = 'Tambah Siswa';
        $classrooms = Classroom::all();
        return view('admin.student.create', compact('title', 'classrooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'NIS'          => 'required|string|unique:students,NIS',
            'classroom_id' => 'required|exists:classrooms,id',
            'status'       => 'required|in:Active,Inactive',
        ]);

        Student::create($validated);

        return redirect('/admin/students')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
