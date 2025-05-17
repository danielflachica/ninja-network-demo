<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // eager loading: query the related dojo once here instead of multiple times on render in the View (i.e. lazy loading)
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id) {
        $ninja = Ninja::with('dojo')->findOrFail($id); // findOrFail serves a 404 Error if it fails to find the record

        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create() {
        $dojos = Dojo::orderBy('name')->get();

        return view('ninjas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja created!');
    }

    public function destroy($id) {
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();

        return redirect()->route('ninjas.index')->with('success', 'Ninja deleted!');
    }

    // edit() and update() are for edit view and update requests
}
