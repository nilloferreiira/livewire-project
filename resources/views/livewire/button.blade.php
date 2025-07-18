@php
    $buttonStyle = '';
    if ($type == 'primary') {
        $buttonStyle = '#4f46e5';
    } elseif ($type == 'secondary') {
        $buttonStyle = '#ccc';
    }

@endphp

<button style="padding:10px; background:{{ $type }}; color:white;">
    {{ $title }}
</button>
