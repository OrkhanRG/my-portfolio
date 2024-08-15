<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function comments()
    {
        $comments = Comment::query()
            ->where('is_approved', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.comment.comments', compact('comments'));
    }

    public function unverifiedComments()
    {
        $comments = Comment::query()
            ->where('is_approved', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.comment.unverified-comments', compact('comments'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::query()->find($id);

        if (!$comment)
        {
            return response()->json([
                'error' => 'Kateqoriya silinmədi!'
            ], 404);
        }

        $delete = $comment->delete();

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $comment = Comment::query()->where('id', $id)->first();

        if (!$comment)
        {
            return response()->json([
                'error' => 'Koment tapılmadı!'
            ], 404);
        }

        $comment->update(['is_active' => !$comment->is_active]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $comment
        ], 200);
    }

}
