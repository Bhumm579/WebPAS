<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $title = 'Subject List';
        $subjects = Subject::with('teacher')->get();

        return view('admin.subject.index', compact('title', 'subjects'));
    }

    public function create()
    {
        $title = 'Tambah Mata Pelajaran';

        return view('admin.subject.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ]);

        Subject::create($validated);

        return redirect('/admin/subjects')->with('success', 'Data mata pelajaran berhasil ditambahkan.');
    }
}