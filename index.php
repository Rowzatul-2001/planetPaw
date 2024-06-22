<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pet Foods</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Buy Pet Food Online</span>
                </a>

                <nav class="d-inline-flex mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-light text-decoration-none btn btn-primary btn-sm" href="index.php">Back to Explore Pet Foods</a>
                    <a class="me-3 py-2 text-light text-decoration-none btn btn-primary btn-sm" href="viewCart.php">View Cart</a>
                </nav>
            </div>
        </header>
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">Pet Food Sale - Healthy Nutrition for Your Pets</h1>
            <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your Food product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">


            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 1</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Whiskas Cat Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic1.jpeg" alt="shirt" style="width:70%;height:250px;"></li>
                        <li>Price: 1000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Whiskas Cat Food">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 2</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Whiskas Cat Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic2.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1300</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Whiskas Cat Food">
                        <input type="hidden" name="price" value="1300">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 3</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Jungle Cat Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic3.jpeg" alt="pent" style="width:70%;height:250px;"></li>
                        <li>Price: 2000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Jungle Cat Food">
                        <input type="hidden" name="price" value="2000">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 4</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Truly Tuna Cat Food (Skin & Coat)</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic4.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1600</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Truly Tuna Cat Food (Skin & Coat)">
                        <input type="hidden" name="price" value="1600">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>


            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 5</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">SmartHeart Salmon Cat Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic5.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1200</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="SmartHeart Salmon Cat Food">
                        <input type="hidden" name="price" value="1200">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 6</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">KitKat Classic Cuisine Cat Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic6.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1300</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="KitKat Classic Cuisine Cat Food">
                        <input type="hidden" name="price" value="1300">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 7</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Pedigree Puppy Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic7.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1400</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Pedigree Puppy Food">
                        <input type="hidden" name="price" value="1400">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 8</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">True : Dog Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic8.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1320</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="true : Dog Food">
                        <input type="hidden" name="price" value="1320">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>


            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 9</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Jinx : Puppy Food</h4>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/pic9.jpeg" alt="shoe" style="width:70%;height:250px;"></li>
                        <li>Price: 1300</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Jinx : Puppy Food">
                        <input type="hidden" name="price" value="1300">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>


            
            </div>
        </main>
    </div>
</body>
</html>