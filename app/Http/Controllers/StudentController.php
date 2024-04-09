<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $student = new Student();
        $student->fill($request->only(['name', 'phone']));
        $student->save();
        return redirect()->route('index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function updateRow()
    {
        $student = Student::find(1);
        if ($student) {
            $student->update([
                'name' => 'Phát',
                'phone' => '0951313'
            ]);
        }
    }
    public function deleteRow()
    {
        $student = Student::find(26);
        if ($student) {
            $student->delete();
        } else {
            return "Không tồn tại hàng 26";
        }
    }
}
