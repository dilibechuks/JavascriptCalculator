<?php

session_start();
include("init.php");
$user = $_SESSION['user'];

$query = mysqli_query($init, "SELECT * FROM logs WHERE user_id = '$user' ORDER BY id DESC");
$is_it = mysqli_num_rows($query);
if ($is_it > 0) {
    while ($arr = mysqli_fetch_array($query)) {
        $expression = $arr['expression'];
        $result = $arr['result'];
?>

        <div>
            <h1 class='io'><?php echo $expression  ?></h1>
            <div style='display:flex;align-items:center'>
                <span class='res_1'>=</span>
                <span class='res'><?php echo $result ?></span>
            </div>
        </div>
<?php
    }
}else{
    ?>
    <div style='padding:2rem'>
    You have no recent calculations.
    </div>
<?php
}
?>