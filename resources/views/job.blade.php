<x-laylout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <a href="/jobs" class="text-blue-400 underline">Back to Joblist</a>

    <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>

    <p>This Job pays ${{ $job['salary'] }} per year</p>
</x-laylout>
