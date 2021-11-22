<x-layout title="Cek paket">

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Track Your Parcel</h1>
                <h4 data-aos="fade-up" data-aos-delay="400">Enter airwaybill number, can't use multiple airwaybills</h4>
                <div data-aos="fade-up" class="row align-items-center mt-3" data-aos-delay="800">
                    <div class="col-12 col-lg py-2">
                        <input type="text" name="name" class="form-control rounded-pill py-2 ps-4
                        input-placeholder-info input-border-info-2"
                        style="" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-12 col-lg-auto">
                        <a href="#about" class="btn-get-started scrollto w-100 w-lg-auto text-center">Tracking</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="services" class="services">
            <div class="container">

                <div class="section-title text-center pb-5" data-aos="fade-up">
                    <h2 class="fw-bold text-uppercase">Services</h2>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <x-icon-box icon="bx bx-world" text="Door To Door" aos-delay="100" />
                    </div>

                    <div class="col-md-3">
                        <x-icon-box icon="bx bxs-plane-take-off" text="Freight Forwading" aos-delay="200" />
                    </div>

                    <div class="col-md-3">
                        <x-icon-box icon="bx bx-barcode-reader" text="Custom Brokerage" aos-delay="300" />
                    </div>

                    <div class="col-md-3">
                        <x-icon-box icon="bx bx-buildings" text="Warehousing" aos-delay="400" />
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout>
