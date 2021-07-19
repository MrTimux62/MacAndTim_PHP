var Popup = 0; // Popup affiché ou non
var PopupR = 0;
var DejaAuthentifie = 0; // Déjà connecté

// PARTIE CONNEXION
var essai = 3;

/**
 * Connexion de l'utilisateur
 */

function adminreset() {
    localStorage.setItem("Admin", 0);
    $('.AdminPart').css("display", "none");
}

 $( "#ConnexionIcon" ).ready(function() {
    if ($("#ConnexionIcon").attr("src") == "Images/Connectvert.png") {
        localStorage.setItem("Login", 1);
    } else {
        localStorage.setItem("Login", 0);
        localStorage.setItem("Admin", 0);
    }
  });

function connexion() { // Vérification User et Password
    
    if ($("#user").val() == "admin" && $("#password").val() == "admin159") {
        localStorage.setItem("Admin", 1);
    }
}

function sub() {
    $("#ConnectTitle").text("Inscription")
    $("#ValidConnect").text("Valider")
}

/**
 * Redirection de l'utilisateur après la connexion
 */
function redirect() {
    document.getElementsByClassName("loader")[0].style = "opacity: 0;"
    document.location.href = "index.php";
}

/**
 * Popup Non authentifié
 */
function connexionPopup() {
    if (Popup == 0) {
        if (localStorage.getItem("Login") != 1) {
            Popup = 1;
            $("#Contenu").append("<div id='ConnectPopup' class='position-absolute top-50 start-50 translate-middle' style='background-color: black; border-radius: 10%; padding: 40px; font-size: 180%; color: red; opacity: 75%;'>Vous devez vous authentifié !</div>")
            setTimeout(deletePopup, 2000);
        }
    }
}
/**
 * Popup Authentifié
 */
function connexionPopupOnload() {
    if (localStorage.getItem("Login") == 1) {
        if (localStorage.getItem("Authentifie") != 1) {
            localStorage.setItem("Authentifie", 1);
            Popup = 1;
            var newdiv = document.createElement("div");
            var currentDiv = document.getElementById('Contenu');
            var newContent = document.createTextNode("Vous êtes authentifié !")
            newdiv.style = "background-color: black; border-radius: 10%; padding: 40px; font-size: 180%; color: green; opacity: 75%;"
            newdiv.id = "ConnectPopup"
            newdiv.className = "position-absolute top-50 start-50 translate-middle"
            newdiv.appendChild(newContent);
            currentDiv.appendChild(newdiv);
            setTimeout(deletePopup, 2000);
        }
    }
}

function deletePopup() {
    fade(ConnectPopup);
    setTimeout(deletePopup2, 2000);
}

function deletePopup2() {
    Popup = 0;
    document.getElementById("ConnectPopup").remove();
}

function fade(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1) {
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}

document.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
        if (document.URL.includes("Connexion") || document.URL.includes("connexion")) {
            connexion();
        }
    }
});

// PARTIE UPDATE DE PAGE

function newUpdate() {
    var idprod, idname, idprice;
    $(".ImageProduit").each(function () {
        idprod = $(this).next().next().attr('name');
        idname = $(this).closest("table").find("thead").find("td").text()
        idprice = $(this).closest("tr").find("td").first().text()
        localStorage.setItem(idprod + "name", idname);
        localStorage.setItem(idprod + "price", idprice);
        (localStorage.getItem(idprod) >= 1) ? $("#" + idprod + "Quantity").text(localStorage.getItem(idprod)) : "";
        (localStorage.getItem(idprod + "Fav") == 1) ? $("#" + idprod + "Fav").attr("src", "Images/etoilepleine.png") : "";
    });
}

/**
 * Update Favoris
 */
function updateQuantityFavoris() {
    var FusionIDQuantity = "1_5Quantity";
    var Fusion = "1_5";
    for (let index = 1; index < 300; index++) {
        Fusion = index + "_";
        FusionIDQuantity = Fusion + "Quantity";
        if (localStorage.getItem(Fusion) >= 1) {
            $("#" + FusionIDQuantity).text(localStorage.getItem(Fusion))
        }
    }
}

// PARTIE AJOUT ET SUPRESSION DE PRODUITS

/**
 * Ajout d'un article
 * @param {*} id 
 */
function commandProduit(id) {
    var basequantity;
    if (localStorage.getItem("Login") == 1) {
        (localStorage.getItem(id) != null) ? basequantity = localStorage.getItem(id) : basequantity = 0;
        basequantity++;
        localStorage.setItem(id, basequantity);
        $("#" + id + "Quantity").text(localStorage.getItem(id))
        quantityEffect(id + "Quantity");
        panierEffect();
    } else {
        connexionPopup();
    }
}

