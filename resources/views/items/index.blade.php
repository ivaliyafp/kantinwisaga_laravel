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
    <div class="menulist">
        <div class="makanan">
            <img src="{{ asset('imgs/yummy.jpeg') }}" alt="makanan_1">
        </div>
        <div class="makanan">
            <img src="{{ asset('imgs/bakso(1).jpeg') }}" alt="makanan_2">
        </div>
        <div class="makanan">
            <img src="{{ asset('imgs/makanan(1).jpeg') }}" alt="makanan_3">
        </div>
        <div class="makanan">
            <img src="{{ asset('imgs/makanan(2).jpeg') }}" alt="makanan_4">
    </div>
</body>
</html>
