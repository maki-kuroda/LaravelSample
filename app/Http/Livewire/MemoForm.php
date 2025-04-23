<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;

class MemoForm extends Component
{
    public $title = '';
    public $content = '';

    protected $rules = [
        'title' => 'required|string|max:100',
        'content' => 'required|string',
    ];

    public function save()
    {
        $this->validate();

        Memo::create([
            'user_id' => Auth::id(), // ログインユーザーのID
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content']);

        session()->flash('message', 'メモを保存しました！');
    }

    public function render()
    {
        return view('livewire.memo-form');
    }
}


// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Memo;

// class MemoForm extends Component
// {
//     public $title = '';
//     public $content = '';

//     public function save()
//     {
//         $this->validate([
//             'title' => 'required|string|max:255',
//             'content' => 'required|string',
//         ]);

//         Memo::create([
//             'title' => $this->title,
//             'content' => $this->content,
//         ]);

//         // 入力内容をリセット
//         $this->reset(['title', 'content']);

//         session()->flash('message', 'メモを保存しました！');
//     }

//     public function render()
//     {
//         return view('livewire.memo-form');
//     }
// }

