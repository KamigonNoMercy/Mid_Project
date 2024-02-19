<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="{{ asset("/style/style.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul class="nav_links">    
                <li class="btn"><a href="{{ route('landing') }}" target="_blank">Home</a></li>
            </ul>
            <ul class="nav_links">
                <li class="btn"><a href="{{ route('login') }}" target="_blank">Login</a></li>
                <li class="btn"><a href="{{ route('register') }}" target="_blank">Sign Up</a></li>
            </ul>
        </nav>

        <section class="employee-section">
            <h2>Daftar Karyawan</h2>
            <!-- Tabel untuk menampilkan daftar karyawan -->
            <table class="employee-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Nomor Telp.</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Isi tabel akan ditambahkan melalui logika PHP/Laravel -->
                    <!-- Contoh: -->
                    <tr>
                        <td>John Doe</td>
                        <td>25</td>
                        <td>Jl. Example No. 123</td>
                        <td>081234567890</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                    <!-- Contoh data lainnya ditambahkan di sini -->
                </tbody>
            </table>

            <!-- Form untuk menambahkan karyawan baru -->
            
                @csrf
                <h2>Tambah Karyawan Baru</h2>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required minlength="5" maxlength="20">

                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" required min="21">

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required minlength="10" maxlength="40">

                <label for="nomor_telp">Nomor Telp.:</label>
                <input type="tel" id="nomor_telp" name="nomor_telp" pattern="[0-9]{9,12}" required>

                <button type="submit">Tambah</button>
            </form>
        </section>
    </div>
</body>
</html>

