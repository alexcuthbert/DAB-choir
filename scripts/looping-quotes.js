// get quotes, 


// push into array
   
   let i = 0;
   let text ="";
   

function headlineSwap() {
   if (i < 5) {
       text = headlines[i];
       i++;
       }
   else {
       text = "I hate sand...";
       i = 0;
       }

   document.getElementById('heroText').innerHTML = text
   }
