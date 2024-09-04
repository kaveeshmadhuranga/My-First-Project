<?php include "header.php";?>
<section id="viewItems">
    <div class="container">
        <?php foreach($viewItemQuery as $q){?>
            <img src="./items/<?php echo $q['itemImage'];?>" alt="<?php echo $q['itemName'];?>">
            <div>
                <h2><?php echo $q['itemName'];?></h2>
                <h3><?php echo $q['itemPrice'];?>LKR</h3>
                <form method="post">
                    <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                    <button type="submit" name="addToCart">Add to cart</button>
                </form>
                <p>Category: <?php echo $q['itemCategory'];?></p>
                <p>Updated: <?php echo $q['itemAddedDate'];?></p>
                <p>Description: <?php echo $q['itemDescription'];?></p>
            </div>
        <?php }?>
    </div>
</section>
<?php include "footer.php";?>