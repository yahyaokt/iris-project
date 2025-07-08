<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Customer Sign Up</h2>
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="nama_customer" placeholder="Nama Lengkap" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="text" name="nama_kota" placeholder="Nama Kota" required>
            <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>