<div class="container position-absolute z-2 start-50 translate-middle-x" style="top: 15px; ">
    <div class="bg-white py-2 py-lg-0 px-4 px-lg-5 d-flex justify-content-between position-relative">
        <a class="navbar-brand m-0 p-0 d-block position-relative overflow-hidden" href="javascript:void(0)"
            style="height: 58px;">
            <img loading="lazy" src="{{ asset('assets/img/logo.svg') }}" alt="logo" width="150" height="58"
                class="object-fit-contain z-1">
        </a>
        <ul class="d-flex align-items-center gap-3">
            <li>
                <a href="tel:{{ config('var.phoneD') }}"
                    class="font-xxs-16px font-xxl-20px  d-flex align-items-center gap-2 fw-semibold" style="color: #C6913D;"><i
                        class="fas fa-phone-alt !text-primary"></i> <span
                        class="d-none d-lg-block">{{ config('var.phone') }}</span></a>
            </li>
            <li><a href="mailto:{{ config('var.email') }}"
                    class="font-xxs-16px font-xxl-20px  d-flex align-items-center gap-2 fw-semibold" style="color: #C6913D;"><i
                        class="far fa-envelope !text-primary"></i> <span
                        class="d-none d-lg-block">{{ config('var.email') }}</span></a></li>
        </ul>
    </div>


</div>
