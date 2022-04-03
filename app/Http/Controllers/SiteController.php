<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function site()
    {
        $settings = Site::find(1);
        return view('site_setting', compact('settings'));
        return view('backend.layouts.site');
    }
    public function updateSetting(Request $request)

    {
        $logo_url = '';
        $validated = $request->validate([
            'system_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'slogon' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'intagram' => 'required',
            'copyright' => 'required',
            'logo' => 'required',

        ]);

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $new_name = str_random(5) . time() . $file->getClientOriginalName();
            $path = public_path('/logo');
            $file->move($path, $new_name);
            $logo_url = asset("logo" . $new_name);
        }
        $data = [
            'system_name' => $request->get('system_name'),
            'phone' => $request->get('phone'),
            'mobile' => $request->get('mobile'),
            'address' => $request->get('address'),
            'slogon' => $request->get('slogon'),
            'facebook' => $request->get('facebook'),
            'youtube' => $request->get('youtube'),
            'instagram' => $request->get('instagram'),
            'copyright' => $request->get('copyright'),
            'logo' => $request->$logo_url,

        ];
        DB::table('site_settings')->truncate();
        Site::insert('$data');
        // \App\Helper::updateSite();
        return redirect()->back();
    }
}
