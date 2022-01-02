<?php


namespace App\Http\Services\Color;


use App\Models\Color;
use App\Http\Repositories\Color\ColorRepo;
use App\Http\Repositories\Color\ColorRepoInterface;

class ColorService implements ColorServiceInterface
{
    protected $colorRepo;
    public function __construct(ColorRepo $colorRepo )
    {
        $this->colorRepo = $colorRepo;
    }

    public function getAll()
    {
        return $this->colorRepo->getAll();
    }

    public function store($request)
    {
        $colors = new Color();
        $colors->color = $request->color;
        $this->colorRepo->store($colors);
    }

    public function findById($id)
    {
        return $this->colorRepo->findById($id);
    }

    public function update($request, $obj)
    {
        $obj->color = $request->color;
        $this->colorRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->colorRepo->destroy($obj);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
