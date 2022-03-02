# Tugas Pertemuan 3

1. Fork Repository ini ke repository anda sendiri.
2. Setup .env agar sesuai dengan environment development anda -> database dll
3. Setup package larave/ui dengan ui bootstrap dan authentication scaffold nya (Detail ada di jobsheet);
4. Download Bootstrap 5 sample di halaman ini https://getbootstrap.com/docs/5.0/examples/ kemudian gunakan template blog untuk menampilkan tampilan welcome dengan tampilan blog tersebut.
5. Buatlah controller untuk menghandle halaman depan (route /) agar dapat menampilkan data sebagai berikut :
   1. Homepage dengan hero news title adalah : `Ini Judul Hero Post dari controller`, homepage ini diakses pada url `/`.
   2. Homepage dengan hero news desc adalah : `Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.` 
   3. Halaman detail untuk hero post ini dapat diakses detailnya melalui url `/news/hero-post-detail`, halaman ini menampilkan judul dan detail yang sama yang ada di homepage, buatkan juga controller khusus yang menghandle halaman hero post detail ini dimana controller yang mengirim data ke view.
   5. Di halaman homepage buatkan juga 2 featured news masing masing dengan judul `Ini judul featured post 1` dan `Ini judul featured post 2` dan content `ini content featured post 1 dari controller` dan `ini content featured post 2 dari controller` data dikirim dari controller homepage.
   6. Buatkan controller khusus untuk menampilkan detail dari featured news, yang memiliki route dengan variabel id di belakangnya sehingga featured news 1 dan featured news 2 dapat diakses dengan membuka url `/news/featured/1` dan `/news/featured/2`.
   7. Ada link tombol yang bertuliskan Login dan Register
6. Jika anda sudah selesai menyelesaikan tugas commit dan push ke repository yang anda dan jangan lupa melakukan pull request ke repository utama, sisipkan informasi nama dan nim pada pesan pull request [nama]-[nim].
7. Pull request akan di cek secara otomatis apakah sudah benar atau belum oleh github, dan anda baru dinyatakan mengumpulkan tugas jika semua test berhasil dijalankan dan berwarna centang ijo.

