<?php
class ItemController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model'); // Load the model
    }

    public function save_item() {
        $base_url = base_url();
        	// if(isset($_POST['generate'])){
			// 		// Get all the values from the form
			// 		$item_name = $_POST['item_name'];
			// 		$price = $_POST['price'];
			// 		$description = $_POST['description'];
			// 		$discount = $_POST['discount'];
			// 		$category = $_POST['category'];
			// 		// Assuming you're storing the uploaded image on the server
			// 		// You can handle image uploads and file paths as needed
			// 		$image_path = 'path/to/uploaded/image.jpg'; // Replace with the actual path

			// 		// Create an associative array with the form data
			// 		$data = array(
			// 			'item_name' => $item_name,
			// 			'price' => $price,
			// 			'description' => $description,
			// 			'discount' => $discount,
			// 			'category' => $category,
			// 			'image' => $image_path
			// 		);

			// 		// Convert the array to a JSON string
			// 		$json_data = json_encode($data);

			// 		// Return the JSON string as a response
			// 		echo "<script>
            //         function goBackWithParams() {
            //             // Define your GET parameters
            //             var paramName = 'paramName';
            //             var paramValue = 'paramValue';
                    
            //             // Get the previous URL from the browser's history
            //             var previousURL = document.referrer;
                    
            //             // Check if the previous URL already contains query parameters
            //             if (previousURL.indexOf('?') !== -1) {
            //                 // If it does, append the new parameter with an ampersand (&)
            //                 window.location.href = previousURL + '&' + paramName + '=' + paramValue;
            //             } else {
            //                 // If it doesn't, append the new parameter with a question mark (?)
            //                 window.location.href = previousURL + '?' + paramName + '=' + paramValue;
            //             }
            //         }
            //         </script>
			// 	// 		<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$json_data&choe=UTF-8'>
			// 	// 	This is your QR code
            //     <button onclick='goBackWithParams()'>Go Back</button>";
            //     echo "<script>
            //     var saveButton = document.getElementById('saveButton');
            //     saveButton.disabled = false;
            //     </script>";
            // }

            
            print_r($_POST);
            // Collect the form data
            $item_name = $this->input->post('item_name');
            $price = $this->input->post('price');
            $description = $this->input->post('description');
            $discount = $this->input->post('discount');
            $category = $this->input->post('category');
            // $image_path = 'uploads/' . $data['image']; // Replace with the actual path
            $qr_code='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$_GET['qr'].'&choe=UTF-8';


            $config['upload_path'] = './uploads/'; // Specify the upload directory
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                // Handle upload error
                $error = $this->upload->display_errors();
                echo $error;
            } else {
            // Create an associative array with the form data

            $data = $this->upload->data();
            $image_path = $data['file_name'];
            $data = array(
                'item_name' => $item_name,
                'price' => $price,
                'description' => $description,
                'offer' => $discount,
                'category_name' => $category,
                'image' => $image_path,
                'qr_code'=>$qr_code
            );

            // Insert the data into the database
            if ($this->Item_model->insert_item($data)) {
                echo "Item saved successfully!";
                $location = $base_url."AddItem";
                header("Location:$location?saved=success");
            } else {
                echo "Item could not be saved.";
            }
        }
        
        
    }
}
?>
