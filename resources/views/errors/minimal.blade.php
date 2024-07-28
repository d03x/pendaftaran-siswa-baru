<!-- resources/views/errors/404.blade.php -->


<x-base-layout title="Error">
    <div class="tw-text-center noise tw-bg-blue-600 tw-flex tw-items-center tw-justify-center tw-h-screen">
        <div class=" tw-text-2xl tw-text-white">
            <span>@yield('code')</span> <span>|</span> <span> @yield('message')</span>
        </div>
    </div>
</x-base-layout>
