<x-layout>
    <div class="max-w-2xl mx-auto space-y-4 p-6 bg-white rounded-xl">
        <h1 class="text-3xl font-bold">{{ $job->title }}</h1>
        <p><strong>Salary:</strong> {{ $job->salary }}</p>
        <p><strong>Location:</strong> {{ $job->location }}</p>
        <p><strong>Schedule:</strong> {{ $job->schedule }}</p>
        <p><strong>URL:</strong> <a href="{{ $job->url }}" target="_blank">{{ $job->url }}</a></p>
        <p><strong>Tags:</strong>
            @foreach($job->tags as $tag)
                <span class="inline-block px-2 py-1 bg-gray-200 rounded">{{ $tag->name }}</span>
            @endforeach
        </p>
    </div>
</x-layout>
