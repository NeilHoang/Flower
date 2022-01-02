<?php


namespace App\Http\Repositories\Theme;



use App\Http\Repositories\Request;
use App\Models\Theme;

class ThemeRepository implements ThemeRepositoryInterface
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getAll()
    {
        return $this->theme->all();
    }

    public function store($obj)
    {
        $obj->save();
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
        return $this->theme->where('theme', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->theme->findOrFail($id);

    }
}