var EffectName = "6_2Quantity";

/**
 * Effet vert texte
 * @param {*} name 
 */
function quantityEffect(name) {
    document.getElementById(name).style = "color:green; padding: 10%;"
    EffectName = name;
    setTimeout(quantityEffectEnd, 500)
}

/**
 * Effet rouge texte
 * @param {*} name 
 */
function quantityEffectRed(name) {
    document.getElementById(name).style = "color:red; padding: 10%;"
    EffectName = name;
    setTimeout(quantityEffectEnd, 500)
}

function quantityEffectEnd() {
    document.getElementById(EffectName).style = "color:white; padding: 10%;"
}
/**
 * Effet vert panier
 */
function panierEffect() {
    document.getElementById("PanierIcon").style = "transform: scale(1.3); transition: .1s ease-in-out; color:green;"
    document.getElementById("PanierIcon").src = "Images/paniervert.png"
    setTimeout(panierEffectEnd, 500)
}
/**
 * Effet rouge panier
 */
function panierEffect2() {
    document.getElementById("PanierIcon").style = "transform: scale(1.3); transition: .1s ease-in-out; color:green;"
    document.getElementById("PanierIcon").src = "Images/panierrouge.png"
    setTimeout(panierEffectEnd, 500)
}

function panierEffectEnd() {
    document.getElementById("PanierIcon").style = "transform: scale(1.0); transition: .1s ease-in-out;"
    document.getElementById("PanierIcon").src = "Images/panier.png"
}
/**
 * Supprimé produit
 * @param {*} id 
 */
function deleteProduit(id) {
    var basequantity;
    if (localStorage.getItem("Login") == 1) {
        (localStorage.getItem(id) != null) ? basequantity = localStorage.getItem(id) : basequantity = 0;
        basequantity--;
        localStorage.setItem(id, basequantity);
        $("#" + id + "Quantity").text(localStorage.getItem(id))
        quantityEffectRed(id + "Quantity");
        panierEffect2();
    } else {
        connexionPopup();
    }
}

// PANIER

/**
 * Validé panier
 */
function panierValidation() {
    if (localStorage.getItem("Login") == 1) {
        alert("Commande Confirmé !")
        resetQuantity();
    } else {
        connexionPopup();
    }
}
/**
 * Affichage du panier
 */
function afficherPanier() {
    var idprod, idquantity, idname;
    for (let index = 1; index < 300; index++) {
        idprod = index + "_";
        idquantity = idprod + "quantity";
        idname = idprod + "name";
        idprice = idprod + "price"
        if (localStorage.getItem(idprod) >= 1) {
            $("#Article").append("<tr><td>" + localStorage.getItem(idname) + " | Quantité : " + localStorage.getItem(idprod) + " | Prix/u : " + localStorage.getItem(idprice) + "</td></tr>")
        }
    }
}

// PARTIE RESET
/**
 * Reset Quantité produits
 */
function resetQuantity() {
    var Fusion = "1_5";
    if (localStorage.getItem("Login") == 1) {
        for (let index = 1; index < 25; index++) {
            Fusion = index + "_"
            localStorage.setItem(Fusion, 0);
        }
        document.getElementById("Article").textContent = " "
    } else {
        alert("Vous devez vous authentifié !")
    }
}
/**
 * Reset Favoris
 */
function resetFavoris() {
    var Fusion = "1_5";
    for (let index = 1; index < 25; index++) {
        Fusion = index + "_Fav"
        localStorage.setItem(Fusion, 0);
    }
    document.getElementById("VosFavoris").textContent = " "
}
/**
 * Reset toutes les données
 */
function resetAll() {
    localStorage.clear();
    //document.getElementById("ConnexionIcon").src = "Images/Connectrouge.png"
    resetPopupfunc();
}
/**
 * Popup Reset Total
 */
function resetPopupfunc() {
    if (PopupR == 0) {
        PopupR = 1;
        var newdiv = document.createElement("div");
        var currentDiv = document.getElementById('ResultConnexion');
        var newContent = document.createTextNode("Reset Effectué !")
        newdiv.style = "background-color: black; border-radius: 10%; padding: 40px; font-size: 180%; color: red; opacity: 75%;"
        newdiv.id = "ResetPopup"
        newdiv.className = "position-absolute top-0 start-0"
        newdiv.appendChild(newContent);
        currentDiv.appendChild(newdiv);
        setTimeout(deleteResetPopup, 2000);
    }
}

