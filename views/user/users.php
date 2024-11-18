<!doctype html>
<html lang="en">
<!-- [Head] start -->
<?php

include "../../config.php";
include "../../app/userController.php";
$userController = new userController();
$users = $userController->getUser();
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
                                <br>
                                <h2 class="mb-0">Carta de usuario</h2>
                                <br>
                            </div>
                            <br>
                            <a class="btn btn-outline-secondary shadow-sm rounded-pill px-4" href= "<?php echo BASE_PATH . "users/create/" ?>">Agregar usuario</a>


                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <?php if (isset($users) && count($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <!-- [ sample-page ] start -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card user-card shadow-sm">
                                <div class="card-body">
                                    <!-- Imagen de portada y calificaci贸n -->
                                    <div class="position-relative">
                                        <img src="../assets/images/application/img-user-cover-1.jpg" alt="cover-image" class="img-fluid rounded-top" />
                                        <div class="position-absolute bottom-0 start-0 p-2 bg-dark bg-opacity-50 rounded text-white d-inline-flex align-items-center">
                                            <i class="ph-duotone ph-star text-warning me-1"></i>
                                            4.5 <small class="text-white text-opacity-75 ms-1">/ 5</small>
                                        </div>
                                    </div>
                                    <!-- Imagen de usuario y estado -->
                                    <div class="position-relative text-center mt-n5">
                                        <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="img-thumbnail rounded-circle border border-3 border-white" style="width: 80px; height: 80px;">
                                        <i class="bg-success position-absolute bottom-0 end-0 border border-white rounded-circle" style="width: 12px; height: 12px;"></i>
                                    </div>
                                    <!-- Informaci贸n del usuario -->
                                    <div class="text-center mt-2">
                                        <h6 class="mb-0"><?php echo $user->name; ?></h6>
                                        <h6 class="mb-0"><?php echo $user->lastname; ?></h6>
                                        <p class="text-muted text-sm mb-1"><a href="#" class="text-primary"><?php echo $user->email; ?></a></p>
                                    </div>
                                    <!-- Separador e informaci贸n adicional -->
                                    <div class="border-top border-light my-3 pt-2 text-center">
                                        <a href=""></a>
                                        <a class="btn text-dark border border-dark bg-transparent rounded-pill" href= "<?php echo BASE_PATH . "users/details/" . $user->id; ?>"> Ver mas informaci贸n...</a>

                                    </div>
                                    <div class="text-center mb-3">
                                        <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1"><?php echo $user->role; ?></span>
                                        <span class="badge bg-light-secondary border rounded-pill border-secondary bg-transparent f-14 me-1 mt-1"><?php echo $user->phone_number; ?></span>
                                    </div>
                                    <!-- Botones -->
                                    <div class="d-flex justify-content-around">
                                        <a class="btn btn-primary shadow-sm rounded-pill px-4" href= "<?php echo BASE_PATH . "users/details/" . $user->id; ?>">Editar usuario</a>
                                        <form action="../../app/userController.php" method="POST" id="deleteUserForm-<?=$user->id ?>" >
                                            <input type="text" hidden name="action" value="delete_user">
                                            <input type="hidden" name="id" value="<?= $user->id ?>">
                                        </form>
                                        <button class="btn shadow-sm btn-danger rounded-pill px-4 deleteUser" value="<?= $user -> id ?>">Borrar usuario</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    let deleteUser = document.querySelectorAll('.deleteUser');
    deleteUser.forEach(button => {
        button.addEventListener('click', function () {
            swal({
                title: "¿Estás seguro?",
                text: "¡Una vez eliminado, no podrás recuperar esta información!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    const form = document.getElementById(`deleteUserForm-${button.value}`);
                    if (form) {
                        form.submit();
                        swal("¡La información ha sido eliminada!", {
                            icon: "success",
                        });
                    } else {
                        console.error(`Formulario con id deleteUserForm-${button.value} no encontrado.`);
                    }
                }
            });
        });
    });
});



</script>
</body>
<!-- [Body] end -->

</html>