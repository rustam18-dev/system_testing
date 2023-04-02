<?php

namespace App\Http\Controllers;

use App\Http\Requests\LangStoreRequest;
use App\Http\Requests\LangUpdateRequest;
use App\Models\Lang;
use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Lang::all();
        return view('lang.index', compact('lang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LangStoreRequest $request)
    {
        $lang = new Lang;
        $lang->name = $request->input('name');
        $lang->save();

        return redirect('/lang')->with('success', 'Запись успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lang  $lang
     * @return \Illuminate\Http\Response
     */
    public function show(Lang $lang)
    {
        return view('lang.show', compact('lang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lang  $lang
     * @return \Illuminate\Http\Response
     */
    public function edit(Lang $lang)
    {
        return view('lang.edit', compact('lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lang  $lang
     * @return \Illuminate\Http\Response
     */
    public function update(LangUpdateRequest $request, int $id)
    {
        $lang = Lang::findOrFail($id);
        $lang->name = $request->input('name');
        $lang->update();

        return redirect('/lang')->with('warning', 'Запись успешно обновлён!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lang  $lang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lang $lang)
    {
        $lang->delete();

        return redirect('/lang')->with('danger', 'Данные успешно удалены!');
    }
}
