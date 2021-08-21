
//Konstanten für die zu validierenden Felder
let anzahlField = document.querySelector("#anzahl");
let anzahlError = document.querySelector('#error-anzahl');

let modellIdField = document.querySelector('#modellId');
let modellIdError = document.querySelector('#error-modellId');

let vonField = document.querySelector("#von");
let vonError = document.querySelector('#error-von');

let bisField = document.querySelector('#bis');
let bisError = document.querySelector('#error-bis');

let bemerkungField = document.querySelector('#bemerkung');
let bemerkungError = document.querySelector('#error-bemerkung');

let weiter = document.querySelector('#weiter');

// Anzahl
const anzahlValidieren = () => {
    let anzahl = parseInt(anzahlField.value, 10);
    console.log(anzahl);
    isNaN(anzahl)|| anzahl > 50 ? anzahlError.innerText = 'Bitte geben Sie eine Zahl von 1 bis 50 ein': '';
}

anzahlField.addEventListener('focusout', anzahlValidieren);
anzahlField.addEventListener('focusin', (e) => {
    anzahlError.innerText = '';
})

// Von
const vonValidieren = () => {
    let von = new Date(vonField.value).getDate();
    let tomorrow = new Date().getDate() + 2;
    console.log(von);
    console.log(tomorrow);
    von < tomorrow ? vonError.innerText = 'Wert muss mindestens einen Tag nach heutigem Datum liegen': '';
}
vonField.addEventListener('focusout', vonValidieren);

vonField.addEventListener('focusin', (e) => {
    vonError.innerText = '';
})

// Bis
const bisValidieren = () => {
    let von = new Date(document.querySelector('#von').value).getDate();
    let bis = new Date(bisField.value).getDate();
    bis < von + 1 ? bisError.innerText = 'Der Wert muss mindestens einen Tag nach dem Leihbeginn liegen': '';
}
bisField.addEventListener('focusout', bisValidieren);
bisField.addEventListener('focusin', (e) => {
    bisError.innerText = '';
})

// Bemerkung
const bemerkungValidieren = () => {
    let bemerkungLaenge = bemerkungField.value.length;
    bemerkungLaenge > 500 ? bemerkungError.innerText = 'Maximal 500 Zeichen' : '';
}
bemerkungField.addEventListener('focusout', bemerkungValidieren);
bemerkungField.addEventListener('focusin', (e) => {
    bisError.innerText = '';
})

//Initiale Validierung beim Laden der Seite, damit die Inhalte aus den Session Variablen gleich validiert werden.
const alleValidieren = () => {
    anzahlValidieren();
    vonValidieren();
    bisValidieren();
    bemerkungValidieren();
}

window.onload = alleValidieren;







































// const form = {
//     anzahl: document.querySelector("#anzahl"),
//     anzahlError : document.querySelector('#error-anzahl'),

//     modellId : document.querySelector('#modellId'),
//     modellIdError : document.querySelector('#error-modellId'),

//     von : document.querySelector('#von'),
//     vonError : document.querySelector('#error-von'),

//     bis : document.querySelector('#bis'),
//     bisError : document.querySelector('#error-bis'),

//     bemerkung : document.querySelector('#bemerkung'),
//     bemerkungError : document.querySelector('#error-bemerkung'),

//     weiter : document.querySelector('#weiter')
// } 


// von.addEventListener('focusout', () => {
//     const request = new XMLHttpRequest();

//     request.onreadystatechange = function () {
//         if (request.readyState == 4) {
//             if (request.status = 200) {
//                 console.log(request.responseText);
//             }
//             if(request.status == 404) {
//                 console.log("failed");
//             }
//         }
//     };
//     const requestData = JSON.stringify({})
//     request.open('post', 'reservierung-erstellen.php', true);
//     request.send();
// })
/*
weiter.addEventListener('click', () => {
    const request = new XMLHttpRequest();

    request.onload = () => {
        console.log(request.responseText);
    };

    const requestData = `anzahl=${anzahl.value}&modellId=${modellId.value}`

    request.open('post', 'reservierung-erstellen.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(requestData);

});
*/
