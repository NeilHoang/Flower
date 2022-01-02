<?php


namespace App\Http\Repositories\User;


use App\Http\Repositories\Request;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function store($obj)
    {
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public function search($key)
    {
        return $this->user->where('name', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);

    }
}
