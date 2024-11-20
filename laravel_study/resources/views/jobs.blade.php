<x-laylout>
    <x-slot:heading>
        Job Listing page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-400 hover:underline">
                    <strong>{{ $job['title'] }} :</strong> Pays ${{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>

</x-laylout>
