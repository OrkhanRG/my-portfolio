<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {

        $data = $request->only('blog_id', 'parent_id', 'name', 'email', 'comment');

        $data['ip'] = $request->ip();
        $data['user_id'] = auth()->user()->id ?? null;

        $comment = Comment::query()->create($data);

        if (!$comment) {
            return response()->json([
                'message' => "Şərhiniz göndərilmə zamanı xəta yarandı",
                'code' => 500
            ], 500);
        }

        return response()->json([
            'message' => "Şərhiniz göndərildi! Admin nəzarətindən sonra şərhiniz paylaşılacaqdır",
            'code' => 200
        ], 200);
    }
}
