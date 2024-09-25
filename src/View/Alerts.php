<?php
$title = 'Alerts';
$myDescription = 'Lister les alertes';
require "header.php";
?>
<html>

<body>
    <div class="container-fluid d-flex">
        <?php require_once("NavBar.php") ?>
        <div class="d-flex flex-column w-100">
            <!-- Container pour le titre et le bouton -->
            <div class="d-flex justify-content-between mb-3">
                <h1 class="titre">Backups</h1>
                <!-- Bouton placé à l'extrême droite et légèrement en bas du titre -->
                <button type="button" id="btnajout" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary w-10">
                    Create backup +
                </button>
            </div>

            <!-- Tableau occupant toute la largeur -->
            <div class="w-100">
                <table class="table table-dark table-striped w-100">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Port</th>
                            <th scope="col">URL</th>
                            <th scope="col">Used_type</th>
                            <th scope="col">User-database</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal d'ajout de base de données -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Creer une sauvegarde</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/database/create" method="post">
                                <div class="input-group mb-3">
                                    <label class="form-label" for="name">Nom database: </label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="user">Nom d'utilisateur: </label>
                                    <input type="text" id="user" name="user" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="password">Mot de passe: </label>
                                    <input type="password" id="password" name="password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="type">Type de base de données :</label>
                                    <select name="type" id="type">
                                        <option value="1">mysql</option>
                                        <option value="2">pgsql</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="port">Port: </label>
                                    <input type="text" id="port" placeholder="default or port number" name="port" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="host">URL: </label>
                                    <input type="text" id="host" name="host" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" type="submit" id="Valider">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>