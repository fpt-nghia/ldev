<?php
namespace App\Http\Controllers\Backend;

use App\Model\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Cache;
use App\Lib\Util\Arr;

class SettingController extends Controller
{
    /**
     * @var Setting
     */
    private $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $this->storeCacheSetting();
        $settings = $this->setting->getAllList();

        return view('backend.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('backend.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SettingRequest  $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function store(SettingRequest $request)
    {
        Setting::create($request->all());
        $this->storeCacheSetting();

        return redirect('backend/setting')
                ->with('flash_message', Cache::get('setting')['messageCreated']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Setting $setting
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Setting $setting)
    {
        return view('backend.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SettingRequest $request
     * @param  Setting $setting
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());
        $this->storeCacheSetting();

        return redirect('backend/setting')
                ->with('flash_message', Cache::get('setting')['messageUpdated']);
    }

    /**
     *  Remove the specified resource for the given IDs.
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function destroys(SettingRequest $request)
    {
        Setting::destroy($request->get('ids'));

        return redirect()
                ->back()
                ->with('flash_message', Cache::get('setting')['messageDeleted']);
    }

    /**
     * Store setting info to cache
     */
    private function storeCacheSetting()
    {
        Cache::forever('setting', $this->setting->getKeyValueToStoreCache());
    }
}