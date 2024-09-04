<?php include "header.php";?>
<section id="addItems">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <label for="itemName">Item Name</label>
                <input type="text" name="itemName" id="itemName" placeholder="Enter item name" maxlength="100" minlength="2">
                <br>
                <label for="itemPrice">Item Price</label>
                <input type="text" name="itemPrice" id="itemPrice" placeholder="Enter item price">
                <br>
                <label for="itemDescription">Item Description</label>
                <textarea name="itemDescription" id="itemDescription" cols="50" rows="3" placeholder="Enter item description"></textarea>
                <br>
                <label for="itemCategory">Item Category</label>
                <select name="itemCategory" id="itemCategory">
                    <option value="Trousers">Trousers</option>
                    <option value="Shirts">Shirts</option>
                    <option value="Coats">Coats</option>
                </select>
                <br>
                <label for="itemImage">Item Image</label>
                <input type="file" name="itemImage" id="itemImage">
                <br>
                <button type="submit" name="addItem">Add Item</button>
            </form>
        </div>
    </section>
<?php include "footer.php";?>