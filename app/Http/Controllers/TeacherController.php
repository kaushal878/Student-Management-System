<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view(strtolower('Teacher') . '.index');
    }

    public function create()
    {
        return view(strtolower('Teacher') . '.create');
    }

    public function store(Request \)
    {
        return redirect()->back()->with('success', 'Saved successfully.');
    }

    public function show(string \)
    {
        return view(strtolower('Teacher') . '.show', compact('id'));
    }

    public function edit(string \)
    {
        return view(strtolower('Teacher') . '.edit', compact('id'));
    }

    public function update(Request \, string \)
    {
        return redirect()->back()->with('success', 'Updated successfully.');
    }

    public function destroy(string \)
    {
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
