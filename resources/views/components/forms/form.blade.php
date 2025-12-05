@props(['method' => 'POST', 'action' => '#'])

<form action="{{ $action }}" method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}" {{ $attributes->except('method', 'action')->merge(['class' => "max-w-2xl mx-auto space-y-6"]) }}>
    
    @if (strtolower($method) !== 'get')
        @csrf
        @method($method)
    @endif

    {{ $slot }}

</form>
