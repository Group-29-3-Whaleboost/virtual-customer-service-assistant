<?php

$con = mysqli_connect("localhost","root","","customer_service_assistant");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}



if(isset($_POST['save_assistant']))
{
    // Generate a unique assistant ID
    $prefix = 'CA';
    $assistant_id = $prefix . sprintf('%03d', rand(1, 999));

    $assistant_name = mysqli_real_escape_string($con, $_POST['assistant_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $branch_id = 1;
    $session_manager = 'MA001';

    if($assistant_name == NULL || $email == NULL || $phone_no == NULL || $gender == 'undefined')
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO customer_assistant (assistant_id,name,email,phone_no,gender,branch_id,manager_id) VALUES 
            ('$assistant_id','$assistant_name','$email','$phone_no','$gender','$branch_id','$session_manager')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Assistant Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Assistant Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_assistant']))
{
    $assistant_id = mysqli_real_escape_string($con, $_POST['assistant_id']);

    $assistant_name = mysqli_real_escape_string($con, $_POST['assistant_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    if($assistant_name == NULL || $email == NULL || $phone_no == NULL || $gender == 'undefined')
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE customer_assistant SET name='$assistant_name', email='$email', phone_no='$phone_no', gender='$gender'
                WHERE assistant_id='$assistant_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Assistant Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Assistant Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['assistant_id']))
{
    $assistant_id = mysqli_real_escape_string($con, $_GET['assistant_id']);

    $query = "SELECT * FROM customer_assistant WHERE assistant_id='$assistant_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $assistant = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Assistant Fetch Successfully by id',
            'data' => $assistant
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Assistant Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_assistant']))
{
    $assistant_id = mysqli_real_escape_string($con, $_POST['assistant_id']);

    $query = "DELETE FROM customer_assistant WHERE assistant_id='$assistant_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Assistant Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Assistant Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>