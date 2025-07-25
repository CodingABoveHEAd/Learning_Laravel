<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Lets find your next job</h1>

            {{-- <form action="" class="mt-6">
                <input type="text" placeholder="I am searching for..."
                    class="max-w-xl w-full rounded-xl bg-white/20 border-white/5 px-5 py-4">
            </form> --}}

            <x-forms.form action='/search' class="mt-8">
                <x-forms.input :label='false' name='q' placeholder='Web developer...' />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>


            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-jobcard :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>

        </section>
    </div>

</x-layout>
