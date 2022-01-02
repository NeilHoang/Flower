<?php


namespace App\Http\Services\Size;


use App\Http\Repositories\Size\SizeRepository;
use App\Models\Size;

class SizeService implements SizeServiceInterface
{
    protected $sizeRepo;

    public function __construct(SizeRepository $sizeRepo)
    {
        $this->sizeRepo = $sizeRepo;
    }

    public function getAll()
    {
        return $this->sizeRepo->getAll();
    }

    public function store($request)
    {
        $size = new Size();
        $size->size = $request->size;
        $this->sizeRepo->store($size);
    }

    public function findById($id)
    {
        return $this->sizeRepo->findById($id);
    }

    public function update($request, $id)
    {
        $size = $this->findById($id);
        $size->size = $request->size;
        $this->sizeRepo->update($size);
    }

    public function destroy($id)
    {
        $size = $this->sizeRepo->findById($id);
        $this->sizeRepo->destroy($size);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
