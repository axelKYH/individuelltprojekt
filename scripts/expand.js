//Också här används window-onload-funktionen för att webbläsaren måste hitta elementen i fråga innan scriptet körs på dom
window.onload = function () {
    clickevt();
}

//Här kopplas en händelselyssnare till elementen med klassen 'cv_div' och anropar funktionen expand
function clickevt() {
    var div = document.getElementsByClassName('cv_div');
    for (var i = 0; i < div.length; i++) {
        div1 = div[i];
        div1.addEventListener('click', expand);
    }
}

//Det klickade elementets 'child' nummer två blir här variabeln c:s värde, som sedan döljs eller visas beroende på vilken property den har
function expand() {
    var c = this.children[1];
    if (c.style.display == "block") {
        c.style.display = "none";
    }
    else {
        c.style.display = "block";
    }
}
