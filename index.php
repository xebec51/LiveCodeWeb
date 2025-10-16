<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 p-5 bg-white rounded shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Data Mahasiswa</h1>
        
        <a href="tambah.php" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 mb-4 inline-block">
            + Tambah Data
        </a>

        <table class="min-w-full bg-white border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">NIM</th>
                    <th class="py-2 px-4 border-b">Jurusan</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>
</html>
