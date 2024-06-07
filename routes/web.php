<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontAuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuffaSchoolController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StaffDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectEnrollController;

Route::get('/', [SuffaSchoolController::class,'index'])->name('home');
Route::get('/subject-detail/{id}', [SuffaSchoolController::class,'detail'])->name('subject-detail');

Route::get('/enroll-now/{id}', [SubjectEnrollController::class,'enroll'])->name('enroll-now');
Route::post('/new-enroll/{id}', [SubjectEnrollController::class,'newEnroll'])->name('new-enroll');

Route::get('/login-page', [FrontAuthController::class,'index'])->name('login-page');
Route::post('/user-login', [FrontAuthController::class,'login'])->name('user-login');
Route::post('/teacher-logout', [FrontAuthController::class,'logoutTeacher'])->name('teacher-logout');


Route::get('/teacher-dashboard', [TeacherDashboardController::class,'index'])->name('teacher-dashboard');
Route::get('/add-subject', [SubjectController::class,'index'])->name('add-subject');
Route::post('/new-subject', [SubjectController::class,'create'])->name('new-subject');
Route::get('/manage-subject', [SubjectController::class,'manage'])->name('manage-subject');
Route::get('/edit-subject/{id}', [SubjectController::class,'edit'])->name('edit-subject');
Route::get('/delete-subject/{id}', [SubjectController::class,'delete'])->name('delete-subject');

Route::get('/staff-dashboard', [StaffDashboardController::class,'index'])->name('staff-dashboard');

Route::get('/student-dashboard', [StudentDashboardController::class,'index'])->name('student-dashboard');
Route::get('/add-student', [StudentDashboardController::class,'add'])->name('add-student');
Route::post('/new-student', [StudentDashboardController::class,'create'])->name('new-student');
Route::get('/manage-student', [StudentDashboardController::class,'manage'])->name('manage-student');
Route::get('/student-detail/{id}', [StudentDashboardController::class,'detail'])->name('student-detail');
Route::get('/student-status/{id}', [StudentDashboardController::class,'updateStatus'])->name('student-status');
Route::get('/edit-student/{id}', [StudentDashboardController::class,'edit'])->name('edit-student');
Route::post('/update-student/{id}', [StudentDashboardController::class,'update'])->name('update-student');
Route::get('/delete-student/{id}', [StudentDashboardController::class,'delete'])->name('delete-student');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','superAdmin'])->group(function () {
    Route::get('/add-user', [AdminController::class,'index'])->name('add-user');
    Route::post('/new-user', [AdminController::class,'create'])->name('new-user');
    Route::get('/manage-user', [AdminController::class,'manage'])->name('manage-user');
    Route::get('/edit-user/{id}', [AdminController::class,'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [AdminController::class,'update'])->name('update-user');
    Route::get('/delete-user/{id}', [AdminController::class,'delete'])->name('delete-user');
});
Route::get('/dashboard', [SuperAdminController::class,'index'])->name('dashboard');

Route::get('/add-teacher', [TeacherController::class,'index'])->name('add-teacher');
Route::post('/new-teacher', [TeacherController::class,'create'])->name('new-teacher');
Route::get('/manage-teacher', [TeacherController::class,'manage'])->name('manage-teacher');
Route::get('/teacher-detail/{id}', [TeacherController::class,'detail'])->name('teacher-detail');
Route::get('/teacher-status/{id}', [TeacherController::class,'updateStatus'])->name('teacher-status');
Route::get('/edit-teacher/{id}', [TeacherController::class,'edit'])->name('edit-teacher');
Route::post('/update-teacher/{id}', [TeacherController::class,'update'])->name('update-teacher');
Route::get('/delete-teacher/{id}', [TeacherController::class,'delete'])->name('delete-teacher');

Route::get('/manage-course', [AdminCourseController::class,'manage'])->name('manage-course');
Route::get('/view-detail/{id}', [AdminCourseController::class,'subjectDetail'])->name('view-detail');
Route::get('/update-status/{id}', [AdminCourseController::class,'updateStatus'])->name('update-status');

Route::get('/add-staff', [StaffController::class,'index'])->name('add-staff');
Route::post('/new-staff', [StaffController::class,'create'])->name('new-staff');
Route::get('/manage-staff', [StaffController::class,'manage'])->name('manage-staff');
Route::get('/detail/{id}', [StaffController::class,'detail'])->name('detail');
Route::get('/staff.status/{id}', [StaffController::class,'updateStatus'])->name('staff.status');
Route::get('/staff.detail/{id}', [StaffController::class,'edit'])->name('staff.detail');
Route::get('/edit-staff/{id}', [StaffController::class,'edit'])->name('edit-staff');
Route::post('/update-staff/{id}', [StaffController::class,'update'])->name('update-staff');
Route::get('/delete-staff/{id}', [StaffController::class,'delete'])->name('delete-staff');
