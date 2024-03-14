@if ($paginator->hasPages())
        <div class="blog-pagination">
            <ul class="justify-content-center">
                @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                @else
                    <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link">Previous</a></li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled"><span>{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page"><a href="#" class="page-link active">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link">Next</a></li>
                @else
                    <li class="page-item disabled"><a href="#" class="page-link">Next</a></li>
                @endif
            </ul>
        </div>
@endif 
