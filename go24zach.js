const table_unready4 = document.querySelector('#t6');
const table_unready2 = document.querySelector('#t7');


var obj =""

let url = "http://localhost/test/go24zach.php";
fetch(url,{
    method: "get",

}).then(function(response) {

    return response.json()})
    .then(function(text) {
        console.log("response is back")
        console.log(text);

        obj = text;
        Object.values(obj).forEach((val) => {

            let temp = document.createElement("tr")
            Object.values(val).forEach((value) => {
                let temp2 = document.createElement("td")
                console.log(value)
                temp2.innerText = value;
                temp.append(temp2);


            });
            table_unready4.append(temp);
        } );

    });

var obs = ""

let url2 = "http://localhost/test/go24exam2.php";
fetch(url2,{
    method: "get",

}).then(function(response) {

    return response.json()})
    .then(function(text) {
        console.log("response is back")
        console.log(text);

        obs = text;
        Object.values(obs).forEach((val) => {

            let temp = document.createElement("tr")
            Object.values(val).forEach((value) => {
                let temp2 = document.createElement("td")
                console.log(value)
                temp2.innerText = value;
                temp.append(temp2);


            });
            table_unready2.append(temp);
        } );

    });