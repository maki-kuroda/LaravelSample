<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $guarded = ['id'];

    // app/Models/Memo.php
protected $fillable = [
    'title', 'content', 'user_id',
];

// usersテーブルとのリレーション定義 (後ほど記述)
public function user()
{
    return $this->belongsTo(User::class);
}
}
