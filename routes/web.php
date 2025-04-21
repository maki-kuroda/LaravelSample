<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Livewire\MemoList;
use App\Livewire\MemoEdit;


Route::get('/', function () {
    return view('welcomea');
});

Route::get('/memos', MemoList::class)->name('memos.index');
Route::get('/memos/create', MemoEdit::class)->name('memos.create');
Route::get('/memos/{memo}/edit', MemoEdit::class)->name('memos.edit');

// ルートディレクトリにアクセスされたら、viewディレクトリのwelcomeファイルを開く

Route::controller(FirstController::class)->group(function() {
    //controller(FirstController::class)でコントローラーのクラスを呼び出す
    // ->group(function() {｝で呼び出したい処理をグループ化
    // function()　無名クラス
    Route::get('first', 'index');
});

// Route::get('first', [FirstController::class, 'index']);
// getは引数二個って決まっているから、2個目は配列の形
Route::get('admin/member', function () {
    return view('admin.member');
});
// 第一引数はURLのパス、第二引数実際にアクセスする
// @以降はmethod名
// phpだから最後セミコロンだろうが！

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
