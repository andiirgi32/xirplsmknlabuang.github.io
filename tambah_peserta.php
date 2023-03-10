<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include 'functions.php';
?>

<?=template_header('tambah_peserta')?>

<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Absen</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
        padding-top: 10px;
      }
      .tombol_simpan {
          background-color: green;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
          border-radius: 10px;
    }
    .tombol_hapus {
          background-color: red;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
          border-radius: 10px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Peserta</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Nis</label>
         <input type="text" name="nis" />
        </div>
        <div>
          <label>Jenis Kelamin</label>
         <input type="text" name="jk" required="" />
        </div>
        <div>
          <label>Kelas</label>
         <input type="text" name="kelas" required="" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button class="tombol_simpan" type="submit">Simpan Data</button>
         <button class="tombol_hapus" type="reset">Hapus Data</button>
        </div>
        </section>
      </form>
  </body>
</html>

<?=template_footer()?>