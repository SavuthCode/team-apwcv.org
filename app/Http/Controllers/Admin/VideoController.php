<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Youtube;
class VideoController extends Controller
{
    public function index()
    {
       
    }

    public function create()
    {
        return view('video');
    }

    public function store(Request $request)
    {
        $video = Youtube::upload($request->file('video')->getPathName(), [
            'title'       => $request->input('title'),
            'description' => $request->input('description')
        ]);

        // $video = Youtube::upload($request->file('video')->getPathName(), [
        //     'title'       => $request->input('title'),
        //     'description' => $request->input('description')
        // ])->withThumbnail($request->file('image')->getPathName());
  
        return "Video uploaded successfully. Video ID is ". $video->getVideoId();
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
         // Youtube::delete('VIDEO_ID');
    }
}
