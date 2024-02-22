<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->skill);
        $request->validate([
            'job_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'year' => 'required',
            'skill' => 'required',
            
        ]);

        $getId = Candidates::create([
            'job_id' => $request->get('job_id'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'year' => $request->get('year')
        ]);

        $user =  Candidates::find($getId->id);
        $user->skill_sets()->attach($request->skill);

        return back()->with('success', 'data telah ditambahkan');
    }
}
