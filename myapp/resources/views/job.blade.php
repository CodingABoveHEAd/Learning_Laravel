<x-layout>
        <x-slot:heading>
       Job
    </x-slot:heading>

    <a href="/jobs/{{$job['id']}}">
         <strong> {{ $job['title'] }}:</strong> salary  is {{ $job['Salary'] }} per year
    </a>


</x-layout>
    