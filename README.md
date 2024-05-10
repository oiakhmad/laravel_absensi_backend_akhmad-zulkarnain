# Laravel absensi backend

Noted
* php artisan route:list adalah perintah yang digunakan dalam framework Laravel untuk menampilkan daftar semua rute yang ditentukan dalam aplikasi Anda. Perintah ini sangat berguna untuk memahami struktur rute dalam aplikasi Laravel Anda. Ketika Anda mengeksekusi perintah php artisan route:list di terminal, Laravel akan menampilkan daftar semua rute bersama dengan informasi terkait, seperti nama rute, URI, metode HTTP yang diterima oleh rute tersebut, aksi yang diambil oleh rute, dan middleware yang terkait dengan rute tersebut.

* php artisan make:model model_name -m untuk membuat model dengan nama model_name. -m sekaligus untuk membuat migrationnya


* php artisan storage:link pada framework Laravel digunakan untuk membuat tautan simbolis (symbolic link) antara direktori public dengan direktori storage/app/public. Ini sangat berguna karena memungkinkan Anda untuk mengakses file yang disimpan di direktori storage melalui URL publik, yang dapat diakses oleh pengguna melalui browser.

Jadi, ketika Anda menjalankan perintah php artisan storage:link, Laravel akan membuat tautan simbolis di dalam direktori public, yang akan menunjuk ke direktori storage/app/public, sehingga file-file di dalamnya dapat diakses secara langsung melalui URL.
