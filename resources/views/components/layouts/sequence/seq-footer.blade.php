<footer class="bg-black py-5 pb-0">
    <div class="container text-center pb-2">
        <a href="#" class="user-select-none pe-none">
            <img loading="lazy" src="{{ asset('assets/img/logo-white.svg') }}" alt="image" width="220" height="100"
                style="object-fit: cover;" class="mb-3 object-fit-contain mx-auto">
        </a>
        <p class="text-white">Empowering authors to publish, promote, and share their stories with the world.</p>

        <ul class="d-inline-flex align-items-center justify-content-center gap-3 bg-white p-3 flex-wrap my-3 ">
            <li><a href="mailto:{{ config('var.email') }}" class="d-flex align-items-baseline gap-2 "
                    style="color: #101223;"><i class="far fa-envelope !text-primary" style="color: #C6913D;"></i>
                    {{ config('var.email') }}</a></li>
            <li><a href="tel:{{ config('var.phone') }}" class="d-flex align-items-baseline gap-2 "
                    style="color: #101223;"><i class="fas fa-phone-alt !text-primary" style="color: #C6913D;"></i>
                    {{ config('var.phone') }}</a></li>
            <li><a href="https://maps.app.goo.gl/LQWfbbCoRcKuUHwF9"
                    class="user-select-none pe-none d-flex align-items-baseline gap-2 " style="color: #101223;"><i
                        class="fas fa-map-marker-alt !text-primary"
                        style="color: #C6913D;"></i>{{ config('var.address') }}</a></li>
        </ul>
        <div class="container mt-5 mt-lg-7 text-center">
            <p class="text-white m-0 font-xxs-11px font-md-14px" style="">Copyright © 2025 - Elite Author
                Publishers. All
                Rights
                Reserved.
            </p>

        </div>
        <div class="disclaimer_footer pb-4 pb-xl-3 border-top border-white pt-3 mt-3">
            <p class="fw-bold text-start text-white font-xxs-14px mb-2">Disclaimer:</p>
            <p class="text-start text-white m-0 font-xxs-11px font-md-13px">We do not offer or engage in any practices
                that compromise ethical publishing standards. All services provided are transparent, professional, and
                within the bounds of integrity. We do not make claims or guarantees that cannot be reasonably delivered.
            </p>
        </div>
    </div>


</footer>
