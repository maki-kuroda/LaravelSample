
    <div class="w-full flex">
        {{-- サイドバー（メモ一覧など） --}}
        <aside class="w-1/4 bg-white p-4 border-r overflow-y-auto">
            <h2 class="text-lg font-semibold mb-2">メモ一覧</h2>
            @livewire('memo-list')
        </aside>

        {{-- メインエリア（フォームなど） --}}
        <section class="flex-1 p-4 overflow-y-auto">
            <h2 class="text-lg font-semibold mb-2">新しいメモ</h2>
            @livewire('memo-form')
        </section>
    </div>
