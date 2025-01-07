<?php

namespace App\services;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorService
{
    public function index()
    {
        $professors = Professor::where('is_active', 1)->paginate(2);
        return view('admin.professors.index', compact('professors'));
    }
    public function create(){
        return view('admin.professors.create');
    }
    public function store(Request $request){
        $status=Professor::create($request->validated());
        if($status){
            return to_route('professors.index');

        }else{
            return to_route('professors.create');
        }
    }

    public function edit(Professor $professor)
    {
        return view('admin.professors.edit', compact('professor'));
    }
    public function update(Request $request, Professor $professor){
        $status = $professor->update($request->validated());
        if($status){
            return to_route('professors.index');

        }else{
            return to_route('professors.edit', $professor);
        }
    }
    public function destroy(Professor $professor){
        $professor->update(['is_active' => 0]);
        return to_route('professors.index');
    }
}
