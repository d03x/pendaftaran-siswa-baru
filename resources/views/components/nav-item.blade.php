@props([
    'href' => null,
    "icon" => 'bi bi-speedometer',
    
])
<li class="nav-item">
    <a href="{{ $href }}" class="nav-link {{ request()->fullUrlIs($href) ? 'active' : '' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $slot }}
        </p>
    </a>
</li>