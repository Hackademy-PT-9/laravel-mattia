//show navbar on down scroll
let prevScrollPos = window.pageYOffset;//inizializzo la posizione iniziale con l'inizio della pagina del browser

window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;//inizializzo la posizione corrente con l'inizio della pagina del browser

    //se la posizione corrente è maggiore di quella precedente (ovvero c'è stato lo scroll verso il basso) inserisce uno stile css
    if (prevScrollPos < currentScrollPos) {
        document.getElementById("navbar").style.opacity = "0.8";
        document.getElementById("navbar").style.transform = "translateY(0)";
    } else {
        document.getElementById("navbar").style.opacity = "0";
        document.getElementById("navbar").style.transform = "translateY(-100%)";
        prevScrollPos = currentScrollPos;
    }

    //animazione della scritta dal basso verso l'alto on down scroll
    let myDiv = document.getElementById('myDiv');//prendo il div
    let myDivPosition = myDiv.getBoundingClientRect().top;//prendo la posizione del div nella pagina browser

    let windowHeight = window.innerHeight;//prendo l'altezza interna della finestra

    //se la posizione del div è < dell'altezza mostra il div
    if (myDivPosition < windowHeight) {
        myDiv.classList.add('appear');
    } else {
        myDiv.classList.remove('appear');
    }

    //scorrimento vs dx dell'immagine
    let firstImage = document.querySelectorAll('.img-hidden');//prendo l'immagine

    for (let i = 0; i < firstImage.length; i++) {
        let img = firstImage[i];
        let imagePosition = img.getBoundingClientRect().top;

        if (imagePosition - window.innerHeight <= 0) {
            img.classList.add('img-visible');
        } else if (imagePosition > window.innerHeight) {
            img.classList.remove('img-visible');
        }
    }

    //scorrimento vs sx dell'immagine
    let secondImage = document.querySelectorAll('.img-hidden1');

    for (let i = 0; i < secondImage.length; i++) {
        let image = secondImage[i];
        let imagePosition = image.getBoundingClientRect().top;

        if (imagePosition - window.innerHeight <= 0) {
            image.classList.add('img-visible');
        } else if (imagePosition > window.innerHeight) {
            image.classList.remove('img-visible');
        }
    }

    //dissolvenza verso l'alto del div on down scroll
    let yourDiv = document.getElementById('yourDiv');
    let h1 = yourDiv.querySelector('h1');
    let button = yourDiv.querySelector('button');

    let h1Position = h1.getBoundingClientRect().top;
    let buttonPosition = button.getBoundingClientRect().top;
    let altezzaFinestra = window.innerHeight;

    if (h1Position < altezzaFinestra) {
        h1.classList.add('appear');
    } else {
        h1.classList.remove('appear');
    }

    if (buttonPosition < altezzaFinestra) {
        button.classList.add('appear');
    } else {
        button.classList.remove('appear');
    }
};