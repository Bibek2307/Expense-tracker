<?php

include("./includes/header.php");
include("./includes/functions.php");
include("./includes/db_con.php");

if(isset($_REQUEST['d_id'])){
    $del_id=$_REQUEST['d_id'];
    $del_query="DELETE FROM budget where id=$del_id";
    $run_del_query=mysqli_query($conn,$del_query);
    if($run_del_query){
        my_alert("success","Record deleted successfully");
        header("Location: ./set_budget.php");
    }
    else{
        my_alert("danger","record doesn't exist");
    }
    mysqli_close($conn);
}


?>












<?php

include("./includes/footer.php");

?>