<?php
    $length = 32; // Length of the unique ID in bytes (adjust as needed)
    $uniqueId = bin2hex(random_bytes($length));
    $length = 32; // Length of the unique ID in bytes (adjust as needed)

// Set a cookie with the unique ID
setcookie('my_unique_id', $uniqueId, time() + 3600, '/'); // Expires in 1 hour
    
?>



<h1>Payment summery</h1>
<?php
// print_r($_GET['cart']);


$jsonString = $_GET['cart'];
print_r($jsonString);

// Decode the JSON string into a PHP array

$data = json_decode($jsonString, true);

// Access individual elements
foreach ($data as $item) {
    if (isset($item['name'])) {
        echo 'Name: ' . $item['name'] . '<br>';
    }
    if (isset($item['price'])) {
        echo 'Price: ' . $item['price'] . '<br>';
    }
    if (isset($item['count'])) {
        echo 'Count: ' . $item['count'] . '<br>';
    }
    if (isset($item['total'])) {
        $total=$item['total'];
        echo 'Total: ' . $item['total'] . '<br>';
    }
    echo '<br>';
}


?>

<h1>Choose a payment method</h1>

<form method="post">
<button type="submit" name="generate">Cash</button>
</form>
<!-- <button onclick="generate()">Cash</button> -->
<button onclick="card()">Card</button>

<div id='qr'>

</div>


<?php
    $insert_id=0;
    if(isset($_POST['generate'])){

        $this->Payment_model->insert_payment();
        $insert_id = $this->db->insert_id();

        echo "Last inserted ID is: " . $insert_id;
        $user_id = $this->session->userdata('user_id');
            
        // Create an array from the JSON string
        $dataArray = json_decode($jsonString, true);
        
        // Add the user_id to the data array
        $dataArray[] = ["user" => $user_id];

        $dataArray[] = ["payment_id" => $insert_id];

        // print_r($dataArray); 
        
        // Convert the updated array back to JSON
        $jsonResult = json_encode($dataArray);
        echo "
				// 		<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$jsonResult&choe=UTF-8'>
				// 	";
                ?>
        <script>
            var id = <?php echo $insert_id; ?>; // Assuming $insert_id is set before

// Check payment and verification status every 3 seconds
var intervalId = setInterval(function() {
    fetch(window.location.origin + `/designproject/assets/js/check_payment_verified.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            if (data.payment==1 && data.verified==1) {
                clearInterval(intervalId); // Stop the interval when conditions are met
                console.log(data.payment);

                window.location.href = '<?php echo base_url("Thankyou"); ?>';
                // Submit the form
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
}, 3000);
            </script>
                <?php

    }
?>
<script>

    function card(){
        // function card() {
        //     var xhr = new XMLHttpRequest();
        //     xhr.open("GET", window.location.origin + "/designproject/assets/js/insert_payment.php", true);

        //     xhr.onreadystatechange = function() {
        //         if (xhr.readyState === 4 && xhr.status === 200) {
        //             // When the AJAX request is complete, submit the form

        //             document.getElementById('form').submit();
        //         }
        //     };

        //     xhr.send(); // Send the AJAX request to insert_payment.php
        // }

        document.getElementById('form').submit();
        // window.location.replace("Payment?cart="+JSON.stringify(cart));

    }
    // function cash(){
    //     console.log(window.location.origin);
    //     setInterval(function() {
    //         // Your ID to be sent in the request
    //         var id = <?php echo $insert_id; ?>; // Use PHP to echo the ID into JavaScript
            
    //         // Make an AJAX call to check if payment and verified are true
    //         fetch(window.location.origin + `/designproject/assets/js/check_payment_verified.php?id=${id}`)
    //           .then(response => response.json())
    //           .then(data => {
    //             if (data.payment && data.verified) {
    //               // If both payment and verified are true, redirect to another page
    //               window.location.href = '<?php echo base_url("thankyou"); ?>';
    //             //   window.location.href = window.location.origin+"another_page.php";
    //             }
    //           })
    //           .catch(error => {
    //             console.error("Error:", error);
    //           });
    //       }, 3000); // Check every 3 seconds
    // }



//     function cash() {
//     console.log(window.location.origin);
//     var id = <?php echo $insert_id; ?>; // Assuming $insert_id is set before

//     // Check payment and verification status every 3 seconds
//     var intervalId = setInterval(function() {
//         fetch(window.location.origin + `/designproject/assets/js/check_payment_verified.php?id=${id}`)
//             .then(response => response.json())
//             .then(data => {
//                 if (data.payment && data.verified) {
//                     clearInterval(intervalId); // Stop the interval when conditions are met
//                     window.location.href = window.location.origin+"another_page.php";
//                     // Submit the form
//                 }
//             })
//             .catch(error => {
//                 console.error("Error:", error);
//             });
//     }, 3000);
// }



    </script>
     <script>
        
          
        </script>



<?php
    $hash = strtoupper(
        md5(
            '1224188' . 
            '12345'. 
            number_format($total, 2, '.', '') . 
            'LKR'.  
            strtoupper(md5('NDAzMTg5MTU4MzEzOTk5NzgwNDAyMzY5MTc5NDk4MTczOTU3MTMzNg==')) 
        ) 
    );
?>

<html>
<body>
<form method="post" action="https://sandbox.payhere.lk/pay/checkout" id="form">   
    <input type="hidden" name="merchant_id" value="1224188">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/designproject/Thankyou">
    <input type="hidden" name="cancel_url" value="http://localhost/payhere/cancel.php">
    <input type="hidden" name="notify_url" value="https://illyrian-bead.000webhostapp.com/notify.php">  
    </br></br>Item Details</br>
    <input type="text" name="order_id" value="12345">
    <input type="text" name="items" value="">
    <input type="text" name="currency" value="LKR">
    <input type="text" name="amount" value="<?php echo $total?>">  
    </br></br>Customer Details</br>
    <input type="text" name="first_name" value="Saman">
    <input type="text" name="last_name" value="Perera">
    <input type="text" name="email" value="samanp@gmail.com">
    <input type="text" name="phone" value="0771234567">
    <input type="text" name="address" value="No.1, Galle Road">
    <input type="text" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka">
    <input type="text" name="custom_1" value='ddgegg'>custome
    <input type="hidden" name="hash" value="<?php echo $hash;?>">    <!-- Replace with generated hash -->
    <input type="submit" value="Buy Now">   
</form> 
</body>
</html>
