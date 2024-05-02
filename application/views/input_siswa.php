<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #e2e2e2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 0;
}

form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    padding: 25px;
    width: 100%;
    max-width: 400px;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #333333;
}

input[type="text"],
input[type="date"],
textarea,
select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
    border: 1px solid #dddddd;
    font-size: 14px;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #32c787;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #28a074;
}

.radio-container {
    display: flex;
    justify-content: start;
    margin-bottom: 15px;
}

.radio-container label {
    margin-right: 20px;
}

.radio-container input[type="radio"] {
    margin-right: 5px;
}

select {
    cursor: pointer;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    form {
        width: 90%;
        padding: 20px;
    }
}
</style>
</head>
<body>
  <form action="<?= site_url('siswa/store') ?>" method="post">
    <label for="nama_siswa">Nama Siswa:</label>
    <input type="text" id="nama_siswa" name="nama_siswa" value="<?= set_value('nama_siswa') ?>">
    <?= form_error('nama_siswa') ?>

    <label for="nis">NIS:</label>
    <input type="text" id="nis" name="nis" value="<?= set_value('nis') ?>">
    <?= form_error('nis') ?>

    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas" value="<?= set_value('kelas') ?>">
    <?= form_error('kelas') ?>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
    <?= form_error('tanggal_lahir') ?>

    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>">
    <?= form_error('tempat_lahir') ?>

    <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat"></textarea>

    <label>Jenis Kelamin:</label>
    <div class="radio-container">
      <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
      <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
    </div>

    <?= form_error('alamat') ?>
    <?= form_error('jenis_kelamin') ?>

    <label for="agama">Agama:</label>
    <select id="agama" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
      <option value="Protestan">Protestan</option>
      <option value="Khonghucu">Khonghucu</option>
    </select>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
