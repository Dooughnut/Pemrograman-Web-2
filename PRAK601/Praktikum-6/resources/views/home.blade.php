@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    @vite(['resources/css/app.css'])
@endsection

@section('php')

@endsection

@section('content')
<div class="row align-items-center justify-content-center text-center py-5">
    <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-4" style="background: linear-gradient(135deg, #ffffff 0%, #a855f7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; letter-spacing: -1px;">
            Selamat datang di situs web saya<br>
        </h1>
        <h3>
            dibuat oleh: <br> {{ $name}} <br> {{ $NIM }}
        </h3>
         <p class="lead text-muted mb-4">
            Saya adalah seorang mahasiswa yang sedang belajar tentang Laravel dan Blade. Saya membuat situs web ini untuk mempraktikkan keterampilan saya dalam menggunakan Laravel dan Blade.
        <div>
            <a href="{{ route('profile') }}" class="btn btn-outline-light px-4 py-3 rounded-pill hover-accent">
                <i class="bi bi-person-circle me-2"></i>View Profile
            </a>
        </div>
    </div>
</div>
@endsection
