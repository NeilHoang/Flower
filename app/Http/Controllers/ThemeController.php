<?php

namespace App\Http\Controllers;

use App\Http\Services\Theme\ThemeService;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    protected $themeService;

    public function __construct(ThemeService $themeService)
    {
        $this->themeService = $themeService;
    }

    public function index()
    {
        $themes = $this->themeService->getAll();
        return view('admin.themes.index',compact('themes'));
    }

    public function store(Request $request)
    {
        $this->themeService->store($request);
        return redirect()->route('theme.index');
    }

    public function findById($id)
    {
        return $this->themeService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $theme = $this->themeService->findById($id);
        $this->themeService->update($request,$theme);
        return redirect()->route('theme.index');
    }

    public function destroy($id)
    {
        $theme = $this->themeService->findById($id);
        $this->themeService->destroy($theme);
        return redirect()->route('theme.index');
    }
}
