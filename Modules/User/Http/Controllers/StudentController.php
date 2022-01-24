<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $teachers = User::where('user_type', 'student')->get();
        return view('user::student.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::student.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $dataInput = $request->only(['student_name', 'username', 'password', 'mapel', 'email']);

        $addNewStudent = User::create([
            'username' => $dataInput['username'],
            'name'     => $dataInput['student_name'],
            'email'    => $dataInput['email'],
            'password' => Hash::make($dataInput['password']),
            'user_type' => 'student',
        ]);

        if (!$addNewStudent) {
            return back()->withErrors('Proses menambahkan data siswa gagal, silakan ulangi kembali!.');
        }

        return redirect('siswa/list')->withSuccess('Proses menambahkan data siswa berhasil');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::student.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {   
        $student = $user;
        return view('user::student.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, User $user)
    {
        $dataInput = $request->only(['student_name', 'username', 'password', 'mapel', 'email']);

        $updateStudent = $user->update([
            'username' => $dataInput['username'],
            'name'     => $dataInput['student_name'],
            'email'    => $dataInput['email'],
            'password' => Hash::make($dataInput['password']),
            'user_type' => 'student',
        ]);

        if (!$updateStudent) {
            return back()->withErrors('Proses merubah data siswa gagal, silakan ulangi kembali!.');
        }

        return redirect('siswa/list')->withSuccess('Proses merubah data siswa berhasil');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(User $user)
    {
        if (!$user->delete()) {
            return back()->withErrors('Proses hapus data siswa gagal, silakan ulangi kembali.');
        }

        return back()->withErrors('Proses hapus data siswa berhasil.');
    }
}
