@if ($paginator->haspages())
<div class="div-count">
@foreach ($elements as $element)
{{-- "Three Dots" Separator --}}
@if (is_string($element))
    <button class=" count disabled" ><a>{{ $element }}</a></button>
@endif
@if (is_array($element))
@foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
        <button class="count active" ><a>{{ $page }}</a></button>
    @else
        <button class="count"><a href="{{ $url }}">{{ $page }} </a></button>
    @endif
@endforeach
@endif
@endforeach
</div>
@endif
