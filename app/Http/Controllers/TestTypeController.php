<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestTypeStoreRequest;
use App\Http\Requests\TestTypeUpdateRequest;
use App\Models\Status;
use App\Models\TestType;
use Illuminate\Http\Request;

class TestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testType = TestType::all();
        return view('testType.index', compact('testType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('testType.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestTypeStoreRequest $request)
    {
        $testType = new TestType;
        $testType->name = $request->input('name');
        $testType->description = $request->input('description');
        $testType->status = $request->input('status');
        $testType->save();

        return redirect('/testType')->with('success', 'Запись успешно создан!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function show(TestType $testType)
    {
        return view('testType.show', compact('testType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function edit(TestType $testType)
    {
        $status = Status::all();
        return view('testType.edit', compact('testType', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function update(TestTypeUpdateRequest $request, int $id)
    {
        $testType = TestType::findOrFail($id);
        $testType->name = $request->input('name');
        $testType->description = $request->input('description');
        $testType->status = $request->input('status');
        $testType->update();

        return redirect('/testType')->with('warning', 'Запись успешно обновлён!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestType  $testType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestType $testType)
    {
        $testType->delete();

        return redirect('/testType')->with('danger', 'Данные успешно удалены!');
    }
}
