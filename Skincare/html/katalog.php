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