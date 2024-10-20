<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('message'))
            {{session('message')}}
        @endif
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        <form method="post" action="{{route('admin.store')}}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="text" class="font-semibold mt-4">タイトル</label>
                    <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    <input type="text" name="text" class="w-auto py-2 border border-gray-300 rounded-md" id="text"
                    value="{{old('text')}}">
                </div>
            </div>

            <x-primary-button class="mt-4">
                新規作成
            </x-primary-button>
        </form>
    </div>
</x-app-layout>