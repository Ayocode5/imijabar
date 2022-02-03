<!-- START NEWSLETTER -->
<section id="newsletter">
    <div class="row mx-lg-5 no-gutters wrap_newsletter">
        <div class="col-lg-8 col-12 order-2 order-lg-1 mx-auto my-auto">
            <h3 class="w-lg-75">{{ $home_settings->newsletter_title }} &mdash; <span>
                {{ $home_settings->newsletter_detail }}    
            </span></h3>

            <input placeholder="example@gmail.com" class="input_newsletter" type="text">
            <img class="button_newsletter" src="{{ asset('storage/app/public/assets/img') }}/send_button.svg"
                alt="sendButton">
            <p class="my-3 attention_newsletter">*Dengan berlangganan berarti anda setuju untuk kami mengirimkan anda
                berita-berita terbaru
                yang terkait
                dengan bidang otomotif kapan saja ke email yang anda masukan.</p>
        </div>
        <div class="col-lg-4 col-12 order-1 order-lg-2">
            <img class="mx-auto d-block postMailIcon" src="{{ asset('storage/app/public/assets/img') }}/mailPos.svg"
                alt="mail pos">
        </div>
    </div>
</section>
<!-- END NEWSLETTER -->
