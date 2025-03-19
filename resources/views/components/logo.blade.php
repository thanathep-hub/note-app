<!-- resources/views/components/logo.blade.php -->
<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0px); }
    }

    .logo-animation {
        animation: float 3s ease-in-out infinite;
    }
</style>

<div {{ $attributes }}>
    <svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 100 100" class="{{ $class }} logo-animation">
        <!-- Main notepad shape -->
        <rect x="20" y="10" width="60" height="80" rx="4" fill="#3B82F6" />

        <!-- Paper sheets -->
        <rect x="25" y="5" width="60" height="80" rx="4" fill="#93C5FD" />
        <rect x="30" y="0" width="60" height="80" rx="4" fill="#FFFFFF" />

        <!-- Note lines -->
        <line x1="40" y1="20" x2="80" y2="20" stroke="#CBD5E1" stroke-width="2" />
        <line x1="40" y1="35" x2="80" y2="35" stroke="#CBD5E1" stroke-width="2" />
        <line x1="40" y1="50" x2="80" y2="50" stroke="#CBD5E1" stroke-width="2" />
        <line x1="40" y1="65" x2="70" y2="65" stroke="#CBD5E1" stroke-width="2" />

        <!-- Pencil/pen -->
        <polygon points="40,20 35,25 35,65 40,60" fill="#F59E0B" />
        <rect x="35" y="60" width="5" height="5" fill="#78350F" />
    </svg>
</div>
