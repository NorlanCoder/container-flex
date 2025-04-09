@if ($paginator->hasPages())
<nav>
    <ul class="wg-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled pagination-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true">&lsaquo;</span>
        </li>
        @else
        <li class="pagination-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-item" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <a href="{{ $paginator->previousPageUrl() }}" class="pagination-item" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        <li class="disabled pagination-item" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="active pagination-item" style="background-color: #fff;" aria-current="page"><span>{{ $page }}</span></li>
        @else
        <li><a href="{{ $url }}" class="pagination-item">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-item" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        @else
        <li class="disabled pagination-item" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true">&rsaquo;</span>
        </li>
        @endif
    </ul>
</nav>
@endif