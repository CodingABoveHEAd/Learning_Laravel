<x-layout>
    <x-slot:heading>
 Edit Job:{{$job->title}}
    </x-slot:heading>
</x-layout>

<x-layout>
<form method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                            <input type="text" name="title" id="title"
                                class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                placeholder="Ship leader" 
                                value="{{$job->title}}"
                                required
                                />
                        </div>
                    </div>
                </div>

                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror


                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                            <input type="text" name="salary" id="salary"
                                class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                placeholder="50000 per year"
                                value="{{$job->Salary}}"
                                required
                                />
                        </div>
                    </div>
                </div>

                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror

                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}


            </div>
        </div>



    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div >
            <button form="delete-form" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
        </div>

        <div class="flex items-center gap-x-6">
            <a href="/jobs/{{$job->id}}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
        
    </div>
</form>

<form action="/jobs/{{$job->id}}" id="delete-form" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>


</x-layout>
