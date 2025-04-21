<div>
<div>
    <h1>メモ一覧</h1>

    <div style="margin-bottom: 10px;">
        <input type="text" wire:model.live="search" placeholder="キーワードで検索">
    </div>

    @if ($memos->isNotEmpty())
        <ul>
            @foreach ($memos as $memo)
                <li>
                    <a href="{{ route('memos.edit', $memo) }}">{{ $memo->title }}</a>
                    <button wire:click="delete({{ $memo->id }})">削除</button>
                </li>
            @endforeach
        </ul>

        <div>
            {{ $memos->links() }} {{-- ペジネーションリンク --}}
        </div>
    @else
        <p>まだメモはありません。</p>
    @endif

    <a href="{{ route('memos.create') }}">新しいメモを作成</a>
</div>
</div>
