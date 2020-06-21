<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>
    <body>
        <body class="background">
            <div>
                <div class="calculator">
                        <div class="screen">
                            <input type="text" id="result" disabled>
                        </div>
                   
                        <div class="all-keys">
                                <div class="top-keys">
                                    <input type="button" value="C" class="button cancel"  onclick="clr()">
                                    <div class="space"></div>
                                    <div class="space"></div>
                                    <input type="button" value="+" class="button plus"  onclick="display('+')">
                                </div>
                            <div class="keys">
                                <input type="button" value="7" class="button" onclick="display('7')">
                                <input type="button" value="8" class="button"  onclick="display('8')">
                                <input type="button" value="9" class="button"  onclick="display('9')">
                                <input type="button" value="/" class="button"  onclick="display('/')">
                                <input type="button" value="4" class="button"  onclick="display('4')">
                                <input type="button" value="5" class="button"  onclick="display('5')">
                                <input type="button" value="6" class="button"  onclick="display('6')">
                                <input type="button" value="-" class="button"  onclick="display('-')">
                                <input type="button" value="1" class="button"  onclick="display('1')">
                                <input type="button" value="2" class="button"  onclick="display('2')">
                                <input type="button" value="3" class="button"  onclick="display('3')">
                                <input type="button" value="*" class="button"  onclick="display('*')">
                                <input type="button" value="0" class="button"  onclick="display('0')">
                                <input type="button" value="00" class="button"  onclick="display('00')">
                                <input type="button" value="." class="button"  onclick="display('.')">
                                <input type="button" value="=" class="button"  onclick="solve()">
                        
                            </div>       
                     </div>
                </div>
            </div>          
            
        </body>
        <script>
            
// Displayed result

window.display =function(val) {
    document.getElementById("result").value+=val
};

// Evaluate the input and computes the result

function solve() 
{ 
    let x = document.getElementById("result").value 
    let y = eval(x) 
    document.getElementById("result").value = y 
} 

//Clear display 
function clr() 
{ 
    document.getElementById("result").value = "" 
} 
        </script>
        </html>