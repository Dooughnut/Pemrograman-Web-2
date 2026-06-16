@extends('layouts.app')

@section('title', 'Experience Details')

@section('styles')
    @vite(['resources/css/app.css'])
@endsection

@section('content')
<div class="container py-2">
    <!-- Header -->
    <div class="row mb-5">
        <div class="col-lg-12 text-center text-lg-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center justify-content-lg-start mb-2">
                    <li class="breadcrumb-item"><a href="{{ route('profile') }}" class="text-decoration-none text-muted">Profile</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Experience Details</li>
                </ol>
            </nav>
            <h2 class="fw-bold text-white mb-2">Kenangan Selama Kuliah</h2>
            <p class="text-muted">Berikut adalah kenangan yang tidak terlupakan selama masa kuliah saya.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Sidebar Summary (Left) -->
        <div class="col-lg-4">
            <div class="sidebar-metrics h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-{{ $experience['color'] }} bg-opacity-10 text-{{ $experience['color'] }} p-2.5 rounded-3 border border-{{ $experience['color'] }} border-opacity-25" style="width: fit-content; display: flex; align-items: center; justify-content: center; height: 48px; width: 48px;">
                            <i class="bi {{ $experience['icon'] }} fs-4"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold text-white mb-0">{{ $experience['title'] }}</h4>
                            <span class="text-white-50 small">{{ $experience['duration'] }}</span>
                        </div>
                    </div>
                    
                    <p class="mb-3 text-light" style="line-height: 1.6;"> 
                        {{ $experience['description'] }}
                    </p>
                </div>

                <div class="pt-4 border-top border-white border-opacity-5">
                    <a href="{{ route('profile') }}" class="btn btn-sm btn-outline-light w-100 rounded-pill py-2 text-white-50 border-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Back to Profile
                    </a>
                </div>
            </div>
        </div>

        <!-- Scrollable Experience Container (Right) -->
        <div class="col-lg-8">
            <div class="scrollable-timeline-container">
                <div class="scrollable-timeline">
                    
                    @foreach ($images as $image)
                        <div class="detail-card p-0 overflow-hidden">
                            <img src="{{ $image }}" alt="Experience Picture" class="img-fluid w-100" style="display: block;">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection