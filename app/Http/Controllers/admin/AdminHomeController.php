<?php

namespace App\Http\Controllers\admin;

use App\Enums\ReviewStatus;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TranslateController;
use App\Models\ClientReview;
use App\Models\HeaderSetting;
use App\Models\TransportCompanySetting;
use App\Models\WhyChooseUsSetting;
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
        return view('admin.home-page-setting.header-setting', compact('header_setting'));
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
        $why_setting = WhyChooseUsSetting::first();
        return view('admin.home-page-setting.transportation-company-setting', compact('transport_setting', 'why_setting'));
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

    public function adminWhyChooseUs(Request $request)
    {
        try {
            $fields = [
                'titleWhy' => $request->input('titleWhy'),
                'describeWhy' => $request->input('describeWhy'),
            ];

            $why = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $why[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            $why_setting = WhyChooseUsSetting::updateOrCreate(
                [],
                $why
            );
            if ($why_setting) {
                toast('Update success!', 'success', 'top-left');
                return back();
            }
            toast('Update fail!', 'error', 'top-left');
            return back();
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function adminClientReview()
    {
        $reviews = ClientReview::where('status', ReviewStatus::ACTIVE)->get();
        return view('admin.home-page-setting.client-review.client-review', compact('reviews'));
    }

    public function adminCreateClientReview()
    {

        return view('admin.home-page-setting.client-review.create-review');
    }

    public function adminCreateClientReviewPost(Request $request)
    {
        try {

            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];

            $review = new ClientReview();
            $review->name = $request->input('nameClient') ?? '';
            $review->position = $request->input('position') ?? '';
            $review->star_rate = $request->input('starRating') ?? '';
            $review->status = $request->input('status') ?? '';
            $describe = $request->input('describe');

            foreach ($languages as $lang) {
                $review->{'describe_' . $lang} = $translate->translateText($describe, $lang) ?? '';
            }
            if ($request->hasFile('avtClient')) {
                $item = $request->file('avtClient');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $review->Thumbnail = $thumbnail;
            }

            $success = $review->save();
            if ($success) {
                toast('Create success!', 'success', 'top-left');
                return redirect()->route('admin-client-review');
            }
            toast('Create fail!', 'error', 'top-left');
            return back();
        } catch (\Exception $exception) {
            toast('An error occurred!', 'error', 'top-left');
            return back()->withInput();
        }

    }

    public function adminUpdateClientReview($id)
    {
        $clReview = ClientReview::find($id);
        return view('admin.home-page-setting.client-review.edit-review', compact('clReview'));
    }

    public function adminUpdateClientReviewPost(Request $request, $id)
    {
        try {
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            $clReview = ClientReview::find($id);
            if ($request->status == ReviewStatus::DELETED) {
                $clReview->status = 0;
                $clReview->save();
                return back();
            }
            $clReview->name = $request->input('nameClient') ?? '';
            $clReview->position = $request->input('position') ?? '';
            $clReview->star_rate = $request->input('starRating') ?? '';
            $clReview->status = $request->input('status') ?? '';
            $describe = $request->input('describe');

            foreach ($languages as $lang) {
                $clReview->{'describe_' . $lang} = $translate->translateText($describe, $lang) ?? '';
            }
            if ($request->hasFile('avtClient')) {
                $item = $request->file('avtClient');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $clReview->Thumbnail = $thumbnail;
            }
            $success = $clReview->save();
            if ($success) {
                toast('Create success!', 'success', 'top-left');
                return redirect()->route('admin-client-review');
            }
            toast('Create fail!', 'error', 'top-left');
            return back();
        } catch (\Exception $exception) {
            toast('An error occurred!', 'error', 'top-left');
            return back()->withInput();
        }

    }

}
