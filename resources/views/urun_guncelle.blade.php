@include('_header')

<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">Ürün Güncelle</h1>
        <form action="/urun-guncelle/{{ $veri->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="baslik" class="form-label">Başlık</label>
                <input type="text" class="form-control" id="baslik" name="baslik" value="{{ $veri->baslik }}" required>
            </div>
            <div class="mb-3">
                <label for="icerik" class="form-label">İçerik</label>
                <textarea class="form-control" id="icerik" name="icerik" rows="5"
                    required>{{ $veri->icerik }}</textarea>
            </div>
            <div class="mb-3">
                <label for="fiyat" class="form-label">Fiyat (TL)</label>
                <input type="number" step="0.01" class="form-control" id="fiyat" name="fiyat" value="{{ $veri->fiyat }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="gorsel" class="form-label">Görsel (İsteğe bağlı)</label>
                <input type="file" class="form-control" id="gorsel" name="gorsel">
                @if($veri->gorsel)
                    <div class="mt-2">
                        <p>Mevcut Görsel:</p>
                        <img src="/images/{{ $veri->gorsel }}" alt="Mevcut Görsel" style="max-width: 200px;">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
</div>

@include('_footer')