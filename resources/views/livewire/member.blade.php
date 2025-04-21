<div>
    <!-- livewireは、必ず一個のタグに囲まれとかないといけない -->
    <!-- いらないけど分かりやすいからフォームタグ付けとく -->
    <form>
    <p>
        <!-- 属性の訳：nameという変数を制御する（modelはデータを指す（？）） -->
        <x-input wire:model="name"/>
    </p>

    </form>
    <!-- クリックしたらsaveメソッドを動かす -->
    <x-button wire:click="save" wire:loading.attr="disabled">保存</x-button>

@foreach ($members as $member)
<p>{{$member -> id}} {{$member -> name}}</p>
@endforeach 

    {{$name}}
</div>
