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
            ->orderBy('deleted_at', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.comment.comments', compact('comments'));
    }

    public function unverifiedComments()
    {
        $comments = Comment::query()
            ->where('is_approved', 0)
            ->withTrashed()
            ->orderBy('deleted_at', 'asc')
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
                'error' => 'Koment silinmədi!'
            ], 404);
        }

        $delete = $comment->delete();

        return  response()->json([
            'success' => 'Koment Silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $comment = Comment::query()->where('id', $id)->withTrashed()->first();

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

    public function changeVerify(Request $request)
    {
        $id = $request->only('id');
        $comment = Comment::query()->where('id', $id)->withTrashed()->first();

        if (!$comment)
        {
            return response()->json([
                'error' => 'Koment tapılmadı!'
            ], 404);
        }

        $comment->update(['is_approved' => !$comment->is_approved]);

        return  response()->json([
            'success' => 'Koment təsdiqləndi!',
            'data' => $comment
        ], 200);
    }

}
