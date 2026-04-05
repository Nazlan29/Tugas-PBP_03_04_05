1. tugas_03_pbp
    Script ini bertujuan untuk mengolah data berupa daftar rank dalam sebuah array.
1) script menyimpan beberapa nama rank (seperti warrior, elite, sampai mythical immortal) ke dalam sebuah daftar.
2) script menghitung jumlah seluruh data dalam daftar tersebut, sehingga diketahui totalnya ada 10 rank.
3) script mengambil salah satu rank, yaitu urutan ke-8 dalam daftar, yang isinya "mythical honor".
4) dari teks "mythical honor" tersebut, script mengambil sebagian kata, yaitu bagian belakangnya saja, sehingga menghasilkan kata "honor".

Terakhir, script menampilkan:
jumlah data (10)
nama rank yang diambil (mythical honor)
hasil potongan kata (honor)

2. tugas_04_pbp

Script ini bertujuan untuk menghubungkan ke database dan mengupdate data melalui terminal (CLI).

1), script melakukan koneksi ke database dengan menggunakan:
  host (alamat server, biasanya localhost)
  username (root)
  password (kosong)
  nama database (db_bukutamu)

  Jika koneksi gagal, maka program langsung berhenti dan menampilkan pesan error.

2), script mengambil input dari pengguna melalui terminal, yaitu:
  id data yang ingin diubah
  nama baru yang akan menggantikan data lama

3), script membuat perintah untuk mengupdate data pada tabel tamu, yaitu mengganti nama berdasarkan id yang dimasukkan.

4), perintah update tersebut dijalankan ke database:
jika berhasil, akan muncul pesan bahwa data berhasil diupdate
jika gagal, akan muncul pesan error

3. tugas_05_pbp
4. Menjalankan PHP dengan XAMPP
PHP harus dijalankan melalui web server. Salah satu cara termudah adalah menggunakan XAMPP.

 Langkah-langkah:
1. Install dan buka XAMPP, lalu jalankan Apache dan mysql hingga hijau.
2. Simpan file PHP yang telah di buat di folder `C:\xampp\htdocs\`.
3. Buka browser dan akses `http://localhost/namafile.php`.

Kesimpulan:
XAMPP memudahkan menjalankan PHP secara lokal karena sudah menyediakan server dan database.
