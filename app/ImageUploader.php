<?php

namespace App;

use Illuminate\Http\Request;

trait ImageUploader
{

    /**
     * Move images and prepare URLs for DB saving
     *
     * @param Request $request
     * @param $path
     * @return array|bool
     */
    public static function upload(Request $request, $path)
    {
        if ($request->isMethod('PUT') || $request->isMethod('post')) {

            if ($request->hasFile('images')) {
                $files = $request->file('images');
                $result = [];
                foreach ($files as $file) {
                    $file_name = 'roomImage' . rand(123, 655555) . '.' . $file->getClientOriginalExtension();
                    if ($file->move(public_path() . $path, $file_name)) {
                        $result[] = $file_name;
                    }
                }
                return $result;
            }
        }

        return false;
    }

}
