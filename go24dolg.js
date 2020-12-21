const table_unready1 = document.querySelector('#t1');




var obj =""

let url = "http://localhost/test/go24dolg.php";
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