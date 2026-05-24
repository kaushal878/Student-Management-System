<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

// In a real Laravel app, wrap with auth middleware and Breeze routes.

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('classes', ClassController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('marks', MarkController::class);
Route::get('reports/students', [ReportController::class, 'students'])->name('reports.students');
Route::get('reports/attendance', [ReportController::class, 'attendance'])->name('reports.attendance');
Route::get('reports/results', [ReportController::class, 'results'])->name('reports.results');
