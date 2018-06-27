var odp=[0, 0, 0, 0, 0, 0, 0 ,0, 0, 0, 0 ,0, 0, 0, 0, 0];


function changeColor(el1, id2) {
    var id1 = el1.id;
    document.getElementById(id1).style.background = "lightGreen";
    document.getElementById(id2).style.background = "lightGray";
    odp[id1-1] = 1;
    odp[id2-1] = -1;
    
}

function sprawdz() {
    var punkty = 0;
    if (odp[0] == 1) punkty++;
    if (odp[2] == 1) punkty++;
    if (odp[4] == 1) punkty++;
    if (odp[6] == 1) punkty++;
    if (odp[8] == 1) punkty++;
    if (odp[11] == 1) punkty++;
    if (odp[12] == 1) punkty++;
    if (odp[15] == 1) punkty++;


    dodajElement(punkty);
}

function dodajElement(ptk) {

    usunElement();
    var p = document.createElement('div');
    var tekst = document.createTextNode('Brawo, twój wynik to: ' + ptk + '/8 ptk ');
   
    p.style.backgroundColor = 'yellow';
    p.style.paddingLeft = "10px";
    p.style.fontSize = "18px";
    p.style.margin = "10px";
    p.style.marginLeft = "30%";
    p.style.marginRight = '30%';
    p.style.padding = "10px";
    p.id = "wynik";

    p.appendChild(tekst);
    document.getElementById('sect').appendChild(p);
}

function usunElement() {

    var usun = document.getElementById('wynik');
    if (usun)
    usun.parentNode.removeChild(usun);
}

