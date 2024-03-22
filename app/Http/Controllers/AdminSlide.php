<?php

namespace App\Http\Controllers;

use App\Enums\SlideStatus;
use App\Models\SlideHeader;
use Illuminate\Http\Request;

class AdminSlide extends Controller
{
    public function adminEditSlide($id)
    {
        $slides = SlideHeader::find($id);
        return view('admin.slide-header.edit-slide',compact('slides'));
    }

    public function adminCreateSlide()
    {
        return view('admin.slide-header.create-slide');
    }

    public function adminSlide()
    {
        $slides = SlideHeader::where('status', SlideStatus::Active)->get();
        return view('admin.slide-header.slide-service-header',compact('slides'));

    }

    public function adminCreateSlideUp(Request $request)
    {
        try {
            $fields = [
                'title_slide' => $request->input('title_slide'),
                'describe_slide' => $request->input('describe_slide'),
            ];

            $slides = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $slides[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            $slide = new SlideHeader();
            foreach ($slides as $key => $value) {
                $slide->$key = $value;
            }
            if ($request->hasFile('image_slide')) {
                $item = $request->file('image_slide');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $slide->image_slide = $thumbnail;
            }

            $slide->status = SlideStatus::Active;

            $slide->id_service = $request->input('id_service') ?? '1';
            $success = $slide->save();
            if ($success) {
                toast('Create success!', 'success', 'top-left');
                return redirect()->route('admin-slide');
            }
            toast('Create error!', 'error', 'top-left');
            return back()->withInput();

        } catch (\Exception $exception) {
            return back()->withInput();
        }
    }

    public function adminEditSlideUp($slideId, Request $request)

    {
        try {
            $fields = [
                'title_slide' => $request->input('title_slide'),
                'describe_slide' => $request->input('describe_slide'),
            ];


            $slides = [];

            $translate = new TranslateController();

            $languages = ['vi', 'en', 'zh_cn', 'ko'];

            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $slides[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }

            if ($request->hasFile('image_slide')) {
                $item = $request->file('image_slide');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $slides['image_slide'] = $thumbnail;
            }

            $slide = SlideHeader::find($slideId);

            if ($request->status != null && $request->status == SlideStatus::Delete) {
                $slide->status = 0;
                $slide->save();
                toast('Delete success', 'success', 'top-left');
                return back();
            }
            foreach ($slides as $key => $value) {
                $slide->$key = $value;
            }

            $slide->status = SlideStatus::Active;

            $slide->id_service = $request->input('id_service') ?? '1';

            $success = $slide->save();

            if ($success) {
                toast('Update success!', 'success', 'top-left');
                return redirect()->route('admin-slide');
            }
            toast('Update error!', 'error', 'top-left');
            return back()->withInput();
        } catch (\Exception $exception) {
            return back()->withInput();
        }
    }

}
