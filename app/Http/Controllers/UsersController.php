<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use File;
use Illuminate\Http\Request;
use Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(3);

        return view('admin.users.index', compact('users'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $imagen = $request->file('avatar');
        $avatar = time() . "." .$imagen->getClientOriginalExtension();

        Storage::disk('avatars')->put($avatar, File::get($imagen));
        
        $user = new User($request->all());
        $user->avatar = $avatar;
        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id)->fill($request->all());

        if ($request->hasFile('avatar'))
        {
            $imagen = $request->file('avatar');
            $avatar = time() . "." .$imagen->getClientOriginalExtension();

            Storage::disk('avatars')->put($avatar, File::get($imagen));
            Storage::disk('avatars')->delete($user->avatar);

            $user->avatar = $avatar;
        }

        $user->update();

        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::disk('avatars')->delete($user->avatar);
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
