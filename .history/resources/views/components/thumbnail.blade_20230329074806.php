@php
if($type === 'shops'){
    $path = 'storage/shops/';
}
if($type === 'pro'){
    $path = 'storage/shops/';
}
@endphp

<div>
    @if (empty($filename))
        <img src="{{ asset('images/no_image.jpg') }}">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}">
    @endif
</div>
