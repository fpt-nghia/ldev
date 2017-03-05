<?php
namespace App\Http\Controllers\Backend;

class InfoController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('backend.info.index', [
            'loadedExtensions' => get_loaded_extensions()
        ]);
    }
}