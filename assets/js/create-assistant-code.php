<?php

$con = mysqli_connect("localhost","root","","customer_service_assistant");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}



if(isset($_POST['save_assistant']))
{
    // Generate a unique assistant ID
    $prefix = 'CA';
    $user_id = sprintf('%03d', rand(1, 999)); // Replace actual user id
    $assistant_id = $prefix . $user_id;

    $assistant_name = mysqli_real_escape_string($con, $_POST['assistant_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $branch_id = 1;
    $session_manager = 'MA001';

    $password = "Assistant@123"; // Default Password
    $role = "Assistant"; // user table role column

    if($assistant_name == NULL || $email == NULL || $phone_no == NULL || $gender == 'undefined')
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    // Insert Customer Assistant table
    $query = "INSERT INTO customer_assistant (assistant_id,name,email,phone_no,gender,password,branch_id,manager_id) VALUES 
            ('$assistant_id','$assistant_name','$email','$phone_no','$gender','$password','$branch_id','$session_manager')";
    $query_run = mysqli_query($con, $query);

    // Insert User table
    $user_query = "INSERT INTO user (user_id,name,email,phoneNo,gender,password,role) VALUES 
            ('$user_id','$assistant_name','$email','$phone_no','$gender','$password','$role')";
    $user_query_run = mysqli_query($con, $user_query);

    if($query_run && $user_query_run)
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

    $filtered_assistant_id = substr($assistant_id, 2); // Assuming the numeric part always starts at position 2

    if($assistant_name == NULL || $email == NULL || $phone_no == NULL || $gender == 'undefined')
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    // Update Customer Assistant table
    $query = "UPDATE customer_assistant SET name='$assistant_name', email='$email', phone_no='$phone_no', gender='$gender'
                WHERE assistant_id='$assistant_id'";
    $query_run = mysqli_query($con, $query);

    // Update User table
    $user_query = "UPDATE user SET name='$assistant_name', email='$email', phoneNo='$phone_no', gender='$gender'
                WHERE user_id='$filtered_assistant_id'";
    $user_query_run = mysqli_query($con, $user_query);

    if($query_run && $user_query_run)
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

    $filtered_assistant_id = substr($assistant_id, 2); // Assuming the numeric part always starts at position 2

    // Delete Customer assistant in customer assistant table
    $query = "DELETE FROM customer_assistant WHERE assistant_id='$assistant_id'";
    $query_run = mysqli_query($con, $query);

    // Delete User in user table
    $user_query = "DELETE FROM user WHERE user_id='$filtered_assistant_id'";
    $user_query_run = mysqli_query($con, $user_query);

    if($query_run && $user_query_run)
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