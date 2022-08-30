<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private function getPostImgSrc($post)
    {
        $toReturn = null;

        if ($post->cover_img) {
            $toReturn = asset("storage/" . $post->cover_img);
        } else {
            // $post->cover_img = asset("images/image-placeholder.jpeg");
        }

        return $toReturn;
    }

    public function index()
    {
        $posts = Post::paginate(5);

        $posts->map(function ($post) {

            /*  if ($post->cover_img) {
                $post->cover_img = asset("storage/" . $post->cover_img);
            } else {
                // $post->cover_img = asset("images/image-placeholder.jpeg");
            } */
            $post->cover_img = $this->getPostImgSrc($post);

            return $post;
        });

        return response()->json($posts);
    }

    public function show($slug)
    {
        $post = Post::where("slug", $slug)->first();

        $post->load("category", "tags", "user:id,name");

        $post->cover_img = Storage::url($post->cover_img);

        return response()->json($post);
    }
}
