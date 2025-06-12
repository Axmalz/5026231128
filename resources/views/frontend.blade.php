{{-- resources/views/frontend.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Portofolio Web</title>

    <!-- Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: #f0f4f8;
            margin: 0;
            padding: 2rem;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }
        h1 {
            font-size: 2.4rem;
            color: #2b3a45;
            margin-bottom: 1rem;
        }
        .profile {
            background: #dbeaf7;
            border-radius: 12px;
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 1.5rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }
        .avatar {
            width: 100%;
            max-width: 200px;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .details {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .identity p {
            margin: 0.4rem 0;
            font-size: 0.95rem;
            color: #2b3a45;
        }
        .button {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #2b3a45;
            color: #ffffff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            width: fit-content;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #1f2a33;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
        .card {
            background: #e7edf2;
            padding: 1.2rem 1rem;
            border-radius: 12px;
            text-align: center;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #d0d7de;
        }
        .card:hover {
            background: #c4d4e0;
            transform: translateY(-4px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        .card a {
            text-decoration: none;
            font-weight: 600;
            color: #1f2a33;
            font-size: 1.1rem;
            display: block;
            margin-bottom: 0.4rem;
        }
        .card p {
            font-size: 0.9rem;
            color: #555;
            margin: 0;
        }
        @media (max-width: 600px) {
            .profile {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .avatar {
                margin: auto;
            }
            .details {
                align-items: center;
            }
            .identity {
                text-align: left;
                width: 100%;
            }
            .button {
                margin: 1rem auto 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>

        <div class="profile">
            <img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="avatar"/>
            <div class="details">
                <div class="identity">
                    <p><strong>Nama:</strong> Fadhiil Akmal Hamizan </p>
                    <p><strong>Deskripsi:</strong> Portofolio Web dan Aplikasi</p>
                    <p><strong>Status:</strong> Kumpulan Frontend PWEB</p>
                </div>
                <a class="button" href="https://github.com/Axmalz" target="_blank">Lihat GitHub</a>
            </div>
        </div>

        <div class="grid">
            <div class="card">
                <a href="{{ url('/welcome') }}">Welcome</a>
                <p>Welcome by Laravel</p>
            </div>
            <div class="card">
                <a href="{{ url('/ETS') }}">ETS</a>
                <p>Halaman Web ETS</p>
            </div>
            <div class="card">
                <a href="{{ url('/blog') }}">Blog</a>
                <p>Template Halaman Blog</p>
            </div>
            <div class="card">
                <a href="{{ url('/indexLinktree') }}">Linktree @thelantis</a>
                <p>Halaman Linktree </p>
            </div>
            <div class="card">
                <a href="{{ url('/pertama') }}">Pertemuan 1</a>
                <p>Artikel ITS</p>
            </div>
            <div class="card">
                <a href="{{ url('/pertemuan4') }}">Pertemuan 4</a>
                <p>Form</p>
            </div>
            <div class="card">
                <a href="{{ url('/pertemuan7') }}">Pertemuan 7</a>
                <p>Notifikasi Validasi Form</p>
            </div>
            <div class="card">
                <a href="{{ url('/template1') }}">Template Grid</a>
                <p>Template Percobaan Grid</p>
            </div>
            <div class="card">
                <a href="{{ url('/pegawai') }}">Pegawai</a>
                <p>Database Pegawai</p>
            </div>
            <div class="card">
                <a href="{{ url('/truk') }}">Tugas Pertemuan 14</a>
                <p>CRUD Database Truk</p>
            </div>
        </div>
    </div>
</body>
</html>
