@props(['job'])

<div
    class="p-4 bg-white/5 rounded-xl 
        flex gap-x-6  border border-transparent hover:border-blue-800 group transition-colors duration-1000">
    <x-employer-logo />
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">{{ $job->employer->name }}s</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-400">{{ $job->title }}
        </h3>
        <p class="mt-auto text-sm text-gray-400">{{ $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>

</div>



{{-- class="flex  justify-between items-center mt-auto" --}}
