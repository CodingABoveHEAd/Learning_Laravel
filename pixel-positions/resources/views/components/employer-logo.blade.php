@props(['employer', 'width' => 90])

<div>
    <img class="rounded-xl" width="{{ $width }}"
         src="{{ asset('storage/' . $employer->logo) }}"
         alt="logo">
</div>
