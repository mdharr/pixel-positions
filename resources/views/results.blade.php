<x-layout>
    <x-page-heading>
        Results
    </x-page-heading>

    <div class="space-y-6">
        @if($jobs->isNotEmpty())
            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @else
            <div class="text-center flex-col space-y-10">
                <h2 class="text-2xl mt-20">No matching results...</h2>
                <p class="text-gray hover:text-blue-500">
                    <a href="/">Return Home</a>
                </p>
            </div>
        @endif
    </div>
</x-layout>
