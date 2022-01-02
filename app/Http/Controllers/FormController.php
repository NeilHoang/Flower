<?php

namespace App\Http\Controllers;

use App\Http\Services\Form\FormService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect, Illuminate\Support\Facades\Response, Illuminate\Support\Facades\DB, Illuminate\Support\Facades\Config;
use Yajra\DataTables\Facades\DataTables;

class FormController extends Controller
{
    protected $formService;

    public function __construct(FormService $formService)
    {
        $this->formService = $formService;
    }

    public function index()
    {
        $forms = $this->formService->getAll();
        return view('admin.forms.index', compact('forms'));
    }

    public function store(Request $request)
    {
        $this->formService->store($request);
        return redirect()->route('form.index');
    }

    public function findById($id)
    {
        return $this->formService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $form = $this->formService->findById($id);
        $this->formService->update($request, $form);
        return redirect()->route('form.index');
    }

    public function destroy($id)
    {
        $form = $this->formService->findById($id);
        $this->formService->destroy($form);
        return redirect()->route('form.index');
    }
}
