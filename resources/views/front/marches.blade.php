@extends('layouts.front.guest')

@section('title', 'Marchés')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/front/css/marches.css') }}">
@endpush

 
@section('content')
    <!-- Bannière -->
    <section class="banner-section" style="background: linear-gradient(135deg, #000000 0%, #001a4d 100%); padding: 150px 20px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="banner-content">
            <h1 style="color: white; font-size: 64px; font-weight: 700; margin: 0; letter-spacing: 2px;">Marchés</h1>
        </div>
    </section>
 
@endsection 



@push('scripts')
    <script src="{{ asset('assets/front/js/marches.js') }}"></script>
@endpush