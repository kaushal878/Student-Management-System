# Sajilo Student Manager

A beginner-friendly Student Management System scaffold inspired by Laravel 12 architecture.

## Features
- Authentication (login/register/forgot)
- Role-based access (admin, teacher)
- Modules: Students, Teachers, Classes, Subjects, Attendance, Marks, Results, Reports
- Bootstrap 5 + Chart.js dashboard
- REST-style routes and MVC layout

## Setup
1. Copy `.env.example` to `.env` and update DB credentials.
2. Create database `sajilo_student_manager`.
3. Run migrations and seeders in a real Laravel install.

## Database Tables
- users
- teachers
- school_classes
- subjects
- students
- attendance
- marks
- results
- activity_logs

## Deployment Notes
- Upload project to hosting/cPanel.
- Set document root to `public`.
- Configure `.env` and storage permissions.

## Credentials (seed sample)
- Admin: `admin@sajilo.test` / `password`
- Teacher: `teacher@sajilo.test` / `password`
