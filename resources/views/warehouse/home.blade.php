<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warehouse Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 50px;
            color: #333;
            margin: 20px 0;
        }
        .table-container {
            width: 80%;
            max-width: 1200px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .logout-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: #e04343;
        }
        .add-item-form {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .add-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 5px;
        }
        .add-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Warehouse Dashboard</h1>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>

    <!-- Storage Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($storageData as $storage)
                    <tr>
                        <td>{{ $storage->id_barang }}</td>
                        <td>{{ $storage->barang->nama_barang }}</td> <!-- Assuming you have a relationship for 'barang' -->
                        <td>{{ $storage->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="add-item-form">
        <h2>Tambah Barang</h2>
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <input type="text" name="id_barang" class="form-input" placeholder="ID Barang" required>
            <input type="text" name="nama_barang" class="form-input" placeholder="Nama Barang" required>
            <input type="number" name="harga" class="form-input" placeholder="Harga" required>
            <textarea name="deskripsi" class="form-input" placeholder="Deskripsi" required></textarea>
            <button type="submit" class="add-btn">Tambah Barang</button>
        </form>
    </div>
</body>
</html>
