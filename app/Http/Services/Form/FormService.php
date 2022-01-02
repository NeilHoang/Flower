<?php


namespace App\Http\Services\Form;


use App\Http\Repositories\Form\FormRepository;
use App\Models\Form;

class FormService implements FormServiceInterface
{
    protected $formRepo;

    public function __construct(FormRepository $formRepo)
    {
        $this->formRepo = $formRepo;

    }

    public function getAll()
    {
        return $this->formRepo->getAll();
    }

    public function store($request)
    {
        $form = new form();
        $form->form = $request->form;
        $this->formRepo->store($form);
    }

    public function findById($id)
    {
        return $this->formRepo->findById($id);
    }

    public function update($request, $obj)
    {;
        $obj->form = $request->form;
        $this->formRepo->update($obj);
    }

    public function destroy($obj)
    {
        $this->formRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->formRepo->search($request->key);
    }
}
