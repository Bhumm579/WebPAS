<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Teacher List';
        $teachers = Teacher::with('subject')->get();

        return view('admin.teacher.index', compact('title', 'teachers'));
    }

    public function create()
    {
        $title = 'Tambah Guru';
        $subjects = Subject::whereDoesntHave('teacher')->get();

        return view('admin.teacher.create', compact('title', 'subjects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'niy'        => 'required|string|max:10|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id',
            'start_date' => 'required|date',
        ]);

        Teacher::create($validated);

        return redirect('/admin/teachers')->with('success', 'Data guru berhasil ditambahkan.');
    }
}