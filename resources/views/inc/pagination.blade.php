@if ($paginator->hasPages())
    <ul class="page-list clearfix text-xs-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

            <li class="disabled">
                <a rel="" href="{{ $paginator->previousPageUrl() }}" class="disabled js-search-link">
                    <i class="material-icons"></i>
                </a>
            </li>


        @else
            <li>
                <a rel="" href="{{ $paginator->previousPageUrl() }}" class="disabled js-search-link">
                    <i class="material-icons"></i>
                </a>
            </li>

        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="current">
                          <a rel="nofollow" href="{{ $url }}">
                              {{ $page }}
                          </a>
                        </li>
                    @else
                        <li >
                            <a rel="nofollow" href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a rel="" href="{{ $paginator->nextPageUrl() }}" class="disabled js-search-link">
                    <i class="material-icons"></i>
                </a>
            </li>
        @else
            
            <li class="disabled">
                <a rel="" href="{{ $paginator->nextPageUrl() }}" class="disabled js-search-link">
                    <i class="material-icons"></i>
                </a>
            </li>

        @endif
    </ul>
@endif