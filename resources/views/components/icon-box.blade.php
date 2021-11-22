@props(['icon', 'text', 'aosDelay'])

<div class="icon-box rounded-3 bg-white position-relative overflow-hidden p-4"
data-aos="fade-up" data-aos-delay="{{ $aosDelay }}">
    <div class="icon-box__icon text-center rounded-circle pt-2 mx-auto mb-4 d-inline-block">
        <i class="{{ $icon }}"></i>
    </div>
    <h4 class="icon-box__title mb-3 fw-bold">
        <a href="">{{ $text }}</a>
    </h4>
</div>
