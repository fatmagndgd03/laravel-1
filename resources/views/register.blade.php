<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Üyelik Oluştur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Oturum Açma Sayfası ile Aynı CSS Stilleri */
        body {
            background-color: #f0f2f5;
        }

        .register-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-card {
            width: 100%;
            max-width: 420px;
            /* Oturum Açma Kartı ile Aynı Genişlik */
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #28a745;
            /* Kayıt için yeşil bir renk kullandım */
            border-color: #28a745;
        }

        .btn-custom:hover {
            background-color: #1e7e34;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="card register-card">
            <div class="card-body p-4 p-md-5">
                <h3 class="card-title text-center mb-4 fw-bold text-success">Yeni Üyelik</h3>
                <p class="text-center text-muted mb-4">Hemen bir hesap oluşturun ve başlayın</p>

                <form action="/uye-kaydet" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Adınız</label>
                        <input type="text" class="form-control" id="name" name="ad" placeholder="Ad" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Soyadınız</label>
                        <input type="text" class="form-control" id="name" name="soyad" placeholder="Soyad" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-posta Adresi</label>
                        <input type="email" class="form-control" id="email" name="e_posta" placeholder="ornek@mail.com"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password" name="parola"
                            placeholder="En az 8 karakter" required>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Şifre Tekrar</label>
                        <input type="password" class="form-control" id="password_confirmation" name="parolatekrar"
                            placeholder="Şifreyi doğrulayın" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-custom btn-lg text-white">
                            Hesap Oluştur
                        </button>
                    </div>

                </form>
                <div class="text-center mt-4">
                    <p class="text-muted small mb-0">Zaten bir hesabın var mı? <a href="/giris-yap"
                            class="text-decoration-none fw-bold">Oturum Aç</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>