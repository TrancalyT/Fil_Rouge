<?php require_once "views/view_header_admin.php" ?>
<?php require_once "views/view_footer_admin.php" ?>
<?php require_once('../Service/GoldbookService.php'); ?>

<?php callHeaderAdmin("Gestion du Livre d'or") ?>
<?php callNavAdmin() ?>


<div id="layoutSidenav">
    <?php callSidenavAdmin() ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Gestion du Livre d'or</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="goldbook_admin.php"><button class="btn btn-warning mt-2" name="expo">Rafraichir la page</button></a></li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Messages à valider
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>PSEUDONYME</th>
                                    <th>MESSAGE</th>
                                    <th>NOTATION</th>
                                    <th>VALIDER</th>
                                    <th>REFUSER</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>PSEUDONYME</th>
                                    <th>MESSAGE</th>
                                    <th>NOTATION</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                $messages = (new GoldbookService())->messageToCheck();

                                if ($messages != NULL){
                                    foreach ($messages as $value) {
                                        $nom = $value->getUSER_ID()->getNAME();
                                        $prenom = $value->getUSER_ID()->getLASTNAME();
                                        $pseudo = $value->getUSER_ID()->getNICKNAME();
                                        $message = $value->getTEXT();
                                        $notation = $value->getSTARS();
                                        $id = $value->getID();
    
                                        if ($notation == 1){
                                            $notation = "★";
                                          } else if ($notation == 2){
                                            $notation = "★★";
                                          } else if ($notation == 3){
                                            $notation = "★★★";
                                          } else if ($notation == 4){
                                            $notation = "★★★★";
                                          } else if ($notation == 5){
                                            $notation = "★★★★★";
                                          }
    
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $nom ?></td>
                                            <td><?= $prenom ?></td>
                                            <td><?= $pseudo ?></td>
                                            <td>"<?= $message ?>"</td>
                                            <td><?= $notation ?></td>
                                            <td><a class='btn btn-primary btn-sm' href='controller/check_message.php?validation=YES&id=<?=$id?>'><i class="fas fa-thumbs-up"></i></a></td>
                                            <td><a class='btn btn-danger btn-sm' href='controller/check_message.php?validation=NO&id=<?=$id?>'><i class="fas fa-thumbs-down"></i></a></td>
                                        </tr>
                                    <?php }
                                } else {
                                ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                <?php
                                }
                                ?>
                         

                            </tbody>
                        </table>
                    </div>

                </div>
        </main>
        <?php callFooterAdmin() ?>