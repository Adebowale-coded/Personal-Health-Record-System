<?php
require("dbconn.php");

$from = $_GET['from'];
$id = $_GET['id'];

/* $location = $_GET['location']; */

$query = "DELETE FROM `$from` where id = $id";
$result = mysqli_query($con, $query);

if ($result) {
?>
    <script>
        alert("Record Deleted successfully");
        <?php
        if ($from == 'patient') {
            ?>
            window.location.href='patientlist.php'
            <?php
        }elseif($from == 'medreport') {
            ?>
            window.location.href=history.back()
            <?php
        }else{

        }
       ?>
    </script>
<?php
} else {
?>
    <script>
        alert("An error occured");
        history.back();
    </script>
<?php
}

?>