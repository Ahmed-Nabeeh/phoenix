<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
      dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Phoenix Academy') · Learn English with Confidence</title>

    {{-- Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Global Styles --}}
    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfaf7;
            color: #1e2b2f;
            line-height: 1.5;
        }

        main {
            min-height: 70vh;
        }

        /* ===== TYPOGRAPHY ===== */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
            color: #1b4e35;
        }

        .section-title {
            text-align: center;
            font-size: 2.4rem;
            margin: 3rem 0 1.5rem;
            color: #1d4e35;
            font-weight: 600;
        }

        /* ===== BUTTONS ===== */
        .btn-primary {
            background-color: #1b5e44;
            color: white;
            padding: 0.7rem 1.8rem;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 6px 12px rgba(20, 80, 50, 0.2);
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #b6552e;
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(20, 80, 50, 0.3);
            color: white;
        }

        .btn-primary i {
            font-size: 1rem;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #1b5e44;
            color: #1b5e44;
            padding: 0.7rem 1.2rem;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: 0.15s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline:hover {
            background: #1b5e44;
            color: white;
        }

        .btn-small {
            display: inline-block;
            background: transparent;
            border: 2px solid #1b5e44;
            color: #1b5e44;
            padding: 0.5rem 1.2rem;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-small:hover {
            background: #1b5e44;
            color: white;
        }

        /* ===== ALERTS ===== */
        .alert {
            padding: 1rem 2rem;
            margin: 1rem auto;
            max-width: 1200px;
            border-radius: 60px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: #dff0d8;
            color: #2d6a4f;
        }

        .alert-error {
            background: #f8d7da;
            color: #a94442;
        }

        /* ===== MODAL ===== */
        .modal {
            display: none;
            position: fixed;
            z-index: 200;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 20, 10, 0.7);
            align-items: center;
            justify-content: center;
        }

        .modal.is-open {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 2.5rem;
            border-radius: 60px;
            max-width: 450px;
            width: 90%;
            position: relative;
        }

        .modal-content .close {
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 2rem;
            cursor: pointer;
            color: #666;
        }

        .modal-content .close:hover {
            color: #d44a2c;
        }

        .modal-content h2 {
            margin-bottom: 1rem;
            color: #1b5e44;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .modal-content input,
        .modal-content select,
        .modal-content textarea {
            width: 100%;
            padding: 1rem 1.2rem;
            border-radius: 40px;
            border: 1px solid #ccc;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
        }

        .modal-content input:focus,
        .modal-content select:focus,
        .modal-content textarea:focus {
            outline: none;
            border-color: #1b5e44;
            box-shadow: 0 0 0 3px rgba(27, 94, 68, 0.1);
        }

        .modal-content button {
            background: #1b5e44;
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .modal-content button:hover {
            background: #b6552e;
        }

        /* ===== RTL SUPPORT ===== */
        [dir="rtl"] {
            text-align: right;
        }

        [dir="rtl"] .modal-content .close {
            right: auto;
            left: 25px;
        }

        [dir="rtl"] .btn-primary i,
        [dir="rtl"] .btn-outline i {
            margin-left: 8px;
            margin-right: 0;
        }

        /* ===== RESPONSIVE UTILITIES ===== */
        @media (max-width: 700px) {
            .section-title {
                font-size: 2rem;
            }
            
            .modal-content {
                padding: 1.8rem;
            }
        }
    </style>

    {{-- Page Specific Styles --}}
    @stack('styles')
</head>
<body>
    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Alert Component --}}
    @include('components.alert')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Booking Modal --}}
    @include('components.booking-modal')

    {{-- Scripts --}}
    <script>
        // Global modal functions
        function openBookingModal() {
            document.getElementById('bookingModal')?.classList.add('is-open');
        }
        
        function closeModal() {
            document.getElementById('bookingModal')?.classList.remove('is-open');
        }
        
        // Close modal when clicking outside
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('click', function(event) {
                let modal = document.getElementById('bookingModal');
                if (event.target === modal) {
                    modal.classList.remove('is-open');
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>