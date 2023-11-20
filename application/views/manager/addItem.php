<?php
    $enableButton=false;
	$base_url = base_url();
?>
<script>
	var baseUrl = "<?php echo $base_url; ?>";
	console.log(baseUrl);
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center"></h1>
	<div class="row">
		<div class="col-sm-3 col-sm-offset-3">
		<form action="" method="POST" enctype="multipart/form-data" id='addItems'>
        
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" ><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" ><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" ></textarea><br><br>

        <label for="discount">Discount (%):</label>
        <input type="number" id="discount" name="discount" min="0" max="100"><br><br>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <button type="submit" name="generate">Generate</button>
        <button type="submit" name="submit" id="saveButton" disabled>Save data</button>
    </form>
		</div>
		<div class="col-sm-3">
			<?php
				if(isset($_POST['generate'])){
					// Get all the values from the form
					$item_name = $_POST['item_name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$discount = $_POST['discount'];
					$image_path=$_FILES['image']['name'];
					$data = array(
						'item_name' => $item_name,
						'price' => $price,
						'description' => $description,
						'discount' => $discount,
						'image' => $image_path
					);

					$json_data = json_encode($data);

					echo "
				// 		<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$json_data&choe=UTF-8'>
				// 	";
                echo "<script>
                var saveButton = document.getElementById('saveButton');
                saveButton.disabled = false;
                document.querySelector('#addItems').action='http://localhost/designproject/itemcontroller/save_item?qr=$json_data';

				document.getElementById('item_name').value='".$item_name."';
				document.querySelector('#price').value='".$price."';
				document.querySelector('#description').value='".$description."';
				document.querySelector('#discount').value='".$discount."';
				alert('please add the image again');
                </script>";

            }
			if(isset($_GET['saved'])){
				echo 'Item Saved Successfully';
			}
				?>

		</div>
	</div>
</div>

<h2>Items List</h2>
    <table border="1">
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Discount</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php foreach ($items as $item) : ?>
        <tr>
            <td><?= $item->item_name ?></td>
            <td><?= $item->price ?></td>
            <td><?= $item->description ?></td>
            <td><?= $item->offer ?></td>
            <td><img src="<?php echo base_url()?>uploads/<?= $item->image ?>" alt="Item Image" style="width: 100px; height: 100px;"></td>
            <td>
                <a href="<?php echo site_url('AddItem/edit/'.$item->item_id); ?>">Edit</a> | 
                <a href="<?= base_url('AddItem/delete/'.$item->item_id) ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>