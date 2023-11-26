<?php

$con = mysqli_connect("localhost","root","","customer_service_assistant");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}



if(isset($_POST['save_notification']))
{
    $notification_name = mysqli_real_escape_string($con, $_POST['notification_name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $expire_date = mysqli_real_escape_string($con, $_POST['expire_date']);

    $issue_date = date('Y-m-d');  // Get current date in 'Y-m-d' format
    $manager_id = 'MA001';

    if($notification_name == NULL || $description == NULL || $expire_date == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO notification (name,description,expire_date,issue_date,manager_id) VALUES ('$notification_name','$description','$expire_date','$issue_date','$manager_id')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Notification Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Notification Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_notification']))
{
    $notification_id = mysqli_real_escape_string($con, $_POST['notification_id']);

    $notification_name = mysqli_real_escape_string($con, $_POST['notification_name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $expire_date = mysqli_real_escape_string($con, $_POST['expire_date']);

    if($notification_name == NULL || $description == NULL || $expire_date == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are required'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE notification SET name='$notification_name', description='$description', expire_date='$expire_date' 
                WHERE notification_id='$notification_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Notification Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Notification Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['notification_id']))
{
    $notification_id = mysqli_real_escape_string($con, $_GET['notification_id']);

    $query = "SELECT * FROM notification WHERE notification_id='$notification_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $notification = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Notification Fetch Successfully by id',
            'data' => $notification
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Notification Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_notification']))
{
    $notification_id = mysqli_real_escape_string($con, $_POST['notification_id']);

    $query = "DELETE FROM notification WHERE notification_id='$notification_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Notification Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Notification Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>