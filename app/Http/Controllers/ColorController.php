<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Services\Color\ColorService;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    protected $coloService;

    public function __construct(ColorService $colorService)
    {
        $this->coloService = $colorService;
    }

    public function index()
    {
        $colors = $this->coloService->getAll();
        return view('admin.color.list', compact('colors'));
    }

    public function create()
    {
        $colors = $this->coloService->getAll();
        return view('admin.color.create', compact('colors'));
    }

    public function store(Request $request)
    {
        $this->coloService->store($request);
        return redirect()->route('color.list');

    }

    public function destroy($id)
    {
        $colors = $this->coloService->findById($id);
        $this->coloService->destroy($colors);
        return redirect()->route('color.list');
    }

    public function edit($id)
    {
        $colors = $this->coloService->findById($id);
        return view('admin.color.edit', compact('colors'));
    }

    public function update(Request $request, $id)
    {
        $colors = $this->coloService->findById($id);
        $this->coloService->update($request,$colors);
        return redirect()->route('color.list');
    }
}
