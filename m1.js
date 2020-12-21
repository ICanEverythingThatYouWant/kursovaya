
const table_unready1 = document.querySelector('#t1');
const table_unready2 = document.querySelector('#t2');
const table_unready3 = document.querySelector('#t3');
const table_unready4 = document.querySelector('#t4');
const table_unready5 = document.querySelector('#t5');
const table_unready6 = document.querySelector('#t6');
const table_unready7 = document.querySelector('#t7');
const table_unready8 = document.querySelector('#t8');
const table_unready9 = document.querySelector('#t9');



var obj =""

let url = "http://localhost/test/is43dolg.php";
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
            table_unready1.append(temp);
        } );

    });