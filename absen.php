<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include 'functions.php';
?>

<?=template_header('Home')?>

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
        padding-top: 20px;
      }
      .read table {
  	width: 100%;
  	padding-top: 30px;
  	border-collapse: collapse;
}
table {
  	width: 1200px;
  	padding-top: 30px;
  	border-collapse: collapse;
}
table thead {
  	background-color: rgb(142, 142, 255);
  	border-bottom: 2px solid #000000;
}
table thead th {
  	padding: 10px;
  	font-weight: bold;
  	color: black;
  	font-size: 17px;
}
table tbody tr {
  	border-bottom: 1px solid #d3dae0;
  	background-color: #ffffff;
    
}
table tbody tr:nth-child(even) {
  	background-color: #ebeef1;
}
table tbody tr:hover {
  	background-color: skyblue;
}
table tbody tr:hover td {
  	color: #FFFFFF;
}
table tbody tr:hover td:nth-child(1) {
  	color: #FFFFFF;
}
    .tombol {
          color: #fff;
          text-decoration: none;
          font-size: 14px;
          font-weight: bold;
    }
    button a:hover {
      color: yellow;
    }
    button i:hover {
      color: yellow;
    }
    .tombol_edit {
          color: #fff;
          text-decoration: none;
    }
    .tombol_hapus {
          color: #fff;
          text-decoration: none;
    }
    .print {
      padding: 7px;
    }
    </style>
  </head>
  <body>
    <center><h1>Absen Siswa XI RPL SMK NEGERI LABUANG</h1><center>
    <center><button type="button" class="btn btn-secondary"><a href="tambah_peserta.php" class="tombol">+ &nbsp; Tambah Peserta</a></button> <button type="button" class="btn btn-sm btn-secondary mb-3 print" onClick="window.print ();" style="margin-top: 15px;"><i class="bi bi-printer-fill"></i></button><center>
    <br/>

    <div class="table-responsive">
    <table class=" table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA</th>
          <th>NIS</th>
          <th>JENIS KELAMIN</th>
          <th>KELAS</th>
          <th><center>FOTO</center></th>
          <th><center>KETERANGAN</center></th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM absen ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td> &nbsp;<?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nis']; ?></td>
          <td><?php echo $row['jk']; ?></td>
          <td><?php echo $row['kelas']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
          <td align="center">
              <button type="button" class="btn btn-success"><a href="edit_peserta.php?id=<?php echo $row['id']; ?>" class="tombol_edit">Edit</a> </button>
              <button type="button" class="btn btn-danger"><a href="proses_hapus.php?id=<?php echo $row['id']; ?>" class="tombol_hapus" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></button>
              
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <br><br><br><br>
    </div>
  </body>
</html>

<?=template_footer()?>