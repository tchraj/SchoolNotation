<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function list()
    {
        $comments = Comment::all();
        return view('comments.list', compact(['comments']));
    }

    public function create()
    {
        return view('comments.create');
    }
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $user_id = Auth::id();
        // dd($user_id);
        $comment->users_id = $user_id;
        $comment->university_id = $request->input('univ_id');
        $comment->upload_date = Carbon::now()->toDateString();
        // dd($comment->content);
        $comment->save();
        return back()->with('success', 'Commentaire ajouté avec succès');

        // return response()->json(['success' => 'Commentaire ajouté avec succès !']);
    }
    public function edit(int $id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function delete($id)
    {
    }
}
