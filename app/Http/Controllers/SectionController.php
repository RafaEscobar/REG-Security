<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

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
        $section->addMedia(
            isset($request->imageSection) ?
            $request->imageSection->getRealPath() :
            Storage::path('public/images/desk.jpg')
        )->toMediaCollection('sections');
        return redirect()->route('dashboard');
    }
}
