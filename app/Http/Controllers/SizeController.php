<?php

namespace App\Http\Controllers;

use App\Http\Services\Size\SizeService;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    protected $sizeService;

    public function __construct(SizeService $sizeService)
    {
        $this->sizeService = $sizeService;
    }

    public function index()
    {
        $sizes = $this->sizeService->getAll();
        return view('admin.size.size', compact('sizes'));
    }


    public function create()
    {
        return view('admin.size.add');
    }


    public function store(Request $request)
    {
        $this->sizeService->store($request);
        return redirect()->route('size.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $size = $this->sizeService->findById($id);
        return view('admin.size.edit',compact('size'));
    }


    public function update(Request $request, $id)
    {
        $this->sizeService->update($request, $id);
        return redirect()->route('size.index');
    }

    public function destroy($id)
    {
        $this->sizeService->destroy($id);
        return redirect()->route('size.index');
    }
}
