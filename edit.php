

<?php
include_once 'header.php';

$id = "";
$first = "";
$last = "";
$email = "";
$uid = "";
$pwd = "";

mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT) ;

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['first'];
    $posts[2] = $_POST['last'];
    $posts[3] = $_POST['email'];
    $posts[4] = $_POST['uid'];
    $posts[5] = $_POST['pwd'];
    return $posts;
}

if(isset($_POST['search']))
{
$data = getPosts();

$search_Query = "SELECT * FROM users WHERE user_id = $data[0]";

$search_Result = mysqli_query($conn, $search_Query);

if($search_Result)
{
        if(mysqli_num_rows ($search_Result))
        {
            while ($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['user_id'];
                $first = $row['user_first'];
                $last = $row['user_last'];
                $email = $row['user_email'];
                $uid = $row['user_uid'];
                $pwd = $row['user_pwd'];
            }
        } else{
            echo 'No data for this Id ';
        }
    } else{
    echo 'Result error';
}
}


// gebruiker vult id en drukt op delete dan worden alle gegevens van de gebruiker verwijderd
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM users WHERE user_id = $data[0]";
    try{
        $delete_Result = mysqli_query($conn, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// gebruiker vult id en drukt op edit dan worden de gegevens van gebruiker bewerkt
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE users SET user_first = '$data[1]', user_last = '$data[2]', user_email = '$data[3]', user_uid = '$data[4]', user_pwd = '$data[5]' WHERE user_id= '$data[0]'";
    try{
        $update_Result = mysqli_query($conn, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>

<body>
<form action="edit.php" method="POST">
    <p>Edit</p>
        <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>">
        <br>
        <input type="text" name="first" placeholder="First name" value="<?php echo $first;?>">
        <br>
        <input type="text" name="last" placeholder="Last name" value="<?php echo $last;?>">
        <br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
        <br>
        <input type="text" name="uid" placeholder="Username" value="<?php echo $uid;?>">
        <br>
        <input type="password" name="pwd" placeholder="Password" value="<?php echo $pwd;?>">
        <br>
        <div>
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">

        </div>
</form>

</body>
