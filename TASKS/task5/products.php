<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row">
        <?php
        $jsonData = file_get_contents('products.json');
        $products = json_decode($jsonData, true);
        
        if ($products): 
            foreach ($products as $productName => $values):
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="images/<?php echo $values['img']; ?>" class="card-img-top" alt="<?php echo $productName; ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo $productName; ?></h5>
                            <p class="card-text text-muted"><?php echo $values['desc']; ?></p>
                            <h6 class="mt-auto text-primary font-weight-bold"><?php echo $values['price']; ?> EGP</h6>
                            <button class="btn btn-dark btn-sm mt-2">Add to Cart</button>
                        </div>
                    </div>
                </div>
        <?php 
            endforeach;
        else:
            echo "<div class='col-12'><div class='alert alert-danger'>No products found or error reading data.</div></div>";
        endif;
        ?>
    </div>
</div>

</body>
</html>