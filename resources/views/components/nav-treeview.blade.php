@props([
    'icon' => "bi bi-circle",
    'label' => null
])
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon {{$icon}}"></i>
        <p>
            {{$label}}
            <i class="nav-arrow bi bi-chevron-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{$slot}}
    </ul>
</li>
