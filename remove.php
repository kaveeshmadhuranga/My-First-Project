<?php include "header.php";?>
<?php
    $allItems = "SELECT * FROM items";
    $allItemsQuery = mysqli_query($conn, $allItems);
?>
<section id="deleteItems">
    <div class="container">
        <?php foreach($allItemsQuery as $q){?>
            <form method="post">
                <img src="./items/<?php echo $q['itemImage'];?>" alt="<?php echo $q['itemName'];?>">
                <p><?php echo $q['itemName'];?></p>
                <p><?php echo $q['itemPrice'];?></p>
                <input type="text" name="itemId" value="<?php echo $q['itemId'];?>" hidden>
                <button type="submit" name="deleteItem">Delete Item</button>
            </form>
        <?php }?> 
    </div>
</section>
<?php include "footer.php";?>