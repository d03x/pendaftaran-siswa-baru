<nav style="--bs-breadcrumb-divider: '&raquo;';" aria-label="breadcrumb">
    <ol class="breadcrumb float-sm-end">
        @foreach ($breadcrumbs as $item)
            @if (request()->fullUrlIs(url($item['url'])))
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $item['name'] }}
                </li>
            @else
                <li class="breadcrumb-item"><a
                        href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                </li>
            @endif
        @endforeach

    </ol>
</nav>