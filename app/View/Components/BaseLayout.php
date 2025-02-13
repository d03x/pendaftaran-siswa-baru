<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = null,
        public ?string $bodyClass = '',
    ) {
        $this->title = $title ? $title . "-" . config('app.name') : config('app.name');
        $this->bodyClass = "root_app $bodyClass";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.base');
    }
}
