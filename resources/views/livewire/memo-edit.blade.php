<div>
<div>
    <h1>{{ $memoId ? 'メモの編集' : '新しいメモを作成' }}</h1>

    <form wire:submit.prevent="save">
        <div>
            <label for="title">タイトル:</label>
            <input type="text" id="title" wire:model="title">
            @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="content">内容:</label>
            <textarea id="content" wire:model="content"></textarea>
            @error('content') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">保存</button>
        <button type="button" wire:click="cancel">キャンセル</button>

        @if ($memoId)
            <button type="button" wire:click="delete({{ $memoId }})">削除</button>
        @endif
    </form>
</div>
</div>
