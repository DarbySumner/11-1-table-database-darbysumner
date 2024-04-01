<?php 
//BRIAN I COMMENTED OUT THE PHP FOR NOW SO YOU CAN SEE MY TABLE IS WORKING, I JUST CANT PULL FROM THE DATABASE AND I DON'T KNOW HOW TO CONNECT WITH FILEZILA CORRECTLY YET.

// $servername = "localhost"; 
// $username = "root"; 
// $password = ""; 
// $databasename = "products"; 

 // read rows from database table
 //$sql = "SELECT * FROM 'products';";

// create connection 
// $conn = new mysqli($servername, $username, $password, $databasename); 

 // The above code keeps giving me errors especially


 // $result = $connection->query($sql);

 // I know I need to add a while loop and echo to output the data of each row but I am unsure how to properly code it, I believe it would be something like this:
    
    // output data of each row
    // while($row = $result->fetch_assoc())  { 
       // echo 
          //(not sure what goes here to echo it)
    // } 
// } 

// else { 
   // echo "0 results"; 
// } 

//close the connection
// $conn->close(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="title">
            <h1>Menu</h1>
        </section>
        <section class="products">
            <table>
                <thead>
                    <tr>
                        <th>Menu Item</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Burger</td>
                        <td>$9.50</td>
                    </tr>
                    <tr>
                        <td>Fries</td>
                        <td>$2.50</td>
                    </tr>
                    <tr>
                        <td>Soda</td>
                        <td>$1.50</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>