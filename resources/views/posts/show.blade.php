<x-app-layout>

<div class="flex p-8 items-center justify-center w-full h-full gap-4">

    <div class="bg-white">

    <img src="/storage/{{ $post->image }}" class="w-[500px] h-[500px]"/>

    </div>

    <div class="flex flex-col">

    <h1 class="text-4xl">{{ $post->user->username }} </h1>

    <p class="text-2xl">
        {{ $post->caption }}
    </p>
    

    </div>

</div>

</x-app-layout>
