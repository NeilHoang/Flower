<?php


namespace App\Http\Services\Theme;


use App\Http\Repositories\Theme\ThemeRepository;
use App\Models\Theme;

class ThemeService implements ThemeServiceInterface
{
    protected $themeRepo;

    public function __construct(ThemeRepository $themeRepo)
    {
        $this->themeRepo = $themeRepo;

    }

    public function getAll()
    {
        return $this->themeRepo->getAll();
    }

    public function store($request)
    {
        $theme = new Theme();
        $theme->theme = $request->theme;
        $this->themeRepo->store($theme);
    }

    public function findById($id)
    {
        return $this->themeRepo->findById($id);
    }

    public function update($request, $obj)
    {;
        $obj->theme = $request->theme;
        $this->themeRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->themeRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->themeRepo->search($request->key);
    }
}
