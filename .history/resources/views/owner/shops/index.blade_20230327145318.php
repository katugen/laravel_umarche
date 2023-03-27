<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($shops as $shop)
                    <a href="{{ route('owner.shops.edit',['shop'=> $shop->id]) }}">
                        <div class="border rounded-md p-4">
                        @if($shop->is_selling)
                        <span class="bo"></span>
                        @else
                        @endif
                            <div class="mb-4">
                             {{ $shop->name }}
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
