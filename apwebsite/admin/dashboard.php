<?php 
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php');?>
</head>
<body class="bg-light">
    
   <div class="container-fluid bg-dark text-light p-3 d-flex align-item-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">HB WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm m-2">LOG OUT</a>
   </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                <button class="navbar-toggler shadow-none mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>  
                <div class="collapse navbar-collapse flex-column align-items-stretch" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">     
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Users</a>
                        </li><li class="nav-item">
                            <a class="nav-link text-white" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus repellendus ipsam hic placeat! Iusto repellendus, suscipit commodi magni doloremque ad. Blanditiis quas doloremque eligendi, accusamus quia inventore in illo maxime esse praesentium aspernatur placeat iste aliquid odio recusandae a, quod iure reiciendis architecto maiores magni? Debitis, cupiditate nesciunt ea explicabo consequuntur eaque placeat eius voluptates tempore minus amet ipsa alias rem et quidem, fuga iste corrupti iusto similique aliquid, facilis quas error odit nulla? Accusamus quaerat aut mollitia amet officia rem quod itaque consectetur accusantium doloribus repellendus illum pariatur aspernatur, dolorum eaque adipisci eligendi beatae. Tempora non fugit placeat enim unde? Commodi sequi soluta sint omnis nisi nam alias praesentium. Atque fugit ad assumenda debitis? Excepturi necessitatibus possimus sequi repellat, harum beatae quas eius consectetur! Itaque magnam necessitatibus aperiam unde aliquam alias, fugit hic eligendi perspiciatis quod nisi placeat. Cum molestiae corporis perspiciatis incidunt voluptas, accusantium odit dolorum dolorem quia non quis laudantium accusamus quod magnam quaerat. Hic, soluta earum fuga debitis sapiente atque distinctio voluptates id eaque esse nostrum incidunt ex dicta, voluptatem nemo quae culpa quisquam vero officia dolorem! Vitae minus ea pariatur iste blanditiis exercitationem nostrum sint ex esse maxime placeat rerum quia, voluptatem illo asperiores.
            </div>
        </div>
    </div>

    <?php require('inc/script.php');?>
</body>
</html>