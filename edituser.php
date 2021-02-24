<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT User</title>
</head>
<body>
<?php
if(isset($_GET['id']))
{
    $eid = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$eid";
    include('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error());
    if($qry)
    {
        while($r = mysqli_fetch_assoc($qry))
        {
            $uid = $r['id'];
            $uname = $r['username'];
            $upass = $r['password'];
            $uemail = $r['email'];
            $urole = $r['role'];
            $ustatus = $r['status'];
        }
        ?>
        <form method = "POST" action="edituserprocess.php">
        <fieldset>
        <legend>Edit User <?php echo $uname;?>
        </legend>
        <input type="hidden"  name="id" value="<?php echo $uid;?>"/>
        <input type="text" name="username" value="<?php echo $uname;?>"/></br/>
        <input type="password" name="password" value=""/></br/>
        <input type="email" name="email" value="<?php echo $uemail;?>"/></br/>
        <input type="number" name="role" value="<?php echo $urole;?>"/></br/>
        <input type="number" name="status" value="<?php echo $ustatus;?>"/></br/>
        <input type="submit" name="submit" value="Update Record"/>

        </fieldset>
        </form>
        <?php
    }

}
else{
    header('Location: selectusers.php');
}
?>
</body>
</html>