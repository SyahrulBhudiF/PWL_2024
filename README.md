# Jobsheet 2 : ROUTING, CONTROLLER, dan View

> Nama : Syahrul Bhudi Ferdiansyah

> Kelas : TI-2F

> NIM : 2241720167

## Basic Routing

-   Route /hello<br>
    ![alt text](./public/screenshot/image1.png)<br>
    Hasil <br>
    ![alt text](./public/screenshot/image-1.png)<br>
    > Disini kita melakukan Routing ke path /hello yang akan menampilkan 'Hello World'. Hal ini dikarenakan kita menulis sintaks Route laravel dengan path /hello dan mereturn nilainya secara langsung yang mana adalah 'Hello World'
-   Route /world<br>
    ![alt text](./public/screenshot/world.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/world-1.png)<br>
    > Hasilnya sama seperti pada /hello tapi kali ini menggunakan path route /world yang berisi nilai 'World'
-   Route /<br>
    ![alt text](./public/screenshot/base.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/base-1.png)<br>
-   Route /about<br>
    ![alt text](./public/screenshot/about.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/about1.png)<br>

## Route Parameters

-   Route /user/{name}<br>
    ![alt text](./public/screenshot/name.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/nama1.png)<br>
    > Halaman yang muncul adalah halaman nama saya. Hal ini dikarenakan Route menerima parameter name yang di ambil dari url yang ditulis oleh user
-   Route /posts/{post}/comments/{comment}<br>
    ![alt text](./public/screenshot/2par.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/2par1.png)<br>
    > Hasilnya adalah parameter dalam url tidak hanya 1 berhasil diambil dan ditampilkan ke halaman web
-   Route /articles/{id}<br>
    ![alt text](./public/screenshot/parid.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/parid1.png)<br>

## Optional Parameters

-   Route /user/{name?}<br>
    ![alt text](./public/screenshot/opt.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/opt1.png)<br>
    > Hasilnya adalah tidak ada nama atau tidak ditampilkan. Hal ini dikarenakan menggunakan tanda ? pada akhir {name?} yang mengakibatkan parameter boleh untuk diisi atau tidak diisi dan juga penambahan name = null pada parameter callback untuk menangani ketika tidak ada nilai yang ditangkap jika tidak name = null maka akan mengakibatkan error
    > ![alt text](./public/screenshot/err.png)<br>
-   Route /user/{name?}', function ($name = 'John)<br>
    ![alt text](./public/screenshot/john.png)<br>
    Hasil<br>
    ![alt text](./public/screenshot/john1.png)
    > Hasil dari pengubahan tersebut adalah nilai default dari parameter name berubah menjadi John. Jadi ketika url parameter dikosongi maka callback akan langsung meneruskan $name sebagai john
-   Route Name<br> 
    ![alt text](./public/screenshot/nama.png)<br>
    Hasil
    ![alt text](./public/screenshot/nama2.png)
    > Langkah diatas, merupakan code yang kurang benar pada laravel untuk
    > memakai route name, karna route name di pakai untuk mensederhanakan url yang dikira
    > Panjang untuk digunakan redirect atau untuk dipakai di fungsi route lain, berikut merupakan
    > contoh kode yang benar untuk memakai route name:<br>
    > ![alt text](./public/screenshot/cor.png)<br>
    > ![alt text](./public/screenshot/cor1.png)<br>Seperti pada kode diatas, bila kita memanggil Url ’/test’, bukan membuka Url tersebut,
    > melainkan kita bisa me-redirect untuk membuka Url dari route name kita seperti diatas

