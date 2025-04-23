<?php

// namespace App\Livewire;

// use Livewire\Component;
// use App\Models\Member as MemberModel;
// use Illuminate\Support\Collection;

// class Member extends Component
// {
//     // 変数を定義
//     // phpはprivateだったけどjs使うからpublicにしとく
//     public string $name;
//     public MemberModel $member;
//     //Memberテーブルから取得した値を入れる変数を用意（データが何個かになるから複数形）
//     public Collection $members;

//     //mount() クラスが呼ばれたときに必ず一回通るところ。最初の一回だけ。初期化
//     public function mount(MemberModel $member) //Memberクラスのオブジェクトを入れる$member
//     {
//         $this->member = $member;
//     }

//     // render()は必ず毎回通るメソッド
//     public function render()
//     {
//         // get()でデータを全健取得（SELECT * FROM membersと一緒）
//         $this->members = $this->member->get();
//         return view('livewire.member');
//     }

//     public function save () {
//         $this->member->create
//         ([
//             "name"=>$this->name
//         ]);
//     }

// }
