<?php

$con = mysqli_connect("localhost","root","","customer_service_assistant");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

if(isset($_POST['save_manager']))
{
    // Generate a unique manager ID
    $prefix = 'MA';
    $manager_id = $prefix . sprintf('%03d', rand(1, 999));

    $manager_name = mysqli_real_escape_string($con, $_POST['manager_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $selected_branch = mysqli_real_escape_string($con, $_POST['selected_branch']);

    if($manager_name == NULL || $email == NULL || $phone_no == NULL || $address == NULL || $nic == NULL || $selected_branch == 0)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO manager (manager_id,name,email,phone_no,address,nic,branch_id) VALUES ('$manager_id','$manager_name','$email','$phone_no','$address','$nic','$selected_branch')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Manager Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Manager Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_manager']))
{
    $manager_id = mysqli_real_escape_string($con, $_POST['manager_id']);

    $manager_name = mysqli_real_escape_string($con, $_POST['manager_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $selected_branch = mysqli_real_escape_string($con, $_POST['selected_branch']);

    if($manager_name == NULL || $email == NULL || $phone_no == NULL || $address == NULL || $nic == NULL || $selected_branch == 0)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE manager SET name='$manager_name', email='$email', phone_no='$phone_no', address='$address', nic='$nic', branch_id='$selected_branch' 
                WHERE manager_id='$manager_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Manager Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Manager Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['manager_id']))
{
    $manager_id = mysqli_real_escape_string($con, $_GET['manager_id']);

    $query = "SELECT manager.manager_id,manager.branch_id,manager.name, manager.email, manager.phone_no, manager.address, manager.nic, branch.branch_name 
                FROM manager INNER JOIN branch ON manager.branch_id = branch.branch_id WHERE manager_id='$manager_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $manager = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Manager Fetch Successfully by id',
            'data' => $manager
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Manager Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_manager']))
{
    $manager_id = mysqli_real_escape_string($con, $_POST['manager_id']);

    $query = "DELETE FROM manager WHERE manager_id='$manager_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Manager Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Manager Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>