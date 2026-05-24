<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        return view(strtolower('Mark') . '.index');
    }

    public function create()
    {
        return view(strtolower('Mark') . '.create');
    }

    public function store(Request \)
    {
        return redirect()->back()->with('success', 'Saved successfully.');
    }

    public function show(string \)
    {
        return view(strtolower('Mark') . '.show', compact('id'));
    }

    public function edit(string \)
    {
        return view(strtolower('Mark') . '.edit', compact('id'));
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
