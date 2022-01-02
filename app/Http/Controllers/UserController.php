<?php

namespace App\Http\Controllers;

use App\Http\Services\User\UserService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        if (!Gate::allows('crud-user')) {
            abort('403');
        }
        $users = $this->userService->getAll();
        return view('admin.users.index', compact('users'));
    }

    public function findById($id)
    {
        return $this->userService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userService->findById($id);
        $this->userService->update($request, $user);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = $this->userService->findById($id);
        $this->userService->destroy($user);
        return redirect()->route('user.index');
    }

    public function editRole(Request $request, $id)
    {
        $this->userService->editRole($request, $id);
        return redirect()->route('user.index');
    }

    public function showEditRole($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.users.edit', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.users.editAUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = $this->userService->findById($id);
        $this->userService->update($request, $user);
        return view('admin.dashboard');

    }
}
