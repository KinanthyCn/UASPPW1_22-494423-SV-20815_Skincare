# UASPPW1_22-494423-SV-20815_Kinanthy Cahyaningrum
## Coki's Beauty

Coki's Beauty adalah perusahaan kosmetik yang didirikan dengan tujuan untuk mempermudah masyarakat dalam mendapatkan akses untuk membeli berbagai produk kecantikan yang aman dan terpercaya.
Website Coki's beauty berguna untuk melihat ketersediaan dan jenis produk kosmetik yang dimiliki oleh perusahaan tersebut, sehingga user dapat melakukan pengecekan produk terlebih dahulu sebelum melakukan pembelian. Selain itu, user juga dapat melihat review customer lain mengenai product, sehingga user dapat memmbantu user mempertimbangkan produk mana yang akan dipilih.

## Requirement
#### Desain Rapi 
konsistensi : Desain website ini menggunakan perpaduan warna pink, hitam, dan putih. Pemilihan warna pink dikarenakan warna pink melambangkan Kecantikan dan keanggunan. Pink sering diasosiasikan dengan kecantikan, Selain itu untuk mencerminkan kesan yang halus dan feminin. 
Sedangkan warna hitam melambangkan Elegan, mewah, daya tarik dan ketegasan. Lalu, warna putih digunakan untuk melambangkan Kesucian, kesegaran, dan kebersihan. 

``` ruby 

    :root{                   
    --white: #f0f0f0;
    --black: #110101;
    --pink : #FFC0CB; 
    }
  
   ```
   
![Screenshot (568)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/6ab8148b-07b4-4ec7-a481-5eae227a816e)
![Screenshot (570)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/4b58b5e1-68da-469a-9108-1d63061f3a8e)




   
  Font yang digunakan di dalam pembuatan website ini adalah font Righteous  dikarenakan memiliki keterbacaan yang Baik. Selain itu, saya menggunakan salah satu jenis font sans serif, yaitu font opem sans. Pemilihan Font tersebut dikarenakan font Open Sans memiliki beberapa kelebihan, yaitu : 
  
  - Keterbacaan: Open Sans dirancang dengan keterbacaan yang baik. Bentuk hurufnya jelas dan mudah dibaca baik dalam ukuran kecil maupun besar. Kelebihan ini membuatnya sangat cocok digunakan di berbagai medium, seperti cetakan dan tampilan digital.
  - Kecocokan dengan berbagai gaya desain: Open Sans memiliki desain yang netral dan serbaguna, membuatnya cocok digunakan dalam berbagai gaya desain. Font ini dapat beradaptasi dengan baik pada desain minimalis, modern, maupun klasik.

``` ruby 

    body {
    color: #666666;
    font-size: 14px;
    line-height: 1.80857;
    font-weight: normal;
    overflow-x: hidden;
    font-family: 'Open Sans', sans-serif;
}
  
   ```
   
 #### Responsive 
 Website ini sudah dilakukan uji tampilan untuk laptop, tablet, dan mobile hingga lebar window mencapai 400 dan semua fitur terlihat baik-baik saja atau tidak ada masalah. 
 
 ``` ruby 
 @media screen and (max-width: 450px) {
    .sidenav {
        padding-top: 15px;
        background-color: rgb(0, 0, 0, 0.9);
    }
    .sidenav a {
        font-size: 18px;
    }
}
 ```
Secara keseluruhan, kode tersebut mengubah gaya tampilan elemen-elemen dengan kelas "sidenav" dan elemen-elemen <a> di dalamnya ketika lebar tampilan layar mencapai atau kurang dari 450 piksel. Hal ini memungkinkan penyesuaian tampilan yang lebih baik untuk perangkat dengan layar kecil, seperti ponsel atau tablet dengan lebar tampilan yang sempit.


![Screenshot (578)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/def99804-89ed-4079-8f5b-93fc8ee94ef8)

![Screenshot (579)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/8fd0496e-89a3-4a5b-bee7-e479d781d189)


![Screenshot (575)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/0e47c999-ada8-49e7-a043-0b6bde67deb3)




#### Direct Feedback 
Website ini memiliki beberapa direct feedback seperti jika mengklik beberapa icon tertentu, menu navbar yang dapat menunjukan posisi sekarang ada di halaman apa, step step yang dapat dibuka ataupun ditutup (melihat detail produk), dan form yang dapat diisi oleh customer website.

![Screenshot (590)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/a75bd83f-18aa-466d-8c9f-6bda734973d8)


``` ruby 

<script>
    window.onload = function() {
        var readButtons = document.querySelectorAll('.read_bt'); // Mengambil semua elemen dengan kelas "read_bt"
        readButtons.forEach(function(button) {
            button.onclick = function() {
                alert('Hallo, enjoy your shopping in our website!');
            };
        });
    };
</script>

 ```
 
