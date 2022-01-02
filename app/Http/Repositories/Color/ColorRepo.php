<?php


namespace App\Http\Repositories\Color;


use App\Models\Color;

class ColorRepo implements ColorRepoInterface
{
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function getAll()
    {
       return $this->color->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->color->findOrFail($id);
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
        return $this->color->where('color', 'like', '%' . $key . '%')->get();
    }
}
