@include('_header')
<div class="container-fluid py-5"></div>
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veri Ekle</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/urun-ekle" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="baslik" class="form-label">Başlık</label>
                            <input type="text" class="form-control" id="baslik" name="baslik" required>
                        </div>
                        <div class="mb-3">
                            <label for="icerik" class="form-label">İçerik</label>
                            <textarea class="form-control" id="icerik" name="icerik" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fiyat" class="form-label">Fiyat (TL)</label>
                            <input type="number" step="0.01" class="form-control" id="fiyat" name="fiyat" required>
                        </div>
                        <div class="mb-3">
                            <label for="gorsel" class="form-label">Görsel Yükle (İsteğe bağlı)</label>
                            <input type="file" class="form-control" id="gorsel" name="gorsel" accept=".jpg,.jpeg,.png">
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('_footer')