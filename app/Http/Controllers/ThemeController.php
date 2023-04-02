<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeStoreRequest;
use App\Http\Requests\ThemeUpdateRequest;
use App\Models\Subject;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme = Theme::all();
        return view('theme.index', compact('theme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        return view('theme.create', compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemeStoreRequest $request)
    {
        $theme = new Theme;
        $theme->name = $request->input('name');
        $theme->description = $request->input('description');
        $theme->subject_id = $request->input('subject_id');
        $theme->save();

        return redirect('/theme')->with('success', 'Запись успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        return view('theme.show', compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        $subject = Subject::all();
        return view('theme.edit', compact('theme', 'subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(ThemeUpdateRequest $request, int $id)
    {
        $theme = Theme::findOrFail($id);
        $theme->name = $request->input('name');
        $theme->description = $request->input('description');
        $theme->subject_id = $request->input('subject_id');
        $theme->update();

        return redirect('/theme')->with('warning', 'Запись успешно обновлён!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        return redirect('/theme')->with('danger', 'Данные успешно удалены!');
    }
}
