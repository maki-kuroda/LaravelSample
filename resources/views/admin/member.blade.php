<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            member
        </h2>
    </x-slot>

    <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <p>
        <x-input class="w-full"/>
    </p>
    @livewire ('member')
    <p>
        <x-checkbox id="label" />
        <x-label for="label" value="walk"/>
    </p>
    <p>
        <x-checkbox id="label2" />
        <x-label for="label2" value="chari"/>
    </p>
    <p>
        <x-checkbox id="label3" />
        <x-label for="label3" value="car"/>
    </p>
    <p>
        <x-checkbox id="label4" />
        <x-label for="label4" value="train"/>
    </p>

    </div>
    </div>
</x-app-layout>
