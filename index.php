<?php include "header.php";?>
<section id="home">
    <div>
        <p>Style Destination</p>
        <h1>Find Your Perfect</h1>
        <p>Uncompromising in style, quality and performance</p>
        <a href="shop.php"><button>Shop Now</button></a>
    </div>
</section>
<section id="deals">
    <div>
        <h2>December Deals</h2>
        <p>Preorder now to receive exclusive deals & gifts</p>
    </div>
    <div>
        <a href="shirts.php">
            <p>Shirts</p>
        </a>
        <a href="trousers.php">
            <p>Trousers</p>
        </a>
        <a href="coats.php">
            <p>Coats</p>
        </a>
    </div>
</section>
<section class="items">
    <div>
        <h2>New Arrivals</h2>
        <p>Don't Miss Today's Featured Deals</p>
    </div>
    <div>
        <?php foreach($newArrivalesQuery as $q){?>
            <a href="item.php?item=<?php echo $q['itemId'];?>">
                <img src="./items/<?php echo $q['itemImage'];?>" alt="<?php echo $q['itemName'];?>">
                <p><?php echo $q['itemName'];?></p>
                <p><b><?php echo $q['itemPrice'];?></b></p>
                <form method="post">
                    <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                    <button type="submit" name="addToCart">Add To Cart</button>
                </form>
            </a>
        <?php }?>
    </div>
</section>
<?php include "footer.php";?>