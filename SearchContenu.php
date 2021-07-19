<div id="Contenu" class="scroller mx-md-5 mx-0 d-flex justify-content-center">
    <?php
    require_once("BDDConnect.php");
    $sql = "SELECT * FROM produits WHERE 1";
    foreach ($pdo->query($sql) as $row) {
        //echo $row['titre']."<br/>";
        $id = $row['id_produit'] . '_';
        echo "<table class='mx-5 mb-5' style='max-height: 300px'> <thead class='fs-md-1 fs-3'> <tr> <td colspan='3'> <form action='edit.php' method='post'><input name='idprod' style='display:none;' value='". $row['id_produit'] ."'></input><input type='submit' class='AdminPart btn btn-warning btn-xs' value='Edit'></input></form>" . $row['titre'] . "<img src='Images/etoilevide.png' alt='etoile' draggable='false' class='etoile' id='" . $id . "Fav' onclick='addFavoris(this.id);' width='50' height='50' style='float: right; padding-right: 5px;'> <img width='50' height='50' src='Images/Pin.png' class='pin' alt='pin' style='position: relative; top: -30px; left: -95px; float: right;'> </td> </tr> </thead> <tbody class='fs-md-3'><tr><td id='" . $id . "Price'>" . $row['prix'] . "€</td><td>" . $row['compo1'] . "<br>" . $row['compo2'] . "<br>" . $row['compo3'] . "</td><td rowspan='2' style='text-align: center;'><img src='" . $row['img_chemin'] . "' alt='default' width='150' height='150' draggable='true' ondragstart='drag(event)' class='ImageProduit mb-2'><br><button name='" . $id . "' onclick='deleteProduit(this.name);'>-</button><strong id='" . $id . "Quantity' style='padding: 10%;'> 0 </strong><button name='" . $id . "' onclick='commandProduit(this.name);'>+</button></td></tr><tr><td>" . $row['calorie'] . "Cal</td><td>" . $row['note'] . "</td></tr></tbody></table>";
    }
    ?>
</div>
<div id="PiedDePage" class="fs-4 pb-3">
    Nous ne sommes pas responsables des indigestions occasionnées
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modalimg fs-2">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>