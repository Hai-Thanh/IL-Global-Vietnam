<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TranslateController;
use App\Models\AboutUs;
use Illuminate\Http\Request;


class AdminAboutUsController extends Controller
{
    public function adminAboutUs()
    {
        $aboutUs = AboutUs::first();
        return view('admin.about-us-setting.about-us-setting',compact('aboutUs'));
    }

    public function adminAboutUsUpdate(Request $request)
    {
        try {
            $fields = [
                'title_about' => $request->input('title_about'),
                'describe_about' => $request->input('describe_about'),
                'describe_us' => $request->input('describe_us'),
            ];

            $aboutUs = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'kr'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $aboutUs[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            $aboutUs['name_us'] = $request->input('name_us') ?? '';

            if ($request->hasFile('img_about')) {
                $item = $request->file('img_about');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $aboutUs['img_about'] = $thumbnail;
            }

            $transport_setting = AboutUs::updateOrCreate([], $aboutUs);
            if ($transport_setting) {
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
