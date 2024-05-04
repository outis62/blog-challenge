@extends('back-office.layouts.master')

@push('livewire-styles')
    @livewireStyles
@endpush

@section('back-layout-content')
    @include('partials.flash-message')
    @yield('livewire-component')
@endsection

@push('livewire-scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> --}}
    {{-- <x-livewire-alert::scripts />
    <x-livewire-alert::flash /> --}}
@endpush
