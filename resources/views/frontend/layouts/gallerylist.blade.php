<section class="instagram">
    <a href="{{ business_setting('instagram') }}" target="_blank" class="w-100 h-100">
        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        <span>@RnStack Solution</span>
    </a>
    <div class="px--3 container-fluid px--md-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="instagram-item">
                    @foreach ($gallerys as $gallery)
                        <div class="instagram-item-thum">
                            <img loading="lazy" src="{{ url('storage/app/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                onerror="this.onerror=null;this.src='{{ asset('assets') }}/images/defaultimg.webp';">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
