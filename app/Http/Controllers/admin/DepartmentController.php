<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments= Department::get();
        return view("admin.departments.index",compact('departments'));
    }
    public function show($id)
    {
        return Department::findorfail($id);
    }
    public function create()
    {
        return view("admin.departments.create");
    }
}
?>