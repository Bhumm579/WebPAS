<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom List';
        $classrooms = Classroom::with('students')->get();

        return view('admin.classroom.index', compact('title', 'classrooms'));
    }

    public function create()
    {
        $title = 'Tambah Kelas';

        return view('admin.classroom.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'major' => 'required|string|max:255',
        ]);

        Classroom::create($validated);

        return redirect('/admin/classrooms')->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
