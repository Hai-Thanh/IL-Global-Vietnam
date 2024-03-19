<?php

namespace App\Http\Controllers;

use App\Enums\BlogStatus;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlog extends Controller
{
    public function adminBlog()
    {
        $blogs = Blog::where('status', BlogStatus::ACTIVE)->get();
        return view('admin.blog-settings.blog-setting',compact('blogs'));
    }
    public function adminCreateBlog()
    {
        return view('admin.blog-settings.create-blog');
    }
    public function adminEditBlog($id)
    {
        $blogEdit = Blog::find($id);
        return view('admin.blog-settings.edit-blog',compact('blogEdit'));
    }
    public function adminCreateBlogUp(Request $request)
    {
        try {
            $fields = [
                'title_blog' => $request->input('title_blog'),
                'describe_blog' => $request->input('describe_blog'),
                'title_sub_blog' => $request->input('title_sub_blog'),
                'describe_sub_blog' => $request->input('describe_sub_blog'),
            ];

            $blogs = [];
            $translate = new TranslateController();
            $languages = ['vi', 'en', 'zh_cn', 'kr'];
            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $blogs[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }
            if ($request->hasFile('img_main_blog')) {
                $item = $request->file('img_main_blog');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $blogs['img_main_blog'] = $thumbnail;
            }

            $success = $this->saveBlogData($blogs);

            if ($success) {
                toast('Create success!', 'success', 'top-left');
                return redirect()->route('admin-blog');
            }
            toast('Create error!', 'error', 'top-left');
            return back()->withInput();

        } catch (\Exception $exception) {
            return back()->withInput();
        }

    }
    public function adminEditBlogUp(Request $request, $blogId)
    {
        try {
            $fields = [
                'title_blog' => $request->input('title_blog'),
                'describe_blog' => $request->input('describe_blog'),
                'title_sub_blog' => $request->input('title_sub_blog'),
                'describe_sub_blog' => $request->input('describe_sub_blog'),
            ];


            $blogs = [];

            $translate = new TranslateController();

            $languages = ['vi', 'en', 'zh_cn', 'kr'];

            foreach ($fields as $key => $value) {
                foreach ($languages as $lang) {
                    $blogs[$key . '_' . $lang] = $translate->translateText($value, $lang);
                }
            }

            if ($request->hasFile('img_main_blog')) {
                $item = $request->file('img_main_blog');
                $itemPath = $item->store('img', 'public');
                $thumbnail = asset('storage/' . $itemPath);
                $blogs['img_main_blog'] = $thumbnail;
            }

            $blog = Blog::find($blogId);

            if ($request->status != null && $request->status == BlogStatus::DELETED) {
                $blog->status = 0;
                $blog->save();
                toast('Delete success', 'success', 'top-left');
                return back();
            }
            foreach ($blogs as $key => $value) {
                $blog->$key = $value;
            }

            $success = $blog->save();

            if ($success) {
                toast('Update success!', 'success', 'top-left');
                return redirect()->route('admin-blog');
            }
            toast('Update error!', 'error', 'top-left');
            return back()->withInput();
        } catch (\Exception $exception) {
            return back()->withInput();
        }
    }

    private function saveBlogData($data)
    {
        $blog = new Blog();

        foreach ($data as $key => $value) {
            $blog->$key = $value;
        }

        return $blog->save();
    }
}
