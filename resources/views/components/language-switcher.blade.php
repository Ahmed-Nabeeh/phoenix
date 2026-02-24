<div class="language-switcher">
    @foreach(config('app.available_locales', ['en' => 'English', 'ar' => 'العربية']) as $locale => $name)
        <a href="{{ route('language.switch', $locale) }}" 
           class="lang-link {{ App::getLocale() == $locale ? 'active' : '' }}"
           title="{{ $name }}">
            {{ strtoupper($locale) }}
        </a>
        @if(!$loop->last)
            <span class="separator">|</span>
        @endif
    @endforeach
</div>

<style>
    .language-switcher {
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 0 1rem;
    }

    .lang-link {
        color: #1e3b33;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 4px 8px;
        border-radius: 20px;
        transition: 0.2s;
    }

    .lang-link:hover {
        color: #d97c4a;
    }

    .lang-link.active {
        background-color: #1b5e44;
        color: white;
    }

    .separator {
        color: #ccc;
        font-size: 0.8rem;
    }

    /* RTL Support */
    [dir="rtl"] .language-switcher {
        margin: 0 1rem 0 0;
    }

    @media (max-width: 900px) {
        .language-switcher {
            margin: 0.5rem 0;
        }
    }
</style>