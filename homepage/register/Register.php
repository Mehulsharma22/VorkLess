<!DOCTYPE html>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
  <form action="insert.php" method="Post">
    <table>
        <tr>
             <td>Name:</td>
             <td><input type="text" name="Name" class="textInput"></td>
           </tr>
           <tr>
             <td>Age:</td>
             <td><input type="int" name="Age" class="textInput"></td>
           </tr>
           <tr>
             <td>Gender:</td>
             <td><input type="radio" name="Gender" value="m">Male
             <td><input type="radio" name="Gender" value="f">Female
             </td> 
           </tr>
           <tr>
             <td>Address:</td>
             <td><input type="text" name="Address" class="textInput"></td>
           </tr>
           <tr>
             <td>Phone_no:</td>
             <td><input type="bigint" name="Phone_no" class="textInput"></td>
           </tr>
            <tr>
             <td>Trade:</td>
             <td><input type="text" name="Trade" class="textInput"></td>
           </tr>
           <tr>
           <td> <input type="submit" value="Submit"></td>
         </tr>
        </table>
      </form>
    </body>
    </html>


