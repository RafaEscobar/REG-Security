<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index() 
    {
        //
    }

    public function store(SectionRequest $request)
    {
        Section::create(
            array_merge(
                $request->all(),
                ['user_id' => Auth()->user()->id]
            )
        );
        return redirect()->route('dashboard');
    }
}
