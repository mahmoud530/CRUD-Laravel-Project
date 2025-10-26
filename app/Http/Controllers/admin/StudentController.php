<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        
        $students = Student::get();
        return view("admin.students.index", compact('students'));
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.show', compact('student'));
    }

    public function create()
    {
        $departments = Department::get();
        return view("admin.students.create", compact('departments'));
    }
// store
    public function store(StudentRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $photoName = $request->file('photo')->getClientOriginalName();
            $photo = $request->file('photo')->storeAs('images', $photoName, 'public'); 
            $data['photo'] = $photo;
        }
        Student::create($data);
        return redirect()->back()->with('msg', 'Student added successfully');
    }
    // delete
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if (!empty($student->photo) && Storage::exists($student->photo)) {
            Storage::delete($student->photo);
        }
        $student->delete();
        return redirect()->back()->with('msg', 'Student deleted successfully');
    }
    // edit
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $departments = Department::get();
        return view("admin.students.edit", compact('student','departments'));
    }
     public function update(StudentRequest $request, $id)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $photoName = $request->file('photo')->getClientOriginalName();
            $photo = $request->file('photo')->storeAs('images', $photoName, 'public'); 
            $data['photo'] = $photo;
        }

        $student = Student::findOrFail($id);

        if ($request->hasFile('photo') && !empty($student->photo) && Storage::disk('public')->exists($student->photo)) {
            Storage::disk('public')->delete($student->photo);
        }

        $student->update($data);

        return redirect()->back()->with('msg','Student updated successfully');
    }
}
?>
