<?php

namespace Modules\Grade\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dataGrades = Grade::orderBy('created_at')->get();
        return view('grade::index', compact('dataGrades'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('grade::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $dataInput = $request->only(['grade_name']);
        
        $createGrade = Grade::create([
            'grade_code' => strtolower($dataInput['grade_name']),
            'grade_name' => $dataInput['grade_name']
        ]);

        if (!$createGrade) {
            return back()
                    ->withErrors(['Proses tambah data kelas gagal, silakan ulangi kembali.'])
                    ->withInput();
        }

        return redirect('kelas/list')->withSuccess(['Data kelas berhasil ditambahkan.']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('grade::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Grade $grade)
    {
        return view('grade::edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Grade $grade)
    {
        $dataInput = $request->only(['grade_name']);
        
        $updateGrade = $grade->update([
            'grade_code' => strtolower($dataInput['grade_name']),
            'grade_name' => $dataInput['grade_name']
        ]);

        if (!$updateGrade) {
            return back()
                    ->withErrors(['Proses edit data kelas gagal, silakan ulangi kembali.'])
                    ->withInput();
        }

        return redirect('kelas/list')->withSuccess(['Data kelas berhasil diedit.']);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
