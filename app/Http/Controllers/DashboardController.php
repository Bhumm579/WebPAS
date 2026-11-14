<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $stats = [
            'students'   => Student::count(),
            'classrooms' => Classroom::count(),
            'teachers'   => Teacher::count(),
            'subjects'   => Subject::count(),
        ];

        return view('admin.dashboard', compact('title', 'stats'));
    }
}
