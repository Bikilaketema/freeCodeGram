<x-app-layout class="bg-white">
    <div class="bg-white">
        <div class="flex p-4 h-screen">
            <div class="grid grid-cols-3 p-4">
                <img src="{{ asset('freeCodeCamp.png') }}" alt="free code camp logo" class="rounded-full border border-20 border-white">
            </div>

            <div class="grid grid-cols-9 flex flex-col gap-4">
                <div class="flex items-center gap-6">
                    <h1 class="text-xl text-black">{{ $user->username }}</h1>
                    <button>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add new post</a>
                    </button>
                </div>

                <div class="flex gap-4">
                    <div class="text-black"><strong>153 </strong>Posts</div>
                    <div class="text-black"><strong>23 K </strong>Followers</div>
                    <div class="text-black"><strong>153 </strong>Following</div>
                </div>

                <div>{{ $user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div> <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="flex justify-center items-center gap-4 p-4">
            <div class="col-4">
                <img src="{{ asset('freeCodeCamp.png') }}" alt="">
            </div>
            <div class="col-4">
                <img src="{{ asset('freeCodeCamp.png') }}" alt="">
            </div>
            <div class="col-4">
                <img src="{{ asset('freeCodeCamp.png') }}" alt="">
            </div>
        </div>
    </div>
</x-app-layout>
