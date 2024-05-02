<style>
    form {
        width: 300px;
        margin: 0 auto;
    }
    table {
        width: 100%;
    }
    th {
        text-align: left;
        padding: 10px;
    }
    td {
        padding: 10px;
    }
    input[type="text"], input[type="date"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form method="post" action="<?= base_url('siswa/update') ?>">
    <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
    <table>
        <tr>
            <th>NIS</th>
            <td><input type="text" id="nis" name="nis" value="<?= $siswa['nis'] ?>"></td>
        </tr>
        <tr>
            <th>Nama Siswa</th>
            <td><input type="text" id="nama_siswa" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>"></td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td><input type="text" id="kelas" name="kelas" value="<?= $siswa['kelas'] ?>"></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir'] ?>"></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir'] ?>"></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" id="alamat" name="alamat" value="<?= $siswa['alamat'] ?>"></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" <?= $siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>> Laki-laki
                <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P" <?= $siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>> Perempuan
            </td>

        </tr>
    </table>
    <input type="submit" value="Update">
</form>