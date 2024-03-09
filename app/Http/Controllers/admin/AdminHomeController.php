<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderSetting;
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
}
