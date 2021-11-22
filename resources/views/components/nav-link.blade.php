@props(['link', 'text', 'isActive' => false, 'isBtn' => false])

<li>
    <a {{ $attributes->class(['nav-link' => !$isBtn, 'scrollto', 'active' => $isActive])->merge(['href' => $link]) }}>
        {{ $text }}
    </a>
</li>
