<x-laylout>
    <x-slot:heading>
        Job Listing page
    </x-slot:heading>
    <ul class="space-y-6">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class="text-gray-500 hover:text-black border border-black px-4 py-5 block rounded-lg transition-all ease-in-out duration-150 ">
                <p class="font-bold text-blue-500">{{ $job->employer->name }}</p>
                <div>
                    <strong>{{ $job['title'] }} :</strong> Pays ${{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach
    </ul>

</x-laylout>
