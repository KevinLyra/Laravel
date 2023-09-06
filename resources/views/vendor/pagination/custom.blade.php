@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link" rel="prev"><i class="fas fa-arrow-left"></i></span>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator -> previousPageUrl()}}" class="page-link" rel="prev"><i class="fas fa-arrow-left"></i></a>
            </li>
        @endif


        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">
                        {{ $element }}
                    </span>
                </li>
            @endif      
            @if (is_array($element))
                @foreach ($element as $page=>$url)
                <li class="page-item">
                    @if ($page == $paginator->currentPage())
                        <span class="page-link active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    @endif
                </li>
                @endforeach
            @endif    
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item">
                <span class="page-link" rel="next"><i class="fas fa-arrow-right"></i></span>
            </li>
        @else
            <li class="page-item disabled">
                <a href="{{ $paginator -> nextPageUrl()}}" class="page-link" rel="next"><i class="fas fa-arrow-right"></i></a>
            </li>
        @endif
    </ul>
@endif