# Jobsheet 2 : ROUTING, CONTROLLER, dan View

> Nama : Syahrul Bhudi Ferdiansyah
> Kelas : TI-2F
> NIM : 2241720167

## Basic Routing

-   Route /hello
    ![alt text](./public/screenshot/image1.png)
    Hasil
    ![alt text](./public/screenshot/image-1.png)
    > Disini kita melakukan Routing ke path /hello yang akan menampilkan 'Hello World'. Hal ini dikarenakan kita menulis sintaks Route laravel dengan path /hello dan mereturn nilainya secara langsung yang mana adalah 'Hello World'
-   Route /world
    ![alt text](./public/screenshot/world.png)
    Hasil
    ![alt text](./public/screenshot/world-1.png)
    > Hasilnya sama seperti pada /hello tapi kali ini menggunakan path route /world yang berisi nilai 'World'
-   Route /
    ![alt text](./public/screenshot/base.png)
    Hasil
    ![alt text](./public/screenshot/base-1.png)
-   Route /about
    ![alt text](./public/screenshot/about.png)
    Hasil
    ![alt text](./public/screenshot/about1.png)

## Route Parameters

-   Route /user/{name}
    ![alt text](./public/screenshot/name.png)
    Hasil
    ![alt text](./public/screenshot/nama1.png)
    > Halaman yang muncul adalah halaman nama saya. Hal ini dikarenakan Route menerima parameter name yang di ambil dari url yang ditulis oleh user
-   Route /posts/{post}/comments/{comment}
    ![alt text](./public/screenshot/2par.png)
    Hasil
    ![alt text](./public/screenshot/2par1.png)
    > Hasilnya adalah parameter dalam url tidak hanya 1 berhasil diambil dan ditampilkan ke halaman web
-   Route /articles/{id}
    ![alt text](./public/screenshot/parid.png)
    Hasil
    ![alt text](./public/screenshot/parid1.png)

## Optional Parameters

-   Route /user/{name?}
    ![alt text](./public/screenshot/opt.png)
    Hasil
    ![alt text](./public/screenshot/opt1.png)
    > Hasilnya adalah tidak ada nama atau tidak ditampilkan. Hal ini dikarenakan menggunakan tanda ? pada akhir {name?} yang mengakibatkan parameter boleh untuk diisi atau tidak diisi dan juga penambahan name = null pada parameter callback untuk menangani ketika tidak ada nilai yang ditangkap jika tidak name = null maka akan mengakibatkan error
    > ![alt text](./public/screenshot/err.png)
-   Route /user/{name?}', function ($name = 'John)
    ![alt text](./public/screenshot/john.png)
    Hasil
    ![alt text](./public/screenshot/john1.png)
    >Hasil dari pengubahan tersebut adalah nilai default dari parameter name berubah menjadi John. Jadi ketika url parameter dikosongi maka callback akan langsung meneruskan $name sebagai john
- Route Name

