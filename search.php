<?php include "header.php";?>
<section class="items">
    <h3>
        <form method="post">
            <input type="text" name="keyword" id="searchBox" placeholder="Search here...">
            <button type="submit" name="search">Search</button>
        </form>
    </h3>
    <div id="searchSection">
        <?php foreach($searchedQuery as $q){?>
            <a href="item.php?id=<?php echo $q['itemId'];?>">
                <img src="./items/<?php echo $q['itemImage'];?>" alt="<?php echo $q['itemName'];?>">
                <h4><?php echo $q['itemName'];?></h4>
                <p><?php echo $q['itemPrice'];?> LKR</p>
                <form method="post">
                    <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                    <button type="submit" name="addToCart">Add to cart</button>
                </form>
            </a>
        <?php }?>
    </div>
</section>
<?php include "footer.php";?>