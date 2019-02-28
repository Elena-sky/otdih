<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;


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

    /**
     * Move images to Dropbox and prepare URLs for DB saving
     *
     * @param Request $request
     * @param $path
     * @return array|bool
     */
    public static function uploadToDropboxFile(Request $request, $path)
    {
        if ($request->isMethod('PUT') || $request->isMethod('post')) {

            if ($request->hasFile('images')) {
                $files = $request->file('images');
                $result = [];
                foreach ($files as $file) {
                    $filePath = Storage::disk('dropbox')->put($path, $file, 'public');
                    if ($filePath) {
                        $result[] = $filePath;
                    }
                }
                return $result;
            }
        }

        return false;
    }


    /**
     * Get URL for the image Logo
     *
     * @param $images
     * @return mixed
     */
    public static function getUrlLogo($images)
    {
        $adapter = \Storage::disk('dropbox')->getAdapter();
        $client = $adapter->getClient();
//        $link = $client->listSharedLinks();
//        $link = $client->listFolder('/rooms/');
        $images = $images->toArray();
        foreach ($images as $key => $image) {
            try {
                $images[$key]['link'] = $client->getTemporaryLink(DIRECTORY_SEPARATOR . $image['image_name']);
            } catch (\Dropbox\Exception $e) {
            }
        }

        return $images;
    }


    /**
     * Remove
     *
     * @param $file
     */
    public static function destroyFileFromDropbox($file)
    {
        Storage::disk('dropbox')->delete($file);
    }

}
