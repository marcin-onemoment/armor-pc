<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
        $opinions = Opinion::all();

        return view('admin.opinions.index', compact('opinions'));
    }

    public function create()
    {
        return view('admin.opinions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required',
        ]);

        Opinion::create([
            'author' => $request->input('author'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('opinions.index')->with('success', __('Opinion added successfully'));
    }

    public function show(Opinion $opinion)
    {
        return view('admin.opinions.show', compact('opinion'));
    }

    public function edit(Opinion $opinion)
    {
        return view('admin.opinions.edit', compact('opinion'));
    }

    public function update(Request $request, Opinion $opinion)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required',
        ]);

        $opinion->update([
            'author' => $request->input('author'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('opinions.index')->with('success', __('Opinion updated successfully'));
    }

    public function destroy(Opinion $opinion)
    {
        $opinion->delete();

        return redirect()->route('opinions.index')->with('success', __('Opinion deleted successfully'));
    }
}
