<?php


namespace App\Http\Repositories\Type;


use App\Models\Type;

class TypeRepo implements TypeRepoInterface
{
    protected $type;

    public function __construct(Type $type)
    {
        $this->type = $type;
    }

    public function getAll()
    {
        return $this->type->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
       return $this->type->findOrFail($id);
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
        return $this->type->where('type', 'like', '%' . $key . '%')->get();
    }
}
