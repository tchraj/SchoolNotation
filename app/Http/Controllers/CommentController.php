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
        // $comments = Comment::orderBy('upload_date', 'desc')->get();
        $comments = Comment::where('status', 'Actif')->orderBy('upload_date', 'asc')->get();
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
        return back();

        // return response()->json(['success' => 'Commentaire ajouté avec succès !']);
    }
    public function edit(int $id)
    {
    }
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if ($request->has('status') && $request->status == 'on') {
            $comment->status = 'Actif';
        } else {
            $comment->status = 'Inactif';
        }
        $comment->save();
        return back();
    }
    public function delete($id)
    {
        $city = Comment::find($id);
        $city->delete();
        return view('univ.infos');
    }
    // return redirect()->route('univs.details', $id);
    // return response()->json(['success' => 'Commentaire ajouté avec succès !']);

}
