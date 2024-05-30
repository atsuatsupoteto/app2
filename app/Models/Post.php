<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function delete()
    {
        // 関連するCommentsのレコードを削除する
        $this->comments()->delete();

        // Postのレコードを削除する
        return parent::delete();
    }
}
