<?php

$con = mysqli_connect("localhost","root","","customer_service_assistant");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}



if(isset($_POST['save_complaint']))
{
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $branch_id = 1;
    $customer_id = 1;

    $date = date('Y-m-d H:i:s');  // Get current date in 'Y-m-d' format

    if($description == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'Description is required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO complaint (description,branch_id,customer_id,date) VALUES ('$description','$branch_id','$customer_id','$date')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Complaint Sent Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Complaint Not Sent'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_GET['complaint_id']))
{
    $complaint_id = mysqli_real_escape_string($con, $_GET['complaint_id']);

    $query = "SELECT * FROM complaint JOIN customer ON complaint.customer_id = customer.customer_id JOIN branch ON complaint.branch_id = branch.branch_id WHERE complaint_id='$complaint_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $complaint = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Complaint Fetch Successfully by id',
            'data' => $complaint
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Complaint Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

?>