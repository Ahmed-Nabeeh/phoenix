{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', __('messages.home') . ' · Phoenix Academy')

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-content">
            <h1>{{ __('messages.hero_title') }}</h1>
            
            @auth
                <div class="welcome-back">
                    <i class="fas fa-hand-wave"></i>
                    <h3>{{ __('messages.welcome_back', ['name' => Auth::user()->name]) }}</h3>
                    <p>{{ __('messages.your_journey') }}</p>
                    <div class="quick-actions">
                        <a href="{{ route('dashboard.my-lessons') }}" class="quick-action-btn">
                            <i class="fas fa-book"></i> {{ __('messages.my_lessons') }}
                        </a>
                        <a href="#" onclick="openBookingModal()" class="quick-action-btn">
                            <i class="fas fa-calendar-plus"></i> {{ __('messages.cta_book') }}
                        </a>
                    </div>
                </div>
            @else
                <button class="cta-main" onclick="openBookingModal()">✨ {{ __('messages.cta_trial') }}</button>
                <div class="hero-sub"><i class="fas fa-comment-dots"></i> {{ __('messages.hero_subtitle') }}</div>
            @endauth
        </div>
    </section>

    {{-- Features Bar --}}
    <div class="features-bar">
        <div class="feature-item">
            <i class="fas fa-user-graduate"></i>
            <span>{{ __('messages.feature_personalized') }}</span>
        </div>
        <div class="feature-item">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>{{ __('messages.feature_experienced') }}</span>
        </div>
        <div class="feature-item">
            <i class="fas fa-clock"></i>
            <span>{{ __('messages.feature_flexible') }}</span>
        </div>
    </div>

    {{-- Popular Courses Carousel --}}
    <h2 class="section-title">🔥 {{ __('messages.popular_courses') }}</h2>
    <div class="carousel-wrapper">
        <div class="course-card">
            <i class="fas fa-comments course-icon"></i>
            <h3>{{ __('messages.course_conversation') }}</h3>
            <p>{{ __('messages.course_conversation_desc') }}</p>
            @auth
                <a href="#" class="btn-small" onclick="openBookingModal()">{{ __('messages.cta_book') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-small">{{ __('messages.login') }}</a>
            @endauth
        </div>
        
        <div class="course-card">
            <i class="fas fa-spell-check course-icon"></i>
            <h3>{{ __('messages.course_grammar') }}</h3>
            <p>{{ __('messages.course_grammar_desc') }}</p>
            @auth
                <a href="#" class="btn-small" onclick="openBookingModal()">{{ __('messages.cta_book') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-small">{{ __('messages.login') }}</a>
            @endauth
        </div>
        
        <div class="course-card">
            <i class="fas fa-pyramid course-icon"></i>
            <h3>{{ __('messages.course_egyptian') }}</h3>
            <p>{{ __('messages.course_egyptian_desc') }}</p>
            @auth
                <a href="#" class="btn-small" onclick="openBookingModal()">{{ __('messages.cta_book') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-small">{{ __('messages.login') }}</a>
            @endauth
        </div>
        
        <div class="course-card">
            <i class="fas fa-mosque course-icon"></i>
            <h3>{{ __('messages.course_gulf') }}</h3>
            <p>{{ __('messages.course_gulf_desc') }}</p>
            @auth
                <a href="#" class="btn-small" onclick="openBookingModal()">{{ __('messages.cta_book') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-small">{{ __('messages.login') }}</a>
            @endauth
        </div>
        
        <div class="course-card">
            <i class="fas fa-briefcase course-icon"></i>
            <h3>Business English</h3>
            <p>professional communication</p>
            @auth
                <a href="#" class="btn-small" onclick="openBookingModal()">{{ __('messages.cta_book') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-small">{{ __('messages.login') }}</a>
            @endauth
        </div>
    </div>

    {{-- Meet Teacher Mona --}}
    <section class="teacher-section">
        <div class="teacher-img">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="teacher-info">
            <h2>{{ __('messages.meet_teacher') }}</h2>
            <p>{{ __('messages.teacher_description') }}</p>
            <div class="tesol-badge">
                <i class="fas fa-award"></i> 
                {{ __('messages.tesol_badge') }}
            </div>
            @auth
                <a href="#" class="teacher-cta" onclick="openBookingModal()">{{ __('messages.book_with_mona') }}</a>
            @else
                <a href="{{ route('register') }}" class="teacher-cta">{{ __('messages.join_mona_class') }}</a>
            @endauth
        </div>
    </section>

    {{-- Testimonials Carousel --}}
    <h2 class="section-title">💬 {{ __('messages.student_testimonials') }}</h2>
    <div class="testimonials-carousel">
        <div class="testimonial-card">
            <i class="fas fa-quote-right"></i>
            <p>“{{ __('messages.testimonial_1') }}”</p>
            <span class="student-name">— {{ __('messages.testimonial_1_author') }}</span>
        </div>
        <div class="testimonial-card">
            <i class="fas fa-quote-right"></i>
            <p>“{{ __('messages.testimonial_2') }}”</p>
            <span class="student-name">— {{ __('messages.testimonial_2_author') }}</span>
        </div>
        <div class="testimonial-card">
            <i class="fas fa-quote-right"></i>
            <p>“{{ __('messages.testimonial_3') }}”</p>
            <span class="student-name">— {{ __('messages.testimonial_3_author') }}</span>
        </div>
        <div class="testimonial-card">
            <i class="fas fa-quote-right"></i>
            <p>“The flexible scheduling allowed me to balance work and learning. Highly recommended!”</p>
            <span class="student-name">— Sara, Kuwait</span>
        </div>
    </div>

    {{-- Stats Section --}}
    <div class="stats-section">
        <div class="stat-item">
            <i class="fas fa-users"></i>
            <div class="stat-number">1200+</div>
            <div class="stat-label">Happy Students</div>
        </div>
        <div class="stat-item">
            <i class="fas fa-book-open"></i>
            <div class="stat-number">50+</div>
            <div class="stat-label">Courses</div>
        </div>
        <div class="stat-item">
            <i class="fas fa-clock"></i>
            <div class="stat-number">3+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-item">
            <i class="fas fa-globe"></i>
            <div class="stat-number">15+</div>
            <div class="stat-label">Countries</div>
        </div>
    </div>

    {{-- Bottom CTA --}}
    <div class="bottom-cta">
        <h2>📘 {{ __('messages.free_lesson') }}</h2>
        @auth
            <button class="cta-bottom-btn" onclick="openBookingModal()">
                <i class="fas fa-calendar-alt"></i> {{ __('messages.book_now') }}
            </button>
            <p class="cta-sub">{{ __('messages.welcome_back') }}</p>
        @else
            <button class="cta-bottom-btn" onclick="openBookingModal()">
                <i class="fas fa-calendar-alt"></i> {{ __('messages.book_trial') }}
            </button>
            <p class="cta-sub">{{ __('messages.no_credit_card') }}</p>
        @endauth
    </div>
@endsection

@push('styles')
<style>
    /* ===== HERO SECTION ===== */
    .hero {
        background: linear-gradient(107deg, rgba(0, 30, 20, 0.8), rgba(15, 55, 35, 0.7)),
                    url('https://images.pexels.com/photos/5212345/pexels-photo-5212345.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat;
        min-height: 600px;
        display: flex;
        align-items: center;
        padding: 3rem 5%;
        color: white;
        position: relative;
    }

    .hero-content {
        max-width: 800px;
        width: 100%;
    }

    .hero h1 {
        font-size: 3.2rem;
        font-weight: 800;
        line-height: 1.2;
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        margin-bottom: 1.5rem;
        color: white;
    }

    .hero h1 span {
        color: #fcd7a8;
    }

    .cta-main {
        background-color: #e5703a;
        border: none;
        padding: 1rem 2.5rem;
        font-size: 1.4rem;
        font-weight: 700;
        border-radius: 60px;
        color: white;
        cursor: pointer;
        margin-bottom: 1rem;
        border: 2px solid #ffcd94;
        transition: all 0.3s ease;
        box-shadow: 0 8px 18px rgba(229, 112, 58, 0.3);
    }

    .cta-main:hover {
        background-color: #c25323;
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(229, 112, 58, 0.4);
    }

    .hero-sub {
        font-size: 1.3rem;
        font-weight: 400;
        background-color: rgba(10, 40, 25, 0.6);
        display: inline-block;
        padding: 0.6rem 2rem;
        border-radius: 40px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* ===== WELCOME BACK SECTION ===== */
    .welcome-back {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 60px;
        padding: 2rem;
        margin: 1.5rem 0;
        border: 1px solid rgba(255, 255, 255, 0.2);
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .welcome-back h3 {
        font-size: 2rem;
        margin: 0.5rem 0;
        color: white;
    }

    .welcome-back p {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 1.5rem;
    }

    .quick-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .quick-action-btn {
        background: white;
        color: #1b5e44;
        text-decoration: none;
        padding: 0.8rem 1.8rem;
        border-radius: 40px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .quick-action-btn:hover {
        background: #1b5e44;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .quick-action-btn i {
        font-size: 1.1rem;
    }

    /* ===== FEATURES BAR ===== */
    .features-bar {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background: white;
        padding: 2.5rem 2rem;
        border-radius: 60px 60px 0 0;
        margin-top: -2rem;
        position: relative;
        z-index: 5;
        box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.05);
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 1.2rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: #183c2c;
        padding: 0.5rem 1rem;
    }

    .feature-item i {
        font-size: 2.5rem;
        color: #d2703a;
        background: #fef0e4;
        padding: 0.8rem;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .feature-item:hover i {
        background: #d2703a;
        color: white;
        transform: rotate(360deg);
    }

    /* ===== COURSE CAROUSEL ===== */
    .carousel-wrapper,
    .testimonials-carousel {
        display: flex;
        overflow-x: auto;
        gap: 2rem;
        padding: 1rem 2rem 2.5rem;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
        scrollbar-color: #c0987a #f0e3d8;
    }

    .carousel-wrapper::-webkit-scrollbar,
    .testimonials-carousel::-webkit-scrollbar {
        height: 10px;
    }

    .carousel-wrapper::-webkit-scrollbar-track,
    .testimonials-carousel::-webkit-scrollbar-track {
        background: #f0e3d8;
        border-radius: 20px;
    }

    .carousel-wrapper::-webkit-scrollbar-thumb,
    .testimonials-carousel::-webkit-scrollbar-thumb {
        background: #c0987a;
        border-radius: 20px;
    }

    .carousel-wrapper::-webkit-scrollbar-thumb:hover,
    .testimonials-carousel::-webkit-scrollbar-thumb:hover {
        background: #a07d5e;
    }

    .course-card {
        background: white;
        min-width: 280px;
        flex: 0 0 auto;
        scroll-snap-align: start;
        border-radius: 40px;
        padding: 2rem 1.5rem;
        box-shadow: 0 15px 30px rgba(0, 30, 10, 0.08);
        text-align: center;
        border: 1px solid #f0e3d8;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .course-card:hover {
        transform: translateY(-10px);
        border-color: #cdaa89;
        box-shadow: 0 25px 40px rgba(0, 30, 10, 0.15);
    }

    .course-icon {
        font-size: 3rem;
        color: #1b5e44;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .course-card:hover .course-icon {
        transform: scale(1.1);
        color: #d97c4a;
    }

    .course-card h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1b4e35;
    }

    .course-card p {
        color: #5f6b63;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    /* ===== TEACHER SECTION ===== */
    .teacher-section {
        background: linear-gradient(115deg, #ebdad1, #f9f1ea);
        padding: 4rem 5%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 4rem;
        margin: 3rem 0;
        border-radius: 80px;
    }

    .teacher-img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: linear-gradient(135deg, #8f6b4f, #cbad93);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 6rem;
        color: #2b5f42;
        border: 6px solid white;
        box-shadow: 0 25px 35px rgba(172, 155, 142, 0.3);
        transition: all 0.3s ease;
    }

    .teacher-img:hover {
        transform: scale(1.05) rotate(5deg);
    }

    .teacher-info {
        max-width: 550px;
    }

    .teacher-info h2 {
        font-size: 2.8rem;
        color: #1e3f2d;
        margin-bottom: 1rem;
        position: relative;
    }

    .teacher-info h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background: #d97c4a;
        border-radius: 2px;
    }

    .teacher-info p {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #2f4237;
        margin: 1.5rem 0;
    }

    .tesol-badge {
        background: #2b6c4a;
        color: white;
        padding: 0.7rem 2rem;
        border-radius: 60px;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
        margin: 1rem 0 1.5rem;
        box-shadow: 0 5px 15px rgba(43, 108, 74, 0.3);
    }

    .tesol-badge i {
        font-size: 1.4rem;
    }

    .teacher-cta {
        display: inline-block;
        background: #d97c4a;
        color: white;
        text-decoration: none;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 5px 15px rgba(217, 124, 74, 0.3);
    }

    .teacher-cta:hover {
        background: #b6552e;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(217, 124, 74, 0.4);
    }

    /* ===== TESTIMONIALS ===== */
    .testimonial-card {
        background: white;
        min-width: 320px;
        flex: 0 0 auto;
        scroll-snap-align: start;
        padding: 2.5rem 2rem;
        border-radius: 50px;
        box-shadow: 0 20px 40px rgba(182, 85, 46, 0.1);
        border-bottom: 6px solid #d28352;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 50px rgba(182, 85, 46, 0.15);
    }

    .testimonial-card i {
        color: #b6552e;
        font-size: 2.5rem;
        margin-bottom: 1rem;
        opacity: 0.5;
    }

    .testimonial-card p {
        font-style: italic;
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        color: #1e3b33;
    }

    .student-name {
        font-weight: 700;
        color: #1b5e44;
        font-size: 1.1rem;
        display: block;
        text-align: right;
    }

    /* ===== STATS SECTION ===== */
    .stats-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        padding: 3rem 5%;
        max-width: 1200px;
        margin: 2rem auto;
    }

    .stat-item {
        text-align: center;
        padding: 2rem;
        background: white;
        border-radius: 40px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.08);
    }

    .stat-item i {
        font-size: 3rem;
        color: #d97c4a;
        margin-bottom: 1rem;
    }

    .stat-number {
        font-size: 2.8rem;
        font-weight: 800;
        color: #1b5e44;
        line-height: 1.2;
    }

    .stat-label {
        font-size: 1.1rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ===== BOTTOM CTA ===== */
    .bottom-cta {
        background: linear-gradient(135deg, #0f3426, #1b4e35);
        color: white;
        text-align: center;
        padding: 5rem 2rem;
        border-radius: 100px 100px 0 0;
        margin-top: 4rem;
        position: relative;
        overflow: hidden;
    }

    .bottom-cta::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .bottom-cta h2 {
        font-size: 3.2rem;
        margin-bottom: 2rem;
        color: white;
        position: relative;
        z-index: 1;
    }

    .cta-bottom-btn {
        background: #e57c3c;
        font-size: 2.2rem;
        font-weight: 700;
        padding: 1.3rem 4rem;
        border-radius: 80px;
        border: none;
        color: white;
        cursor: pointer;
        box-shadow: 0 15px 30px rgba(229, 124, 60, 0.3);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .cta-bottom-btn:hover {
        background: #c05f29;
        transform: translateY(-5px);
        box-shadow: 0 25px 40px rgba(229, 124, 60, 0.4);
    }

    .cta-sub {
        margin-top: 2rem;
        font-size: 1.4rem;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }

    /* ===== RTL SUPPORT ===== */
    [dir="rtl"] .teacher-info h2::after {
        left: auto;
        right: 0;
    }

    [dir="rtl"] .student-name {
        text-align: left;
    }

    [dir="rtl"] .feature-item {
        flex-direction: row-reverse;
    }

    [dir="rtl"] .quick-action-btn i {
        margin-left: 10px;
        margin-right: 0;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 900px) {
        .hero h1 {
            font-size: 2.8rem;
        }
        
        .teacher-info h2 {
            font-size: 2.2rem;
        }
        
        .bottom-cta h2 {
            font-size: 2.5rem;
        }
        
        .cta-bottom-btn {
            font-size: 1.8rem;
            padding: 1rem 3rem;
        }
    }

    @media (max-width: 700px) {
        .hero {
            min-height: 500px;
        }
        
        .hero h1 {
            font-size: 2.2rem;
        }
        
        .cta-main {
            font-size: 1.2rem;
            padding: 0.8rem 1.8rem;
        }
        
        .hero-sub {
            font-size: 1rem;
        }
        
        .features-bar {
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }
        
        .teacher-section {
            text-align: center;
            padding: 3rem 2rem;
        }
        
        .teacher-info h2::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .teacher-img {
            width: 200px;
            height: 200px;
            font-size: 5rem;
        }
        
        .stats-section {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .bottom-cta {
            padding: 3rem 1rem;
        }
        
        .bottom-cta h2 {
            font-size: 2rem;
        }
        
        .cta-bottom-btn {
            font-size: 1.4rem;
            padding: 0.8rem 2rem;
        }
        
        .quick-actions {
            flex-direction: column;
        }
        
        .quick-action-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 400px) {
        .stats-section {
            grid-template-columns: 1fr;
        }
        
        .course-card {
            min-width: 240px;
        }
        
        .testimonial-card {
            min-width: 260px;
        }
    }
</style>
@endpush