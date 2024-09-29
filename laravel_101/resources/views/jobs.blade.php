<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
    @foreach ($jobs as $job)
        <li class="text-lg text-blue-500 hover:text-blue-950">
            <a href="/jobs/{{ $job['id'] }}">
            {{ $job['title'] }}: pays $ {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>
