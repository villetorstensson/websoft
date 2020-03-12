
var myList = [];

function jumpto(x){
    
    if (myList < 1) {
    fetch(x)
    .then((response) => {
        return response.json();
    })
    .then((myJson) => {
        console.log(myJson);
        
        console.log(myJson.Skolenheter.length)
        
        var str1 = "Skolenhetskod";
        var str2 = "Skolenhetsnamn";
        var str3 = "Kommunkod";
        var str4 = "PeOrgNr";

        str1 = str1.bold();
        str2 = str2.bold();
        str3 = str3.bold();
        str4 = str4.bold();
    
        myList.push(str1)
        myList.push(str2)
        myList.push(str3)
        myList.push(str4)
        for(var i=0; i < myJson.Skolenheter.length; i++){

        var item = myJson.Skolenheter[i];
        
        const {Skolenhetskod} = item;
        const {Skolenhetsnamn} = item;
        const {Kommunkod} = item;
        const {PeOrgNr} = item;
         myList.push(Skolenhetskod)
         myList.push(Skolenhetsnamn)
         myList.push(Kommunkod)
         myList.push(PeOrgNr)
            
        }
     }); 
        }else{
                myList = []

                fetch(x)
    .then((response) => {
        return response.json();
    })
    .then((myJson) => {
        console.log(myJson);
        
        console.log(myJson.Skolenheter.length)
        
        var str1 = "Skolenhetskod";
        var str2 = "Skolenhetsnamn";
        var str3 = "Kommunkod";
        var str4 = "PeOrgNr";

        str1 = str1.bold();
        str2 = str2.bold();
        str3 = str3.bold();
        str4 = str4.bold();
    
        myList.push(str1)
        myList.push(str2)
        myList.push(str3)
        myList.push(str4)
        for(var i=0; i < myJson.Skolenheter.length; i++){

        var item = myJson.Skolenheter[i];
        
        const {Skolenhetskod} = item;
        const {Skolenhetsnamn} = item;
        const {Kommunkod} = item;
        const {PeOrgNr} = item;
         myList.push(Skolenhetskod)
         myList.push(Skolenhetsnamn)
         myList.push(Kommunkod)
         myList.push(PeOrgNr)
            
        }
     });

              

        }
    }

(function () {
    'use strict';

    
    


        // 1. Create the button
        var fetchbutton = document.createElement("fetchbutton");
        fetchbutton.innerHTML = "Fetch Schools";

        // 2. Append somewhere
        var body = document.getElementsByTagName("body")[0];
        body.appendChild(fetchbutton);

        // 3. Add event handler
        fetchbutton.addEventListener ("click", function() {
            if(document.getElementById("container") === 'undefined'){
            document.getElementById("container").appendChild(generateTable(myList)); 
        }else{

            document.getElementById("container").innerHTML = "";
            document.getElementById("container").appendChild(generateTable(myList)); 

        }
            

        });


        function generateTable(data) {
            
                        // DRAW HTML TABLE
            var perrow = 4, // 4 items per row
            count = 0, // Flag for current cell
            table = document.createElement("table"),
            row = table.insertRow();
            
            for (var i of data) {
            var cell = row.insertCell();
            cell.innerHTML = i;


            // Break into next row
            count++;
            if (count%perrow==0) {
            row = table.insertRow();
            }
            }
        
            return table;
        }
      

        
        console.log('new');   
    console.log('Sandbox MEGA is ready!');
})();