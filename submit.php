<!DOCTYPE html>
<html>

<head>
  <title>TUGAS DASKOM HTML</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <center>
      <h1>TUGAS DASKOM HTML MATRIKULASI</h1>
    </center>
    <h1>Buku Tamu</h1>
    <form id="form-buku-tamu">
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama"><br>
      <input type="button" value="Kirim" onclick="kirimPesan()">
    </form>
    <div id="pesan"></div>
  </header>
  <div id="konten" style="display: none;">
    <h2>Matrikulasi Teknik Informatika S1 Tahun 2022</h2>
    <p>Saya pertamakali belajar HTML adalah di perkuliahan, saya dulu merasa takut sebelum mencoba membuat HTML karena
      saya pikir akan sangat susah, ternyata setelah saya mencobanya ternyata awal-awal masih mudah dan saya pun sangat
      senang belajar HTML. Pertamakali saya mencoba membuat tag-tag dan atribut untuk membuat HTML yang membuat saya
      kagum.</p>
    <h2>Daftar Materi DASKOM</h2>
    <ol>
      <li>Perkenalan</li>
      <li>List mailing Microsoft Word</li>
      <li>Microsoft Access</li>
      <li>Excel grafik</li>
      <li>Maen game Elsa dan dapat sertifikat</li>
    </ol>
    <h2>Dosen</h2>
    <ul>
      <li>Edi Faisal M.Kom</li>
    </ul>
    <img src="https://cdn-2.tstatic.net/jateng/foto/bank/images/tes-cat-cpns_20170926_085311.jpg"
      alt="Gambar tes CAT CPNS">
  </div>
  <form action="submit.php" method="post">
      <input type="submit" value="Kirim">
    </form>
    <?php
  $to = "akhmadfaizal214@gmail.com";
  $subject = "Email dari website Anda";
  $message = "Ini adalah email yang dikirim dari website Anda";
  $header = "From: noreply@example.com";
 
  // kirim email
  if (mail($to, $subject, $message, $header)) {
    echo "Email berhasil dikirim";
  } else {
    echo "Email gagal dikirim";
  }
?>


  <footer>
    Nama: Akhmad Faizal | NIM: A11.2022.14534 | Kelompok: A11.4114
  </footer>
  <script>
    function kirimPesan() {
      // ambil nilai/value dari form
      var nama = document.getElementById('nama').value;


      if (nama !== "") {
        document.getElementById('pesan').innerHTML = 'Halo ' + nama + ', ini web saya';
        document.getElementById('konten').style.display = "block";
      } else {
        document.getElementById('pesan').innerHTML = 'Nama harus diisi!';
        document.getElementById('konten').style.display = "none";
      }
    }
  </script>
</body>

</html>