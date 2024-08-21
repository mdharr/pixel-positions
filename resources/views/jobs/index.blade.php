<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 h-40 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                <div class="flex flex-wrap gap-1">
                    @foreach($tags as $tag)
                        <x-tag :$tag />
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
            <h3 class="mt-6">
                <a href="/all-jobs" class="hover:text-blue-500">See All Jobs</a>
            </h3>
        </section>
    </div>
</x-layout>
