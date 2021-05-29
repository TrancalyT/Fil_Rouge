<?php require_once "views/view_header_admin.php" ?>
<?php require_once "views/view_footer_admin.php" ?>
<?php require_once('../Service/VehiculeService.php'); ?>

<?php callHeaderAdmin("Expo Vehicules") ?>
<?php callNavAdmin() ?>


<div id="layoutSidenav">
    <?php callSidenavAdmin() ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Exposition Vehicules de la Pop Culture - Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="../vehiculespop.php" target="blank"><button class="btn btn-warning mt-2" name="expo">Aller à l'expo</button></a></li>
                </ol>

                <?php

                if (isset($_POST["submit"])) {

                    $expo_title = $_POST["expo_title"];
                    $file = $_FILES['expo_image']['tmp_name'];
                    $expo_image = addslashes(file_get_contents($file));
                    $expo_rapido = $_POST["expo_desc"];
                    $expo_description = $_POST["expo_description"];
                    $expo_type = $_POST["expo_type"];
                }
                if (!empty($expo_title) /*&& !empty($expo_image)*/ && !empty($expo_description) && !empty($expo_rapido) && !empty($expo_type)) {



                    $db = new mysqli("localhost", "root", "", "pocket_museumv2");
                    $query = ("INSERT INTO popvehicules (`NAME`, `IMAGE`, `DESCRIPTION`, `CONTENT`, `TYPE`)
                          VALUES ('$expo_title','$expo_image','$expo_description', '$expo_rapido','$expo_type');");
                    $create_vehicule = mysqli_query($db, $query);

                    if (!$create_vehicule) {
                        die('QUERY FAILED' . mysqli_error($db));
                    }
                }



                ?>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Véhicules de l'expo
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>RESUME</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>RESUME</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                $vehicules = (new VehiculeService())->displayVehicule("terrestre");
                                foreach ($vehicules as $value) {
                                    $id = $value->getID();
                                    $title = $value->getNAME();
                                    $content = $value->getDESCRIPTION();

                                ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $title ?></td>
                                        <td><?= $content ?></td>
                                        <td><a class='btn btn-danger btn-sm' href='controller/delete_vehicule.php?id=<?= $id ?>'>Supprimer</a></td>
                                        <td><a class='btn btn-primary btn-sm' href='controller/delete_vehicule.php?id=<?= $id ?>'>Editer</a></td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>





                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Ajouter un véhicule à la base de donnée
                        </div>
                        <div class="card-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="expo_title" placeholder="Nom du vehicule">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="file" class="form-control" name="expo_image" accept="image/png, image/jpeg" placeholder="image">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="expo_desc" placeholder="Description nomative (uniquement affiché pour l'admin)">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="expo_description" placeholder="Description du vehicule">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="expo_type" placeholder="Type (terrestre volant autre)">
                                </div>
                                <button class="btn btn-success" type="submit" name="submit">Ajouter</button>


                            </form>

                        </div>
                    </div>
                </div>
        </main>
        <?php callFooterAdmin() ?>