<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "prasadFashion");
    if (!$conn) {
        echo "Unable to stablish a database connection";
    }

    if(isset($_POST['userLogout'])){
        session_destroy();
        header('Location:?info=success');
    }
    
    $newArrivales = "SELECT * FROM items ORDER BY itemAddedDate DESC LIMIT 8";
    $newArrivalesQuery = mysqli_query($conn, $newArrivales);
    
    $latestArrivales = "SELECT * FROM items ORDER BY itemAddedDate DESC LIMIT 32";
    $latestArrivalesQuery = mysqli_query($conn, $latestArrivales);
    

    $trousers = "SELECT * FROM items WHERE itemCategory = 'trousers'";
    $trousersQuery = mysqli_query($conn, $trousers);
    
    $shirts = "SELECT * FROM items WHERE itemCategory = 'shirts'";
    $shirtsQuery = mysqli_query($conn, $shirts);
    
    $coats = "SELECT * FROM items WHERE itemCategory = 'coats'";
    $coatsQuery = mysqli_query($conn, $coats);

    if(isset($_POST['addItem'])){
        $itemName = $_REQUEST['itemName'];
        $itemCategory = $_REQUEST['itemCategory'];
        $itemDescription = $_REQUEST['itemDescription'];
        $itemPrice = $_REQUEST['itemPrice'];
        $itemImage = $_FILES['itemImage']["name"];
        $tempname = $_FILES["itemImage"]["tmp_name"];
        $folder = "./items/" . $itemImage;

        if (move_uploaded_file($tempname, $folder)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image!";
        }
    
        $sql = "INSERT INTO items (itemName, itemCategory, itemDescription, itemPrice, itemImage) VALUES ('$itemName', '$itemCategory', '$itemDescription', $itemPrice, '$itemImage')";
        if (mysqli_query($conn, $sql)) {
            echo "Your item has been successfully added";
            header('Location:?info=success');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    if(isset($_POST['deleteItem'])){
        $itemId = $_REQUEST['itemId'];
        $sql = "DELETE FROM items WHERE itemId = $itemId";
        if (mysqli_query($conn, $sql)) {
            echo "Item has been deleted successfully";
            header('Location:?info=success');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    if(isset($_POST['userRegister'])){
        $userName = $_REQUEST['userName'];
        $userEmail = $_REQUEST['userEmail'];
        $userPassword = $_REQUEST['userPassword'];
        $userPhoneNumber = $_REQUEST['userPhoneNumber']; 
        $userAddress = $_REQUEST['userAddress'];
        $sql = "INSERT INTO users (userName, userEmail, userPassword, userPhoneNumber, userAddress) VALUES ('$userName', '$userEmail', '$userPassword', '$userPhoneNumber', '$userAddress')";
        if (mysqli_query($conn, $sql)) {
            echo "Your account has been created successfully";
            header('Location:login.php?registration=success');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    if(isset($_POST['userLogin'])){
        $userEmail = $_REQUEST['userEmailLogin'];
        $userPassword = $_REQUEST['userPasswordLogin'];
        if ($userEmail != "" && $userPassword != ""){
            $sql = "SELECT count(*) as loggedUser FROM users WHERE userEmail='".$userEmail."' and userPassword='".$userPassword."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $count = $row['loggedUser'];
            if($count > 0){
                $_SESSION['userEmail'] = $userEmail;
                header('Location:index.php?login=success');
            }else{
                header('Location:?login=invalid');
            }
        }else{
            header('Location:?info=invalid');
        }
    }
    if(isset($_SESSION['userEmail'])){
        $sql = "SELECT * FROM users WHERE userEmail = '".$_SESSION['userEmail']."'";
        $loggedUserResult = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($loggedUserResult)){
            $userName = $row['userName'];
            $userEmail = $row['userEmail'];
            $userPhoneNumber = $row['userPhoneNumber'];
            $userAddress = $row['userAddress'];
        }
    }

    if(isset($_REQUEST['item'])){
        $itemId = $_REQUEST['item'];
        $sql = "SELECT * FROM items WHERE itemId = $itemId";
        $viewItemQuery = mysqli_query($conn, $sql);
    }

    if(isset($_SESSION['userEmail'])){
        $cart = "SELECT cart.*, items.* FROM cart, items WHERE cart.userEmail = '".$userEmail."' AND items.itemId = cart.itemId";
        $cartQuery = mysqli_query($conn, $cart);
    }

    if(isset($_REQUEST['addToCart'])){
        if(isset($_SESSION['userEmail'])){
            $itemId = $_REQUEST['itemId'];
            $sql = "INSERT INTO cart (userEmail, itemId, cartAmount) VALUES ('$userEmail', $itemId, 1)";
            if (mysqli_query($conn, $sql)) {
                echo "Item has been added successfully";
                header('Location:cart.php?cart=success');
            }else{
                echo "Error:" . $sql . " " . mysqli_error($conn);
            }
        }else{
            header('Location:index.php?info=registerFirst');
        }
    }

    if(isset($_REQUEST['cartIncrease'])){
        $itemId = $_REQUEST['itemId'];
        $cartAmount = $_REQUEST['cartAmount'];
        $sql = "UPDATE cart SET cartAmount = $cartAmount + 1 WHERE itemId = '".$itemId."'";
        if (mysqli_query($conn, $sql)) {
            echo "Success";
            header('Location:cart.php?cart=Increased');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
    }

    if(isset($_REQUEST['cartDecrease'])){
        $itemId = $_REQUEST['itemId'];
        $cartAmount = $_REQUEST['cartAmount'];
        $sql = "UPDATE cart SET cartAmount = $cartAmount - 1 WHERE itemId = '".$itemId."'";
        if (mysqli_query($conn, $sql)) {
            echo "Success";
            header('Location:cart.php?cart=Decreased');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
    }
    
    if(isset($_REQUEST['cartRemove'])){
        $itemId = $_REQUEST['itemId'];
        $sql = "DELETE FROM cart WHERE itemId = '".$itemId."'";
        if (mysqli_query($conn, $sql)) {
            echo "Success";
            header('Location:cart.php?cart=Removed');
        }else{
            echo "Error:" . $sql . " " . mysqli_error($conn);
        }
    }
    
    if(isset($_REQUEST['search'])){
        $keyword = $_REQUEST['keyword'];
        $sql = "SELECT * FROM items WHERE LOCATE('{$keyword}', `itemName`) > 0";
        $searchedQuery = mysqli_query($conn, $sql);
    }else{
        $sql = "SELECT * FROM items WHERE itemId = 0";
        $searchedQuery = mysqli_query($conn, $sql);
    }
?>