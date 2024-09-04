<?php include "header.php";?>
<section class="items">
    <div>
        <h2>High Quality Shirts</h2>
        <p>Suite for any industry</p>
    </div>
    <div>
        <?php foreach($shirtsQuery as $q){?>
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