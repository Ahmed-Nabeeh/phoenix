<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <div class="footer-logo">
                <i class="fas fa-phoenix-framework"></i>
                <span>Phoenix Academy</span>
            </div>
            <p class="footer-tagline">Learn English with confidence with Teacher Mona</p>
        </div>

        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('lessons.index') }}">Lessons</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contact</h4>
            <ul>
                <li><i class="fas fa-envelope"></i> info@phoenixacademy.com</li>
                <li><i class="fas fa-phone"></i> +20 123 456 7890</li>
                <li><i class="fas fa-map-marker-alt"></i> Cairo, Egypt</li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Follow Us</h4>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Phoenix Academy. All rights reserved.</p>
    </div>
</footer>

<style>
    .footer {
        background: #0f3426;
        color: white;
        padding: 3rem 2rem 1rem;
        margin-top: 3rem;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .footer-section {
        margin-bottom: 2rem;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .footer-logo i {
        color: #d97c4a;
        font-size: 2rem;
    }

    .footer-tagline {
        color: #e6d9cb;
        line-height: 1.6;
    }

    .footer-section h4 {
        color: white;
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 0.8rem;
        color: #e6d9cb;
    }

    .footer-section ul li i {
        color: #d97c4a;
        width: 25px;
    }

    .footer-section ul li a {
        color: #e6d9cb;
        text-decoration: none;
        transition: 0.2s;
    }

    .footer-section ul li a:hover {
        color: #d97c4a;
        padding-left: 5px;
    }

    .social-links {
        display: flex;
        gap: 1rem;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: 0.2s;
    }

    .social-links a:hover {
        background: #d97c4a;
        transform: translateY(-3px);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 2rem;
        margin-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: #e6d9cb;
        font-size: 0.9rem;
    }

    /* RTL Support */
    [dir="rtl"] .footer-section ul li i {
        margin-left: 10px;
        margin-right: 0;
    }

    [dir="rtl"] .footer-section ul li a:hover {
        padding-left: 0;
        padding-right: 5px;
    }

    @media (max-width: 700px) {
        .footer {
            padding: 2rem 1rem 1rem;
        }

        .footer-content {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .social-links {
            justify-content: center;
        }
    }
</style>