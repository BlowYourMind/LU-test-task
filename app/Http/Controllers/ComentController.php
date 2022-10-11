<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\News;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function createComment(Request $request)
    {
        //This is captcha validation
        $request->validate([
            'comment' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // check if comments is from authorised person or not. IF true owner-> authorised user, otherwise Anonim user, that is created using seeder
        if (auth()->check()) {
            $comment = new Comments([
                'owner' => auth()->user()->getAuthIdentifier(),
                'body' => $request['comment'],
                'commentable_id' => $request['new_id'],
            ]);
        } else {
            $comment = new Comments([
                'owner' => 1,
                'body' => $request['comment'],
                'commentable_id' => $request['new_id'],
            ]);
        }
        //adding number of comments to the post.
        News::where('id', $request['new_id'])->update(['number_of_comments' => $request['number_of_comments'] + 1]);

        //saving comment in database and redirect.
        $comment->save();

        return redirect('/');

    }

    public function delete(Request $request)
    {
        //deleting comment of exact post(info about post in request)
        Comments::where('id', $request['id'])->delete();

        //take away number of comments of exact post
        News::where('id', $request['new_id'])->update(['number_of_comments' => $request['number_of_comments'] - 1]);

        return redirect('/');
    }

}
