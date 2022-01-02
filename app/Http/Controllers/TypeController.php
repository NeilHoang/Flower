<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Services\Color\ColorService;
use App\Http\Services\Type\TypeService;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    protected $typeService;
    protected $colorService;

    public function __construct(TypeService $typeService, ColorService $colorService)
    {
        $this->typeService = $typeService;
        $this->colorService = $colorService;
    }

    public function index()
    {
        $types = $this->typeService->getAll();
        return view('admin.type.list', compact('types'));
    }

    public function create()
    {
        $colors = $this->colorService->getAll();
        return view('admin.type.create', compact('colors'));
    }

    public function store(Request $request)
    {

        $this->typeService->store($request);
        return redirect()->route('type.list');
    }

    public function destroy($id)
    {
        $type = $this->typeService->findById($id);
        $this->typeService->destroy($type);
        return redirect()->route('type.list');
    }

    public function edit($id)
    {
        $types = $this->typeService->findById($id);
        $colors = $this->colorService->getAll();
        return view('admin.type.edit', compact('types', 'colors'));
    }

    public function update(Request $request, $id)
    {
        $types = $this->typeService->findById($id);
        $this->typeService->update($request,$types);
        return redirect()->route('type.list');
    }
}
