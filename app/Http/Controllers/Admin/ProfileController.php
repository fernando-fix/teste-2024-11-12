<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        return redirect()->route('admin.profiles.edit', $user_id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if ($user->id !== auth()->user()->id) {
            return redirect()->back();
        }

        return view('admin.profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, User $user)
    {
        if ($user->id != auth()->user()->id) {
            return redirect()->back();
        }

        try {
            if ($request->password || $request->password_confirmation) {

                $user->update([
                    'name' => $request->name,
                    'password' => bcrypt($request->password),
                ]);
            } else {

                $request->validate([
                    'name' => ['required', 'min:5', 'string', 'max:255'],
                ]);
                $user->update([
                    'name' => $request->name,
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        Log::info('Perfil atualizado com sucesso');
        return redirect()->route('admin.profiles.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return redirect()->back();
    }
}
