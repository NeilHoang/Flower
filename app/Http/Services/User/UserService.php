<?php


namespace App\Http\Services\User;


use App\Http\Controllers\RoleConstant;
use App\Http\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface, RoleConstant
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;

    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $this->userRepo->store($user);
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }

    public function update($request, $obj)
    {
        $current = Auth::user()->password;
        if (Hash::check($request->oldPassword, $current)){
           $obj->name = $request->user;
           $obj->email = $request->email;
           if ($request->password){
               $obj->password = Hash::make($request->password);
           }
           $this->userRepo->update($obj);
       }

    }

    public function destroy($obj)
    {
        $this->userRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->userRepo->search($request->key);
    }

    public function editRole($request,$id)
    {
        $user = $this->userRepo->findById($id);
        $user->role = $request->role;
        $this->userRepo->update($user);
    }
}
