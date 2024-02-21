<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'year' => 'required',
        ]);
        Candidates::create([
            'job_id' => $request->get('job_id'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'year' => $request->get('year')
        ]);

        return back()->with('success', 'data telah ditambahkan');
    }
}
