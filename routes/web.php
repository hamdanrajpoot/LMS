<?php
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', function () {
    return view('welcome');
})->middleware('guest')->name('login');

Route::prefix('/user')->group(function(){
    Route::post('/login',[UserController::class,'Login']);
});
Route::post('/logout',[UserController::class,'logout']);



//protected routes

//Route group for teacher
Route::prefix('/teacher')->middleware('auth')->group(function(){
    Route::view('/dashboard','teachers.pages.Dashboard')->name('home');
    Route::view('/upload-assignments','teachers.pages.upload-assignment')->name('teacher-upload-assignment');


    Route::post('/upload-assignment',[AssignmentController::class,'UploadAssignment']);
});

// Route group for admin
Route::prefix('/admin')->middleware(['auth',\App\Http\Middleware\AdminMiddleware::class])->group(function(){
    Route::view('/add-user','admin.pages.add-user');
    Route::view('/dashboard','admin.pages.admin-dashboard');
    Route::view('/add-courses','admin.pages.add-course');
    Route::view('/add-batches', 'admin.pages.add-batches');


    Route::get('/add-batches',[CourseController::class,'GetCourses']);
     Route::get('/add-user',[CourseController::class,'GetCoursesUser']);
     
    
     Route::post('/add-user',[AdminController::class,'AddUser']);
    Route::post('/add-course',[CourseController::class,'AddCourse']);
    Route::post('/add-batches',[BatchController::class,'AddBatch']);
});

// Route group for student
   Route::prefix('/student')->middleware(['auth'])->group(function(){
    Route::view('/dashboard','students.pages.student-dashboard');

});