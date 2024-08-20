@props(['employer', 'width' => 90, 'height' => 90])

<div
    class="rounded-xl bg-cover bg-center bg-no-repeat"
    style="
        background-image: url('{{ asset($employer->logo) }}');
        width: {{ $width }}px;
        height: {{ $height }}px;
    "
    role="img"
    aria-label="{{ $employer->name }} logo"
></div>