function deleteResetPopup() {
    fade(ResetPopup);
    setTimeout(deleteResetPopup2, 2000);
}

function deleteResetPopup2() {
    PopupR = 0;
    document.getElementById("ResetPopup").remove();
}

// AJOUT DE FAVORIS

/**
 * Ajouté un Favoris
 * @param {*} id 
 */
function addFavoris(id) {
    if (localStorage.getItem("Login") == 1) {
        if (localStorage.getItem(id) != 1) {
            document.getElementById(id).src = "Images/etoilepleine.png"
            localStorage.setItem(id, 1);
            favorisEffect();
        } else {
            document.getElementById(id).src = "Images/etoilevide.png"
            localStorage.setItem(id, 0);
            favorisEffect2();
        }
    } else {
        connexionPopup();
    }
}
/**
 * Effet Favoris
 */
function favorisEffect() {
    document.getElementById("FavorisIcon").style = "transform: scale(1.3); transition: .1s ease-in-out; color:green;"
    document.getElementById("FavorisIcon").src = "Images/favorisjaune.png"
    setTimeout(favorisEffectEnd, 500)
}

function favorisEffect2() {
    document.getElementById("FavorisIcon").style = "transform: scale(1.3); transition: .1s ease-in-out; color:green;"
    document.getElementById("FavorisIcon").src = "Images/favorisrouge.png"
    setTimeout(favorisEffectEnd, 500)
}

function favorisEffectEnd() {
    document.getElementById("FavorisIcon").style = "transform: scale(1.0); transition: .1s ease-in-out;"
    document.getElementById("FavorisIcon").src = "Images/favoris.png"
}
/**
 * Afficher les favoris
 */
function afficherFavoris() {
    var idprod, idquantity, idname;
    for (let index = 1; index < 300; index++) {
        idprod = index + "_";
        idquantity = idprod + "quantity";
        idname = idprod + "name";
        idprice = idprod + "price";
        if (localStorage.getItem(idprod + "Fav") == 1) {
            if (localStorage.getItem(idprod) == null) {
                localStorage.setItem(idprod, 0);
            }
            $("#VosFavoris").append("<tr><td>" + localStorage.getItem(idname) + " | " + localStorage.getItem(idprice) + "/u</td><td><button name='" + idprod + "' onclick='deleteProduit(this.name);' style='font-size: 110%; width: 40px; height: 40px;'>-</button><strong id='" + idprod + "Quantity' style='padding: 10%;'>" + localStorage.getItem(idprod) + "</strong><button name='" + idprod + "' onclick='commandProduit(this.name);' style='font-size: 110%; width: 40px; height: 40px;'>+</button></td></tr>")
        }
    }
}


// CREATION TABLEAU PRODUITS HTML

/**
 * Fonction de Recherche
 */
function myFunction() {
    // Declare variables
    var input, filter, div, tr, td, i, txtValue;
    input = document.getElementById("SearchBar");
    filter = input.value.toUpperCase();
    div = document.getElementById("Contenu");
    table = div.getElementsByTagName("table");
    for (i = 0; i < table.length; i++) {
        td = table[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                table[i].style.display = "";
            } else {
                table[i].style.display = "none";
            }
        }
    }
}

/**
 * Affichage de la modale
 */
$('html').on('click', 'img', function () {
    if ($(this).hasClass("ImageProduit")) {
        $("#exampleModalLabel").text($(this).closest("table").find("thead").find("tr").find("td").text())
        $(".modalimg").html($(this).clone())
        $(".modalimg").append("<br>" + $(this).closest("tbody").find("tr").find("td").first().text())
        $('#exampleModal').modal('show');
    }
})

/**
 * Modale Problème
 */
$('html').on('click', '#prob', function () {
    $('#problemeModal').modal('show');
})

function envoieRedirect() {
    setTimeout(redi, 8000)
}

function redi() {
    document.location.href = "index.php"
}

function drag(ev) {
    ev.dataTransfer.setData("id", $(ev.target).next().next().attr("name"));
}
function allowDrop(ev) {
    ev.preventDefault();
}
function drop(ev) {
    ev.preventDefault();
    commandProduit(ev.dataTransfer.getData("id"))
}

/**
 * Afficher les parties réservé à l'admin
 */
function AffichAdmin() {
    if (localStorage.getItem("Admin") == 1) {
        $('.AdminPart').css("display", "block")
    } else {
        $('.AdminPart').css("display", "none")
    }
}