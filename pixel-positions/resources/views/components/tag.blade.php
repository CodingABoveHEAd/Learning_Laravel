@props(['size'=>'base'])

@php
$classes=" font-bold bg-white/10 hover:bg-white/25 
 transition-colors duration-300 rounded-xl";

 if($size==='base') {
    $classes .=' px-5 py-1 text-sm';
 }  else{
    $classes .=' px-3 py-1 text-[.625rem]';
 }
@endphp

<a href="#" class="{{$classes}}">{{ $slot }}</a>
