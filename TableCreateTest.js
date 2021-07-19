$("#Contenu").append("<table id=" + tableauid + " class='mx-5 mb-5' style='max-height: 300px' > <thead class='fs-1' > <tr> <td colspan='3'>" + nomproduit + "<img src='Images/etoilevide.png' alt='etoile' class='etoile' id='2_2Fav' onclick='addFavoris(this.id);' width='50' height='50' style='float: right; padding-right: 5px;'></img> <img width='50' height='50' src='Images/Pin.png' class='pin' alt='pin' style='position: relative; top: -30px; left: -95px; float: right;'> </td> </tr> </thead> </table>")

$("#" + tableauid).append("<tbody class='fs-5'><tr><td id="+ PriceID +">"+ prixproduit +"€</td><td>"+ compo1 +"<br>"+ compo2 +"<br>"+ compo3 +"</td><td rowspan='2' style='text-align: center;'><img src="+ cheminimage +" alt='default' width='150' height='150' class='ImageProduit img-fluid mb-2'><br><button name="+ idproduit +" onclick='deleteProduit(this.name);'>-</button><strong id="+ QuantityID +" style='padding: 10%;'>0</strong><button name="+ idproduit +" onclick='commandProduit(this.name);'>+</button></td></tr><tr><td>"+ calorie +"Cal</td><td>"+ note +"</td></tr></tbody>")





// $("p").wrap("<div></div>")); intégré p dans un div

/*var newTable = document.createElement("table")
    var newThead = document.createElement("thead")
    var newTbody = document.createElement("tbody")
    var newTr = document.createElement("tr")
    var newTd = document.createElement("td")
    var newStrong = document.createElement("strong")
    var newButton = document.createElement("button")
    var newContent = document.createTextNode("default")
    var newImg = document.createElement("img")
    var FavID = idproduit + "Fav"
    var PriceID = idproduit + "Price"
    var QuantityID = idproduit + "Quantity"
    var br = document.createElement("br");
    newTbody.className = "fs-5"
    newThead.className = "fs-1"
    newTable.id = tableauid
    newTable.style = "max-height: 300px;"
    newTable.className = "mx-5 mb-5"
    newTable.appendChild(newThead)
    newTd.colSpan = 3
    newTr = document.createElement("tr")
    newContent = document.createTextNode(nomproduit)
    newImg.src = "Images/etoilevide.png"
    newImg.alt = "etoile"
    newImg.className = "etoile"
    newImg.id = FavID
    newImg.setAttribute("onclick", "addFavoris(this.id);")
    newImg.width = "50"
    newImg.height = "50"
    newImg.style = "float: right; padding-right: 5px;"
    newTd.appendChild(newContent)
    newTd.appendChild(newImg)
    newImg = document.createElement("img") //
    newImg.style = "position: relative; top: -30px; left: -95px; float: right;"
    newImg.width = "50"
    newImg.height = "50"
    newImg.src = "Images/Pin.png"
    newImg.className = "pin"
    newImg.alt = "pin"
    newTd.appendChild(newImg)
    newTr.appendChild(newTd)
    newThead.appendChild(newTr)
    newTable.appendChild(newTbody)
    newTr = document.createElement("tr")
    newTbody.appendChild(newTr)
    newTd = document.createElement("td")
    newTd.id = PriceID
    newContent = document.createTextNode(prixproduit + "€")
    newTd.appendChild(newContent)
    newTr.appendChild(newTd)
    newTd = document.createElement("td")
    newContent = document.createTextNode(compo1)
    newTd.appendChild(newContent)
    if (compo2 != 0) {
        br = document.createElement("br");
        newContent = document.createTextNode(compo2)
        newTd.appendChild(br)
        newTd.appendChild(newContent)
    }
    if (compo3 != 0) {
        br = document.createElement("br");
        newContent = document.createTextNode(compo3)
        newTd.appendChild(br)
        newTd.appendChild(newContent)
    }
    newTr.appendChild(newTd)
    newTd = document.createElement("td")
    newTd.rowSpan = "2"
    newTd.style = "text-align: center;"
    newTbody.appendChild(newTd)
    newImg = document.createElement("img")
    newImg.src = cheminimage
    newImg.alt = "default"
    newImg.width = "150"
    newImg.height = "150"
    newImg.className = "ImageProduit img-fluid mb-2"
    newTd.appendChild(newImg)
    br = document.createElement("br");
    newTd.appendChild(br)
    newButton.name = idproduit
    newButton.setAttribute("onclick", "deleteProduit(this.name);")
    newButton.textContent = "-"
    newTd.appendChild(newButton)
    newStrong.id = QuantityID
    newStrong.style = "padding: 10%;"
    newStrong.textContent = "0"
    newTd.appendChild(newStrong)
    newButton = document.createElement("button")
    newButton.name = idproduit
    newButton.setAttribute("onclick", "commandProduit(this.name);")
    newButton.textContent = "+"
    newTd.appendChild(newButton)
    newTr.appendChild(newTd)
    newTr = document.createElement("tr")
    newTd = document.createElement("td")
    newContent = document.createTextNode(calorie + "Cal")
    newTd.appendChild(newContent)
    newTr.appendChild(newTd)
    newTd = document.createElement("td")
    newContent = document.createTextNode(note)
    newTd.appendChild(newContent)
    newTr.appendChild(newTd)
    newTbody.appendChild(newTr)
    document.getElementById("Contenu").appendChild(newTable)*/