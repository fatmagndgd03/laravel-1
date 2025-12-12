@include('_header')

<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">Ürünleri Yönet</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Görsel</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veriler as $veri)
                        <tr>
                            <td>
                                @if($veri->gorsel)
                                    <img src="/images/{{ $veri->gorsel }}" alt="{{ $veri->baslik }}"
                                        style="width: 100px; height: auto;">
                                @else
                                    <span>Görsel Yok</span>
                                @endif
                            </td>
                            <td>{{ $veri->baslik }}</td>
                            <td>{{ Str::limit($veri->icerik, 50) }}</td>
                            <td>
                                <a href="/urun-guncelle/{{$veri->id}}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-edit"></i> Güncelle</a>
                                <a href="/urun-sil/{{$veri->id}}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Silmek istediğinize emin misiniz?')"><i
                                        class="fa fa-trash"></i> Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('_footer')