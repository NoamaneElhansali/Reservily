document.addEventListener("DOMContentLoaded", function() {
    var elementsDivCarte = document.querySelectorAll(".carte");
    var tableauElementsDivCarte = Array.from(elementsDivCarte);
    tableauElementsDivCarte.forEach(element => {
        element.addEventListener('click', (event) => { // Pass the event object as a parameter
            // Check if the clicked element or any of its ancestors have the class "carte"
            // Check if the clicked element or any of its ancestors have the class "icon"
            if (event.target.closest('.carte') && !event.target.closest('.icon')) {
                var carte = event.target.closest('.carte');
                var imgProduit = carte.querySelector('.imgproduit').getAttribute('src');
                var titreProduit = carte.querySelector('.titreproduite').innerText;
                var descriptionProduit = carte.querySelector('.description').innerText;
                var prix = carte.querySelector('h2').innerText;
                var redirectUrl = 'detailproduit.html' +
                    '?imgProduit=' + encodeURIComponent(imgProduit) +
                    '&titreProduit=' + encodeURIComponent(titreProduit) +
                    '&descriptionProduit=' + encodeURIComponent(descriptionProduit) +
                    '&prix=' + encodeURIComponent(prix);
                window.location.href = redirectUrl;
            }
        });
    });
});



let n = 0; 

document.addEventListener("DOMContentLoaded", function() {
    var elementsDivCarte = document.querySelectorAll(".icon");
    var tableauElementsDivCarte = Array.from(elementsDivCarte);

    tableauElementsDivCarte.forEach(element => {
        element.addEventListener('click', (event) => { // Passer l'événement en tant que paramètre
            var carte = event.target.closest('.carte');
            var imgProduit = carte.querySelector('.imgproduit').getAttribute('src');
            var titreProduit = carte.querySelector('.titreproduite').innerText;
            var descriptionProduit = carte.querySelector('.description').innerText;
            var prix = carte.querySelector('h2').innerText;

            var notification = document.createElement("div"); // Correction : createElement("div") au lieu de createElement("contnotification")
            notification.className = "contnotification";
            notification.id = "contnotification";
            notification.innerHTML = '<div class="notification" id="notification">' + '<div class="divnotification">' + '<span onclick="supprimerNotification()" class="material-symbols-outlined" id="close">' + 'close' + '</span>' + '<p id="titrenotification"><b id="nike">&#x2714;</b> <i>Produit ajouté au panier avec succès</i></p><hr>' + '<div class="plusafficheproduit">' + '<div class="imgplusafficheproduit">' + '<img src="' + imgProduit + '" alt="produit" id="imgproduitafficher"></div>' + '<div class="information"><h2 id="titreinformation">' + titreProduit + '</h2><p id="discriptioninformation">' + descriptionProduit + '</p><h3>Prix: <p id="prixinformation">' + prix + '</p></h3><hr><h6>Il y a <b id="nmbinformation">' + n + '</b> articles dans votre panier.</h6><a href="#" class="buttonvoirmonpanier">Voir Mon panier</a></div></div></div></div>';
            n += 1;
            document.body.appendChild(notification);
        });
    });
});

function supprimerNotification() {
    var notification = document.getElementById("notification");
    var contnotification = document.getElementById("contnotification");
    notification.parentNode.removeChild(notification);
    contnotification.parentNode.removeChild(contnotification);
}


let slideIndex = 0;
let timer; // Variable pour stocker le timer

showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    startTimer(); // Démarre le timer après chaque changement de diapositive
}

function prevSlide() {
    clearTimeout(timer); 
    slideIndex -= n;
    showSlides();
}

function nextSlide() {
    clearTimeout(timer);
    slideIndex += n;
    showSlides();
}
function startTimer() {
    clearTimeout(timer); // Arrête le timer actuel s'il y en a un
    timer = setTimeout(showSlides, 5000); // Change l'image toutes les 5 secondes
}

// function supprimerNotification() {
//     var notification = document.getElementById("notification");
//     var contnotification=document.getElementById("contnotification");
//     notification.parentNode.removeChild(notification);
//     contnotification.parentNode.removeChild(contnotification)
// }

// document.addEventListener("DOMContentLoaded", function() {
//     var notification = document.createElement("div");
//     notification.className = "notification";
//     notification.id = "notification";
//     notification.innerHTML ='<div class="contnotification" id="contnotification">'+'<div class="notification" id="notification">'+ '<div class="divnotification">'+'<span onclick="supprimerNotification()" class="material-symbols-outlined" id="close">'+'close'+'</span>'+'<p id="titrenotification"><b id="nike">&#x2714;</b> <i>Produit ajouté au panier avec succès</i></p><hr>'+'<div class="plusafficheproduit">'+'<div class="imgplusafficheproduit">'+'<img src="" alt="produit" id="imgproduitafficher"></div>'+'<div class="information"><h2 id="titreinformation">titre de produit</h2><p id="discriptioninformation">discription</p><h3>Prix: <p id="prixinformation">33£</p></h3><hr><h6>Il y a <b id="nmbinformation">N</b> articles dans votre panier.</h6><a href="#" class="buttonvoirmonpanier">Voir Mon panier</a></div></div></div></div></div>';
//     document.body.appendChild(notification);
// });

