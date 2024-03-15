<x-app-layout>
    <div class="w-[90%]">
    <div class="flex items-center justify-center">
        <h1 class="text-2xl text-center text-white mt-4">Add a new post</h1>
        <form action="/p" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="mt-4 p-4">
            <x-input-label for="caption" :value="__('Image Caption')" />
            <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')"  autocomplete="caption" />
            <x-input-error :messages="$errors->get('caption')" class="mt-2" />
        </div>
        

        <div class="mt-4 p-4">
            <x-input-label for="image" :value="__('Choose the image')" />
            <input id="image" class="block mt-1 text-black" type="file" name="image" :value="old('image')"/>
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex justify-center items-center"> <button type="submit" class="text-black bg-blue rounded-[10%] p-4">Add new post</button></div>

        </form>

    </div>
</div>
</x-app-layout>
