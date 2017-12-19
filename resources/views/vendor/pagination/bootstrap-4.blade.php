@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        <li class="page-item disabled"><span class="page-link">{{$paginator->currentPage().' of '.$paginator->lastPage()}}</span></li>
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">Sebelumnya</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Sebelumnya</a></li>
        @endif
        {{-- Pagination Elements --}}

        @foreach ($elements as $element)
          {{-- {{dd($elements)}} --}}
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Selanjutnya</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">Selanjutnya</span></li>
        @endif
    </ul>
@endif
