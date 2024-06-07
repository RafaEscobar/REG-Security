<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {
        //
    }

    public function store(SectionRequest $request)
    {
        $section = Section::create(
            array_merge(
                $request->all(),
                ['user_id' => Auth()->user()->id]
            )
        );
        $section->addMedia($request->imageSection->getRealPath())->toMediaCollection('sections');
        return redirect()->route('dashboard');
    }
}
