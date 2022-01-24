<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $teachers = User::where('user_type', 'teacher')->get();
        return view('user::teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $dataInput = $request->only(['teacher_name', 'username', 'password', 'mapel', 'email']);

        $addNewTeacher = User::create([
            'username' => $dataInput['username'],
            'name'     => $dataInput['teacher_name'],
            'email'    => $dataInput['email'],
            'password' => Hash::make($dataInput['password']),
            'user_type' => 'teacher',
        ]);

        if (!$addNewTeacher) {
            return back()->withErrors('Proses menambahkan data guru gagal, silakan ulangi kembali!.');
        }

        return redirect('guru/list')->withSuccess('Proses menambahkan data guru berhasil');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::teacher.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        $teacher = $user;
        return view('user::teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, User $user)
    {
        $dataInput = $request->only(['teacher_name', 'username', 'password', 'mapel', 'email']);

        $addNewTeacher = $user->update([
            'username' => $dataInput['username'],
            'name'     => $dataInput['teacher_name'],
            'email'    => $dataInput['email'],
            'password' => Hash::make($dataInput['password']),
            'user_type' => 'teacher',
        ]);

        if (!$addNewTeacher) {
            return back()->withErrors('Proses merubah data guru gagal, silakan ulangi kembali!.');
        }

        return redirect('guru/list')->withSuccess('Proses merubah data guru berhasil');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        if (!$user->delete()) {
            return back()->withErrors('Proses hapus data guru gagal, silakan ulangi kembali.');
        }

        return back()->withErrors('Proses hapus data guru berhasil.');
    }
}
