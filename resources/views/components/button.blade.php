@props(['text']);
<button {{ $attributes->merge([
    'class'=>'active',
    'style'=>'color:red'
]) }}>{{$text}}</button>