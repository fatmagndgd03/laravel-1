<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Veri Ekle</div>
                    <div class="card-body">
                        <form action="{{ url('/veri-ekle') }}" method="POST">
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
                                <label for="gorsel" class="form-label">Görsel URL (İsteğe bağlı)</label>
                                <input type="text" class="form-control" id="gorsel" name="gorsel">
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>