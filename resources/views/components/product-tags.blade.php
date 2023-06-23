@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv);
@endphp
<ul class="list-inline">
    @foreach ($tags as $tag)
        <li class="list-inline-item bg-dark text-white rounded py-1 px-3 mr-2 text-xs">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
