<?php


namespace App\Http\Services\Type;


use App\Http\Repositories\Type\TypeRepo;
use App\Models\Type;

class TypeService implements TypeServiceInterface
{
    protected $typeRepo;

    public function __construct(TypeRepo $typeRepo)
    {
        $this->typeRepo = $typeRepo;
    }

    public function getAll()
    {
        return $this->typeRepo->getAll();
    }

    public function store($request)
    {
        $types = new Type();
        $types->type = $request->type;
        $types->color_id = $request->color_id;
        $this->typeRepo->store($types);
    }

    public function findById($id)
    {
        return $this->typeRepo->findById($id);
    }

    public function update($request, $obj)
    {
        $obj->type = $request->type;
        $obj->color_id = $request->color_id;
        $this->typeRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->typeRepo->destroy($obj);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }
}
