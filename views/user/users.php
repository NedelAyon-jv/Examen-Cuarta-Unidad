<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php

include "../../config.php";

?>

<head>
    <?php include "../layouts/head.php" ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <?php include "../layouts/sidebar.php" ?>
    <?php include "../layouts/navbar.php" ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                                <li class="breadcrumb-item" aria-current="page">User Card</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">User Card</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card user-card">
                        <div class="card-body">
                            <div class="user-cover-bg">
                                <img src="../assets/images/application/img-user-cover-1.jpg" alt="image" class="img-fluid" />
                                <div class="cover-data">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="ph-duotone ph-star text-warning me-1"></i>
                                        4.5 <small class="text-white text-opacity-50">/ 5</small>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-avtar card-user-image">
                                <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="img-thumbnail rounded-circle" />
                                <i class="chat-badge bg-success"></i>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1"> name </h6>
                                    <h6 class="mb-1"> lastname </h6>
                                    <p class="text-muted text-sm mb-0"><a href="#" class="text-primary">@email</a></p>
                                </div>
                            </div>
                            <div class="saprator my-2">
                                <span>role:</span>
                            </div>
                            <div class="text-center">
                                <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">role</span>
                            </div>
                            <div class="saprator my-2">
                                <span>phone</span>
                            </div>
                            <div class="text-center">
                                <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1">phone</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <?php include "../layouts/footer.php" ?>

    <?php include "../layouts/scripts.php" ?>

    <?php include "../layouts/modals.php" ?>

    <!-- Required Js -->
</body>
<!-- [Body] end -->

</html>