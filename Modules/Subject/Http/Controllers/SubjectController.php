<?php

namespace Modules\Subject\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Subject\Http\Requests\SubjectCreateRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dataSubjects = Subject::select('subject_code', 'subject_name')->get();
        return view('subject::index', compact('dataSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('subject::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(SubjectCreateRequest $request)
    {
        $dataInput = $request->only(['subject_code', 'subject_name']);

        if (Subject::checkCodeIsExist($request->subject_code)) {
            return back()
                    ->withErrors(['subject_code' => 'Kode mata pelajaran sudah digunakan, mohon gunakan kode yang lain.'])
                    ->withInput();
        }

        
        $createSubject = Subject::create($dataInput);
        if (!$createSubject) {
            return back()
                    ->withErrors(['Proses tambah data mata pelajaran gagal, silakan ulangi kembali.'])
                    ->withInput();
        }

        return redirect('mapel/list')->withSuccess(['Data mata pelajaran berhasil ditambahkan.']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('subject::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('subject::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
