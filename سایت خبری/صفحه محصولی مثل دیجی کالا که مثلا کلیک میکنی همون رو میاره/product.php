<?php

$connection = new PDO("mysql:host=localhost;dbname=aref", 'root', '' );
$page = 4;
$per_page = 1;
$offset = ( $page - 1 ) * $per_page;
$id         = $_GET['id'];
$sql        = "SELECT * FROM aref WHERE id = $id";
$products   = $connection->query( $sql );
echo '<div class="products">';
while( $prodcut = $products->fetchObject() ){
    ?>
    <div class="product">
        <img src="<?php echo $prodcut->image;?>" alt="">
        <h1><?php echo $prodcut->title;?></h1>
        <footer>
        <del><?php echo number_format( $prodcut->price );?></del>
        <ins><?php echo number_format( $prodcut->sale_price );?></ins>
        <span><?php echo round( ( $prodcut->price - $prodcut->sale_price ) / $prodcut->price * 100 )?>%</span>
        </footer>
    </div>
    <?php
}

echo '</div>';
?>
<style>
    .products {
    width: 880px;
    margin: auto;
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(3,1fr);
}

.products img {
    width: 100%;
    border-radius: 8px 8px 0 0;
}

.products {
    margin-top: 24px;
}

body {
    background: #cdcdcd;
}

.product {
    background: #FFF;
    border-radius: 8px;
}

.product h1 {
    margin: 5px;
    text-align: center;
}

.product footer {
    padding: 15px;
    text-align: center;
}

.product del {
    color: red;
}

.product ins {
    color: green;
    text-decoration: none;
}

.product span {
    background: red;
    padding: 5px;
    border-radius: 0 8px 8px 8px;
    color: #FFF;
}
</style>