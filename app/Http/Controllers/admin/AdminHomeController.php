<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TranslateController;
use App\Models\HeaderSetting;
use App\Models\TransportCompanySetting;
use Illuminate\Http\Request;


class AdminHomeController extends Controller
{
    public function homeAdmin()
    {
        return view('admin.index');
    }
    public function adminHeaderSetting()
    {
        $header_setting = HeaderSetting::first();
        return view('admin.home-page-setting.header-setting',compact('header_setting'));
    }
    public function adminHeaderSettingUpdate(Request $request)
    {

        try {
            $time_in = $request->input('time-in-header');
            $time_out = $request->input('time-out-header');
            $day_offs = $request->input('choose-day-off');
            $day_off = implode(',', $day_offs);
            $linkedin = $request->input('link-linkedin');
            $fb = $request->input('link-fb');
            $tw = $request->input('link-tw');
            $ins = $request->input('link-ins');
            $yt = $request->input('link-yt');

            $header_setting = HeaderSetting::updateOrCreate(
                [],
                [
                    'time_in' => $time_in,
                    'time_out' => $time_out,
                    'day_off' => $day_off,
                    'link_linke_in' => $linkedin,
                    'link_fb' => $fb,
                    'link_tw' => $tw,
                    'link_ins' => $ins,
                    'link_yt' => $yt,
                ]
            );

            if ($header_setting) {
                toast('Update success!', 'success', 'top-left');
                return back();
            }
            toast('Update fail!', 'error', 'top-left');
            return back();

        } catch (\Exception $exception) {
            return $exception;
        }

    }

    public function adminTransportCompanySetting()
    {
        $transport_setting = TransportCompanySetting::first();
        return view('admin.home-page-setting.transportation-company-setting',compact('transport_setting'));
    }

    public function adminTransportCompanySettingUpdate(Request $request)
    {
        try {
            $fields = [
                'title' => $request->input('title'),
                'describe' => $request->input('describe'),
                'title_service' => $request->input('title_service'),
                'describe_service' => $request->input('describe_service'),
                'title_cert' => $request->input('title_cert'),
                'describe_cert' => $request->input('describe_cert'),
            ];

            $translations = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $translations[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            $transport_setting = TransportCompanySetting::updateOrCreate(
                [],
                $translations
            );
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
