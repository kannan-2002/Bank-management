<?php 
    session_start(); // Ensure the session is started before accessing session variables
    $con = new mysqli('localhost', 'root', '', 'mybank');
    define('bankName', 'MCB Bank'); // Removed the third argument

    // Check if 'userId' is set in the $_SESSION array
    if (isset($_SESSION['userId'])) {
        $ar = $con->query("SELECT * FROM userAccounts, branch WHERE id = '{$_SESSION['userId']}' AND userAccounts.branch = branch.branchId");
        $userData = $ar->fetch_assoc();
    } else {
        // Handle the case when 'userId' is not set in the session
        echo " ";
        // You might want to redirect the user to the login page or take appropriate action.
    }
?>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
