<?php

namespace App\Http\Controllers;

use App\Models\LegalCase;
use Illuminate\Http\Request;

class LegalCaseController extends Controller
{
    public function index()
    {
        $legalCases = LegalCase::all();
        return view('legal-cases.index', compact('legalCases'));
    }

    public function create()
    {
        return view('legal-cases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        LegalCase::create($request->all());

        return redirect()->route('legal-cases.index')
            ->with('success', 'Legal Case created successfully.');
    }

    public function show($id)
    {
        $legalCase = LegalCase::findOrFail($id);
        return view('legal-cases.show', compact('legalCase'));
    }


    public function edit($id)
    {
        $legalCase = LegalCase::findOrFail($id);
        return view('legal-cases.edit', compact('legalCase'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $legalCase = LegalCase::findOrFail($id);
        $legalCase->update($validatedData);

        return redirect()->route('legal-cases.index')->with('success', 'تم تحديث القضية بنجاح');
    }

    public function destroy(LegalCase $legalCase)
    {
        $legalCase->delete();

        return redirect()->route('legal-cases.index')
            ->with('success', 'Legal Case deleted successfully.');
    }
}
