@props(['job'])

<div class="p-4 bg-white/5 rounded-xl 
        flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-1000">

    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-400">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size='small' />
            @endforeach
            
        </div>
       <x-employer-logo :width='42'/>
    </div>

</div>
