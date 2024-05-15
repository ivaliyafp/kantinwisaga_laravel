<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Sekolah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .welcome-container {
            text-align: center;
        }

        .menulist {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .makanan {
            margin: 0 10px;
        }

        .makanan img {
            max-width: 85%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="{{ asset('imgs/kantin.jpeg') }}"  alt="kantin.jpeg" class="profile-image">
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('imgs/bakso (1).jpeg') }}" alt="Gambar Bakso" style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h5 class="card-title">Makanan Bakso</h5>
                    <p class="card-text">Ini adalah deskripsi singkat mengenai makanan bakso.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('imgs/makanan (1).jpeg') }}" alt="Makanan 3" style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h5 class="card-title">Judul Makanan 1</h5>
                    <p class="card-text">Deskripsi singkat mengenai makanan 1.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('imgs/makanan (2).jpeg') }}" alt="Makanan 4" style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h5 class="card-title">Judul Makanan 2</h5>
                    <p class="card-text">Deskripsi singkat mengenai makanan 2.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
