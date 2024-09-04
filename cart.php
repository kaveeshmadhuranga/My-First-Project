<?php include "header.php";?>
    <section id="cart">
        <div class="container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>1x Price</th>
                    <th>Quentity</th>
                    <th>Amount</th>
                    <th>Process</th>
                </tr>
                <?php foreach($cartQuery as $q){?>
                    <tr>
                        <td><?php echo $q['itemName'];?></td>
                        <td><img src="./items/<?php echo $q['itemImage'];?>" alt="<?php echo $q['itemName'];?>"></td>
                        <td><?php echo $q['itemPrice'];?>LKR</td>
                        <td>
                            <form method="post">
                                <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                                <input type="text" name="cartAmount" hidden value="<?php echo $q['cartAmount'];?>">
                                <button type="submit" name="cartDecrease">-</button>
                            </form>
                            &nbsp;
                            <?php echo $q['cartAmount'];?>
                            &nbsp;
                            <form method="post">
                                <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                                <input type="text" name="cartAmount" hidden value="<?php echo $q['cartAmount'];?>">
                                <button type="submit" name="cartIncrease">+</button>
                            </form>
                        </td>
                        <td><?php echo $q['cartAmount'] * $q['itemPrice'];?>LKR</td>
                        <td class="action">
                            <form method="post">
                                <input type="text" name="itemId" hidden value="<?php echo $q['itemId'];?>">
                                <button type="submit" name="cartRemove" class="outline">Remove</button>
                                <button type="button" name="cartBuy" onclick="alert('Your order has been placed. Thank you for choosing us!')">Buy</button>
                            </form>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </section>
<?php include "footer.php";?>