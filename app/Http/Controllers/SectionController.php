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
        if (isset($request->imageSection)) {
            $section->addMedia($request->file('imageSection')->getRealPath())->toMediaCollection('sections');
        } else {
            //* TODO: EN PRODUCCIONT DESCOMENTAR ESTO PARA QUE SE USEN LAS IMAGENES QUE SE TIENEN EN EL PROYECTO.
            // $section->addMediaFromUrl(Storage::path('public/images/desk.jpg'))->toMediaCollection('sections');
            $section->addMediaFromUrl('https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')->toMediaCollection('sections');
        }

        return redirect()->route('dashboard');
    }
}
