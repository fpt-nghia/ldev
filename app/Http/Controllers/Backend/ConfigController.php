<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Redirect;
use Lang;
use App\Lib\Util\Str;
use App\Lib\Env\Env;

class ConfigController extends Controller
{
    public function index()
    {
        return view('backend.config.index');
    }

    public function update(Request $request)
    {
        $dataRequest = $request->except(['_token', '_method']);

        if (Str::isEmpty($dataRequest['MAIL_PASSWORD'])) {
            unset($dataRequest['MAIL_PASSWORD']);
        }

        (new Env())->update($dataRequest);

        return Redirect::back()->with('flash_message', Lang::get('system.update'));
    }
}