![Screenshot (591)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/2892a525-e66a-4984-bc71-1dd3dd5dec5a)


 
 ``` ruby 

function toggleShowDesk(id) {
    var shortDesk = document.getElementById("shortdesk-" + id);
    shortDesk.style.display = 'block';
    var tombol = document.getElementById("tombol-" + id);
    tombol.onclick = function() {
        toggleHideDesk(id);
    };
}   

function toggleHideDesk(id) {
    var shortDesk = document.getElementById("shortdesk-" + id);
    shortDesk.style.display = 'none';
    var tombol = document.getElementById("tombol-" + id);
    tombol.onclick = function() {
        toggleShowDesk(id);
    };
}
    

 ```
 
![Screenshot (593)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/3b117aab-a566-4c83-b139-801733dacf4d)

![Screenshot (594)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/b07460b2-3f93-4f04-9d28-96b54ba16681)



``` ruby

<div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_taital">Get In Touch</h1>
                  <p class="contact_text">You may call our Customer Service hotline at 03-27779222. The Customer Service hotline is available from 8 am to 7 pm on Mondays to Sundays (including public holidays).</p>
               </div>
               <div class="col-md-6">
                  <div class="contact_main">
                     <div class="contact_bt"><a onclick="showContact()" href="#!">Contact Form</a></div>
                  </div>
               </div>
            </div>
            
            <div class="form" id="form">
            </div>
         </div>
         
```


#### Konten Dinamis Dari Database 
Pengimplementasian database pada sebuah web dapat dilakukan pada berbagai bagian. Salah satunya adalah dengan menampilkan tabel database pada website. 
Yang saya lakukan adalah membuat koneksi dengan cara sesuai panduan dari modul. Kemudian saya membuat tabel Katalog yang menunjukkan nama brand, produk, harga dll. 



``` ruby
<?php
    include "../php/conn.php"; 

    $sql = "select Id, nama_produk,nama_brand, url_gambar, quantity_stock, harga, des_short FROM katalog ";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $kin ) {
        $id = $kin['Id'];
        $produk = $kin['nama_produk'];
        $brand = $kin['nama_brand'];
        $gambar = $kin['url_gambar'];
        $stock = $kin['quantity_stock'];
        $price = $kin['harga'];
        $des = $kin['des_short'];


        if (strlen($produk) > 40) {
            $produk = substr($produk, 0, 40);
        }
        echo '
            <div class="col-lg-3 col-sm-6"> 
                <div class="product_box">
                <h4 class="produk_style">'. $produk.' </h4>
                <h4 class="brand_style">'. $brand .'</h4>
                <img src="'. $gambar .'" 
                    class="gambar">
                <div class="stock">Stock : '. $stock .'</div>
                <h3 class="harga">Rp'. $price .'</h3>
                <div class="btn_main">
                    <button class="buy_now" onclick="showAlert()">Buy Now</button>
                    <button class="view_d" onclick="toggleShowDesk(\''. $id .'\')" id="tombol-'. $id .'">View Details</button>
                </div>
                <div class="show_view_details">
                    <div class="shordes_container" id="shortdesk-'. $id  .'" style="display: none;">
                        <p class="shortdes">
                            '. $des  .'
                        </p>
                    </div>
                </div>
                </div>
            </div>
        
        ';
        
    }
    

?>

 ```
 
![Screenshot (597)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/99e817e7-d695-4a82-b488-11ea1d624816)

 
 
 Selain itu, pada tampilan review customer, saya menggunakan PHP. Di mana saya membuat tabel data customer yang berisi nama, serta ulasan. 
 
``` ruby
 <?php
include '../php/conn.php';

$sql = " SELECT Name, Ulasan FROM customer; ";
$result = mysqli_query($conn, $sql);

foreach ($result as $shil ) {
    $name = $shil ['Name'];
    $ulasan = $shil ['Ulasan'];

    echo '
    <div class="carousel-item">
    <div class="client_section_2">
       <div class="client_main">
          <div class="client_left">
             <div class="client_img"><img src="images/Ashila.jpeg"></div>
          </div>
          <div class="client_right">
             <h3 class="name_text">'. $name .' </h3>
             <p class="dolor_text">'. $ulasan .'  </p>
          </div>
       </div>
    </div>
    </div>
    
    ';
} 

mysqli_close($conn);

?>

```

![Screenshot (575)](https://github.com/KinanthyCn/UASPPW1_22-494423-SV-20815_Skincare/assets/126531008/d9bbd8c8-8f96-4484-8421-882aad1fc0df)






 
