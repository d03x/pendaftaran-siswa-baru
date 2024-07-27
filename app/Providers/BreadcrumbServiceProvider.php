<?php

namespace App\Providers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        //auto breadcrumb
        $segments = FacadesRequest::segments();
        View::composer('components.dashboard.bread-crumb', function ($view) use ($segments) {
            $breadcrumbs = [];
            foreach ($segments as $key => $segment) {
                $url = '/' . implode('/', array_slice($segments, 0, $key + 1));
                $breadcrumbs[] = [
                    'name' => ucfirst($segment),
                    'url' => $url,
                ];
            }
            $view->with('breadcrumbs', $breadcrumbs);
        });
    }
}
