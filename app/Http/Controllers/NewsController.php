<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create(Request $request)
    {
        // Validation for News request name and content are required
        $news = $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        // Saving Info using News Model.
        $news = new News([
            'name' => $news['name'],
            'content' => $news['content'],
        ]);
        $news->save();
        return redirect('/');
    }

    public function delete(Request $request)
    {
        //deleting exact post(info about post in request)
        News::where('id', $request['id'])->delete();
        return redirect('/');
    }
}
