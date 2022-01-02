<?php


namespace App\Http\Repositories\Size;


use App\Models\Size;

class SizeRepository implements SizeRepositoryInterface
{
    protected $size;

    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function getAll()
    {
        return $this->size->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->size->findOrfail($id);
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
        // TODO: Implement search() method.
    }
}
