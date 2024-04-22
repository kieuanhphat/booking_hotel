<?php 
    require('inc/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Login</title>
    <?php require('inc/links.php');?>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3"> ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_email" required type="email" class="form-control shadow-none text-center" placeholder="Admin name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="w-100 btn btn-info shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php 
        if(isset($_POST['login'])){
            $frm_data= filteration($_POST);
            $query = "SELECT * FROM 'admin_cred' where 'admin_email'=? and 'admin_pass'=?";
            $values=[$frm_data['admin_email'],$frm_data['admin_pass']];
            $datatypes="ss";

            select($query,$values, $datatypes);
        }
    ?>
    
    <?php require('inc/script.php');?>
</body>
</html>