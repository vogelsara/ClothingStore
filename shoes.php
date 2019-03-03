<?php include ('includes/header.php') ?>
<?php include ('includes/dbConnect.php') ?>

<?php
$db = new Database;

$db->query( "SELECT * FROM Products RIGHT JOIN Image ON Products.imageID = Image.imageID where categoryID  = 2");
$products = $db->resultset();
?>

<div class="mainBody">
    <div class="container">
        <div class="row landing">
            <div class="col-md-4 landing-picture" style=" background-image: url(https://www.junkyard.se/media/catalog/category/shoes.jpg);">
            </div>
            <div class="col-md-8 landing-text">
                <h2>SKOR</h2>
                <p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin.
                    Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd
                    boksättare tog att antal bokstäver och blandade dem för att göra
                    ett provexemplar av en bok. Lorem ipsum har inte bara överlevt fem århundraden</p>
            </div>
        </div>
    </div>

    <div class="container products">
        <div class="row">
            <?php foreach ($products as $shoe) {?>
                <div class="col-md-3 product">
                    <a href="product.php?id=<?php echo $shoe->productId ?>">
                    <?php echo '<img class="product-image" src="data:image/jpeg;base64,'.base64_encode( $shoe->image ).'"/>'; ?>
                    </a>
                    <div class="product-text">
                        <?php echo $shoe->name?>
                        <div class="product-price">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <?php echo $shoe->price?> kr

                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-light"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php include ('includes/footer.php') ?>
