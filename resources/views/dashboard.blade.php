<x-app-layout>
    <div class="bg-white">
        <div class="flex p-4 w-[80%]">
            <div class="mr-8 ml-8 w-[25%] flex items-center justify-center">
                <img src="{{ asset('freeCodeCamp.png') }}" alt="free code camp logo" class="rounded-full border border-20 border-white w-[60%]">
            </div>

            <div class="w-[70%]">
            <div class="flex justify-between">
                <h1 class="text-4xl text-black">{{ $user->username }}</h1>
                <button class="text-blue p-4">
                    <a href="{{ url('/p/create') }}">
                    Add new post
                    </a>
                </button>
            </div>


            <button class="text-blue">
                    <a href="/profile/{{ $user->id }}/edit">
                    Edit profile
                    </a>
                </button>


                <div class="flex gap-4">
                    <div class="text-black"><strong>{{ $user->posts->count()}}</strong> Posts</div>
                    <div class="text-black"><strong>23 K </strong>Followers</div>
                    <div class="text-black"><strong>153 </strong>Following</div>
                </div>

                <div class="flex flex-col gap-2">
                    <div>{{ $user->profile->title}}</div>
                    <div>{{$user->profile->description}}</div>
                    <div> <a href="{{ $user->profile->url }}" class="text-blue">{{ $user->profile->url }}</a></div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 justify-center gap-4 p-4 w-[80%] mx-auto mt-8">
        @foreach($user->posts as $post)
                <div class="hover:cursor-pointer">
                    <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{$post['image']}}" alt="post image" class="w-[300px] h-[300px] ">
                    </a>

                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
