<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $setting = Setting::first();
        return view('admin.setting-page',compact('setting'));
    }

    public function settingUp(Request $request)
    {
        try {
            $fields = [
                'describe' => $request->input('describe'),
            ];

            $settings = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $settings[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            $settings['email'] = $request->input('email') ?? '';
            $settings['address'] = $request->input('address') ?? '';
            $settings['link_map'] = $request->input('link_map') ?? '';
            $settings['phone'] = $request->input('phone') ?? '';

            if ($request->hasFile('logo')) {
                $item = $request->file('logo');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $settings['logo'] = $thumbnail;
            }

            $setting_success = Setting::updateOrCreate([], $settings);
            if ($setting_success) {
                toast('Update success!', 'success', 'top-left');
                return back();
            }
            toast('Update fail!', 'error', 'top-left');
            return back();
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
