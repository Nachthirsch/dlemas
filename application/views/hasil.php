<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin-top: 250px;
            padding: 0;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($siswa as $s): ?>
        <tr>
            <td><?= $s['nama_siswa'] ?></td>
            <td><?= $s['nis'] ?></td>
            <td><?= $s['kelas'] ?></td>
            <td><?= $s['tanggal_lahir'] ?></td>
            <td><?= $s['tempat_lahir'] ?></td>
            <td><?= $s['alamat'] ?></td>
            <td><?= $s['jenis_kelamin'] ?></td>
            <td><a href="<?= site_url('siswa/edit/' . $s['id']) ?>">Edit</a></td>
            <td><a href="<?= site_url('siswa/delete/' . $s['id']) ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <br>
</body>
<a href="<?= site_url('siswa/create') ?>">Kembali ke form input</a>
</html>