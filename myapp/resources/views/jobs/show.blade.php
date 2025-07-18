<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <a href="/jobs/{{ $job['id'] }}">
        <strong> {{ $job->title }}:</strong> salary is {{ $job->Salary }} per year
    </a>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">edit job</x-button>
        </p>
    @endcan

</x-layout>
