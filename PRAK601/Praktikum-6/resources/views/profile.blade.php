@extends('layouts.app')

@section('title', 'Profile')

@section('styles')
    @vite(['resources/css/app.css'])
@endsection

@section('content')
<div class="container py-2">
    <!-- Profile Header Card -->
    <div class="profile-header-card text-center text-md-start">
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-4 mb-md-0">
                <div class="profile-avatar-wrapper">
                    <div class="profile-avatar-ring"></div>
                    <div class="profile-avatar">
                        <img src="{{ url('storage/Profile/profile.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start gap-2 mb-2">
                    <h2 class="fw-bold mb-0 text-white">{{ $name }}</h2>
                </div>
                <p class="text-white-50 fs-5 mb-3">{{ $NIM }}</p>
                <p class="mb-4" style="max-width: 700px; line-height: 1.6;">
                    Saya adalah seorang mahasiswa dari prodi {{ $prodi }}. Saya hobi {{ $hobi }}.
                    Saya menguasai beberapa skill, diantaranya:
                </p>
                <!-- Skill Badges -->
                @foreach ( $skill as $s)
                    <span class="skill-badge">{{ $s }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Experience Cards Section -->
    <div class="mb-4 d-flex justify-content-between align-items-end">
        <div>
            <h3 class="fw-bold text-white mb-1">Pengalaman berkesan Saya:</h3>
            <p class="text-muted mb-0">Click any card below to view detailed information.</p>
        </div>
    </div>

    <div class="d-flex gap-3 overflow-x-auto pb-3 pt-1 px-1" style="scrollbar-width: thin; scrollbar-color: rgba(255, 255, 255, 0.2) transparent;">
    
        @foreach ($experiencescards as $index => $exp)
            @php
                $id = sprintf('%02d', $index + 1);
            @endphp
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('experience.show', $id) }}" class="experience-link d-block h-100">
                    <div class="card h-100 hover-card experience-card p-4">
                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="bg-{{ $exp['color'] }} bg-opacity-10 text-{{ $exp['color'] }} p-2.5 rounded-3 border border-{{ $exp['color'] }} border-opacity-25">
                                        <i class="bi {{ $exp['icon'] }} fs-4"></i>
                                    </div>
                                    <span class="text-white small">{{ $exp['duration'] }}</span>
                                </div>
                                
                                <h4 class="card-title fw-bold text-white mb-1">{{ $exp['title'] }}</h4>
                                <p class="text-white small mb-3">{{ $exp['company'] }}</p>
                                
                                <p class="card-text text-white small">
                                    {{ $exp['description'] }}
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-top border-white border-opacity-5 d-flex align-items-center justify-content-between text-white small">
                                <span>View Details</span>
                                <i class="bi bi-arrow-right text-purple"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection