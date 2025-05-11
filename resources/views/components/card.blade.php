@props(['highlight' => false])

<div @class(['card', 'highlight' => $highlight])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>