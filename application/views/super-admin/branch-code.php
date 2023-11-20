<?php

require 'dbcon.php';

if(isset($_POST['save_branch']))
{
    $branch_name = mysqli_real_escape_string($con, $_POST['branch_name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);

    if($branch_name == NULL || $address == NULL || $phone_no == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO branch (branch_name,address,phone_no) VALUES ('$branch_name','$address','$phone_no')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Branch Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Branch Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_branch']))
{
    $branch_id = mysqli_real_escape_string($con, $_POST['branch_id']);

    $branch_name = mysqli_real_escape_string($con, $_POST['branch_name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);

    if($branch_name == NULL || $address == NULL || $phone_no == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE branch SET branch_name='$branch_name', address='$address', phone_no='$phone_no' 
                WHERE branch_id='$branch_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Branch Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Branch Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['branch_id']))
{
    $branch_id = mysqli_real_escape_string($con, $_GET['branch_id']);

    $query = "SELECT * FROM branch WHERE branch_id='$branch_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $branch = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Branch Fetch Successfully by id',
            'data' => $branch
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Branch Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_branch']))
{
    $branch_id = mysqli_real_escape_string($con, $_POST['branch_id']);

    $query = "DELETE FROM branch WHERE branch_id='$branch_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Branch Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Branch Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>