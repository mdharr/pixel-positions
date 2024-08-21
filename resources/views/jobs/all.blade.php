<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>All Jobs</x-section-heading>
            <div class="mt-6 space-y-6 min-h-[500px]">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
            {{ $jobs->links() }}
    </div>
</x-layout>
