@include('_header')

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="border rounded">
                    @if($veri->gorsel)
                        <img src="/images/{{ $veri->gorsel }}" class="img-fluid rounded w-100" alt="{{ $veri->baslik }}">
                    @else
                        <img src="/img/fruite-item-5.jpg" class="img-fluid rounded w-100" alt="Görsel Yok">
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="fw-bold mb-3">{{ $veri->baslik }}</h4>
                <p class="mb-4">{{ $veri->icerik }}</p>
                <h5 class="fw-bold mb-3">{{ $veri->fiyat }} TL</h5>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <a href="/" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i
                            class="fa fa-arrow-left me-2 text-primary"></i>Geri Dön</a>
                    <a href="/sepet/ekle/{{$veri->id}}"
                        class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i
                            class="fa fa-shopping-cart me-2 text-primary"></i>Sepete Ekle</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('_footer')