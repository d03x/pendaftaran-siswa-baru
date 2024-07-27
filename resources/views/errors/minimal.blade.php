<!-- resources/views/errors/404.blade.php -->


@if (request()->is('dashboard/*'))
    <x-dashboard-layout>
        @section('head')
            <style>
                .error-page {
                    text-align: center;
                    padding: 10px;
                }

                .error-page .headline {
                    font-size: 200px;
                    margin: 0;
                    color: #f56954;
                }

                .error-page .error-content {
                    margin-top: 20px;
                }

                .error-page .search-form {
                    margin: 20px auto;
                    max-width: 600px;
                }

                .error-page .search-form .input-group {
                    display: flex;
                }

                .error-page .search-form .form-control {
                    border-radius: 0;
                }
            </style>
        @stop
        <div class="error-page">
            <h2 class="headline text-danger">
                @yield('code')
            </h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> @yield('title')</h3>

                <p>
                @yield('message') <a href="{{ route('dashboard.index') }}">return to dashboard</a> or try using the search
                    form.
                </p>

                <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-dashboard-layout>
@else
    <x-base-layout title="Error 404">
        @yield('code') | @yield('message')
    </x-base-layout>
@endif
