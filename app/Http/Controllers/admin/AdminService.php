<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TranslateController;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminService extends Controller
{
    public function adminServiceCreate()
    {
        return view('admin.service-settings.create-service');

    }
    public function adminServiceUpdate(Request $request)
    {
        try {
            $fields = [
                'title' => $request->input('title'),
                'describe' => $request->input('describe'),
                'title_sub' => $request->input('title2'),
                'describe_sub' => $request->input('describe2'),
            ];

            $services = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'ko'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $services[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            if ($request->hasFile('img_main')) {
                $item = $request->file('img_main');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $services['img_main'] = $thumbnail;
            }
            $services['type'] = $request->input('type') ?? '';

            // Lấy tên cột thay vì id
            $typeColumn = 'type';

            $existingService = Service::where($typeColumn, $services['type'])->first();
            if ($existingService) {
                Service::where($typeColumn, $services['type'])->update($services);
            } else {
                Service::create($services);
            }

            toast('Update success!', 'success', 'top-left');
            return redirect()->route('admin-service');
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function adminService()
    {
        $services = Service::all() ?? '';
        return view('admin.service-settings.service',compact('services'));
    }
    public function adminServiceEdit($type)
    {
        $service = Service::where('type', $type)->first();
        return view('admin.service-settings.page-edit-service',compact('service'));
    }

    public function adminServiceDelete($id)
    {
        try {
            $deleteService = Service::find($id);
            if ($deleteService) {
                $deleteService->delete();
                toast('Update success!', 'success', 'top-left');
                return back();
            }
            toast('Delete error!', 'error', 'top-left');
            return back();


        } catch (\Exception $exception) {
            toast('Delete error!', 'error', 'top-left');
            return $exception;
        }
    }
}
