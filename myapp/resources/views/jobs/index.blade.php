<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <li style="list-style: none">

                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">

                    <div class="font-bold text-blue-500">
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong> {{ $job['title'] }}:</strong> salary is {{ $job['Salary'] }} per year
                    </div>
                </a>
            </li>
        @endforeach
    </div>
    <div>
        {{$jobs->Links()}}
    </div>

</x-layout>
