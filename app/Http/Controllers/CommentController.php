<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('product')->latest()->get(); // Eager load product
        return view('comments.index', compact('comments'));
    }

    public function store(Request $request, Comment $comment)
    {

        Comment::create([
            'username'=>$request->username,
            'comment' =>$request->comment,
            'product_id' => $comment->id,
//            'status' => 0,
        ]);

        return redirect()->back()->with('success', 'Comment status updated successfully.');

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comments.index')->with('success', 'Comment deleted successfully.');
    }

    public function comment(Request $request)
    {
        Comment::create([
            'username'=>'admin',
            'comment'=>$request->comment,
            'product_id' =>$request->product_id
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');

    }

}
