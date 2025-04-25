<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Memo;

class MemoList extends Component
{
    public $showCreate = false;
    public $title = '';
    public $content = '';

    public function showCreateForm()
    {
        $this->showCreate = true;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        Memo::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content', 'showCreate']);
        session()->flash('message', 'メモを作成しました！');
    }

    public function render()
    {
        $memos = Memo::latest()->get();

        return view('livewire.memo-list', [
            'memos' => $memos,
        ]);
    }
}
