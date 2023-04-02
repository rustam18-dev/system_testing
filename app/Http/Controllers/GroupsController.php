<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupsStoreRequest;
use App\Http\Requests\GroupsUpdateRequest;
use App\Models\Groups;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Groups::all();
        $role = Role::all();
        return view('groups.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Role::where('slug', 'teacher');
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupsStoreRequest $request)
    {
        $groups = new Groups;
        $groups->name = $request->input('name');
        $groups->description = $request->input('description');
        $groups->status = $request->input('status');
        $groups->teacher_id = $request->input('teacher_id');
        $groups->save();

        return redirect('/group');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function show(Groups $groups)
    {
        return view('groups.show', compact('groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function edit(Groups $groups)
    {
        return view('groups.edit', compact('groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(GroupsUpdateRequest $request, int $id)
    {
        $groups = Groups::findOrFail($id);
        $groups->name = $request->input('name');
        $groups->description = $request->input('description');
        $groups->status = $request->input('status');
        $groups->teacher_id = $request->input('teacher_id');
        $groups->update();

        return redirect('/group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groups  $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $groups)
    {
        $groups->delete();

        return ('/group');
    }
}
