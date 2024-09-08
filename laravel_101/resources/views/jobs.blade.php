<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Jobs Page</h1>
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
            {{ $job['title'] }}: pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>
