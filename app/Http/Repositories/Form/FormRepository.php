<?php


namespace App\Http\Repositories\Form;


use App\Http\Repositories\Request;
use App\Models\Form;

class FormRepository implements FormRepositoryInterface
{
    protected $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function getAll()
    {
        return $this->form->all();
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
        return $this->form->where('form', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->form->findOrFail($id);

    }
}
