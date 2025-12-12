@include('_header')

<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4">Sepetim</h1>
        @if(count($sepet) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Görsel</th>
                        <th>Ürün</th>
                        <th>Fiyat</th>
                        <th>Adet</th>
                        <th>Toplam</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sepet as $id => $details)
                        <tr>
                            <td style="width: 100px;">
                                @if($details['gorsel'])
                                    <img src="/images/{{ $details['gorsel'] }}" class="img-fluid rounded"
                                        alt="{{ $details['baslik'] }}">
                                @else
                                    <img src="/img/fruite-item-5.jpg" class="img-fluid rounded" alt="Görsel Yok">
                                @endif
                            </td>
                            <td>{{ $details['baslik'] }}</td>
                            <td>{{ $details['fiyat'] }} TL</td>
                            <td>{{ $details['adet'] }}</td>
                            <td>{{ $details['fiyat'] * $details['adet'] }} TL</td>
                            <td>
                                <a href="/sepet/sil/{{ $id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Sil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end fw-bold">Genel Toplam:</td>
                        <td colspan="2" class="fw-bold">{{ $toplamFiyat }} TL</td>
                    </tr>
                </tfoot>
            </table>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-success rounded-pill px-4 py-2">Ödemeye Geç</a>
            </div>
        @else
            <div class="alert alert-warning">
                Sepetinizde ürün bulunmamaktadır. <a href="/" class="alert-link">Alışverişe Başla</a>
            </div>
        @endif
    </div>
</div>

@include('_footer')