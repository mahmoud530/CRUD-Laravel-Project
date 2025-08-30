<?php
// el page de byb2a feha kol el requests

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Models\student;
use App\Models\department;

// existing routes

// Add this route if it does not exist
Route::get('/home', function () {
    return view('home');
})->name('home');
// Auth
Route::controller(AuthController::class)->group(function(){
    Route::get("/login","login")->name("login");
    Route::get("/register","register")->name("register");
     Route::get("/logout","logout")->name("logout");
    Route::post("/login","handelLogin")->name("handelLogin");
    Route::post("/register","handelRegister")->name("handelRegister");
   
});
//admin
Route::middleware('islogin')->prefix("admin")->name('admin')->group(function(){
    Route::controller(StudentController::class)->name(".student")->group(function(){
        Route::get("/students","index")->name(".index");
        Route::get("/students/create","create")->name(".create");
        Route::post("/students/store","store")->name(".store");
        Route::get("/students/{id}","show")->where(["id"=>"[0-9]+"])->name(".show");

        Route::delete("/students/{id}","destroy")->where(["id"=>"[0-9]+"])->name(".destroy");

        route::get("/students/{id}/edit","edit")->where(["id"=>"[0-9]+"])->name(".edit");
        route::put("/students/{id}","update")->where(["id"=>"[0-9]+"])->name(".update");

    });
    //department
    Route::controller(DepartmentController::class)->name(".department")->group(function(){
    Route::get("/departments","index")->name(".index");
    Route::get("/departments/create","create")->name(".create");
    Route::get("/departments/{id}","show")->where(["id"=>"[0-9]+"])->name(".show");
    
}); 

});

    