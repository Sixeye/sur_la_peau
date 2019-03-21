const url = 'https://api.myjson.com/bins/155eu2';
let xhr = new XMLHttpRequest();                 // Create XMLHttpRequest object

xhr.onload = function(){                       // When readystate changes

    if(xhr.status === 200) {                      // If server status was ok
    const scenario = JSON.parse(xhr.responseText);
    document.getElementById("myButton").addEventListener("click", function(){
        let nombre = document.getElementById("myNumber").value;
        //console.log(scenario.sequence[nombre]);
        let extraits = scenario.sequence[nombre];

        let texte = '';
        texte += '<hr>' + 'Séquence: ' + extraits.numero + '<br><br>' + extraits.intro + '<br>' + '<br>' + extraits.txt + '<br>' + '<br>' + '<hr>'
        document.getElementById('output').innerHTML = texte;
        });
}};

xhr.open('GET', url, true);        // Prepare the request
xhr.send(null);                                 // Send the request
