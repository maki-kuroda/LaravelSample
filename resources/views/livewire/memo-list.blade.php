<div class="p-4">
    <h1 class="text-2xl font-semibold mb-4">メモ一覧</h1>

    {{-- 検索 --}}
    <div class="mb-4">
        <input type="text" wire:model="search" placeholder="キーワードで検索"
            class="w-full p-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </div>

    {{-- メモ一覧 --}}
    @if ($memos->isNotEmpty())
        <ul class="space-y-2">
            @foreach ($memos as $memo)
                <li class="flex justify-between items-center bg-white p-4 rounded shadow">
                    <a href="{{ route('memos.edit', $memo) }}" class="text-blue-600 hover:underline">
                        {{ $memo->title }}
                    </a>
                    <button wire:click="delete({{ $memo->id }})"
                        class="text-red-500 hover:text-red-700 font-semibold">
                        削除
                    </button>
                </li>
            @endforeach
        </ul>

        {{-- ページネーション --}}
        <div class="mt-4">
            {{ $memos->links() }}
        </div>
    @else
        <p class="text-gray-500">まだメモはありません。</p>
    @endif

    {{-- 作成リンク --}}
    <div class="mt-6">
        <button wire:click="showCreateForm">新しいメモを作成</button>
    </div>

    <div>
    {{-- メモ作成ボタン --}}
    <button wire:click="showCreateForm" class="bg-blue-500 text-white px-4 py-2 rounded">＋ 新しいメモ</button>

    {{-- メモ作成フォーム（表示/非表示） --}}
    @if($showCreate)
        <div class="mt-4 p-4 border rounded bg-white shadow">
            <h2 class="text-lg font-bold mb-2">新規メモ作成</h2>
            <input type="text" wire:model="title" placeholder="タイトル" class="border p-2 w-full mb-2">
            <textarea wire:model="content" placeholder="内容" class="border p-2 w-full mb-2"></textarea>
            <button wire:click="save" class="bg-green-500 text-white px-4 py-2 rounded">保存</button>
        </div>
    @endif

    {{-- メモ一覧 --}}
    <div class="mt-6">
        @foreach ($memos as $memo)
            <div class="p-2 border-b">{{ $memo->title }}</div>
        @endforeach
    </div>
</div>

</div>
