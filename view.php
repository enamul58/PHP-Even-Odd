

<?php

    if(isset($_POST['btn'])){
        require_once 'EvenOdd.php';
        $evenOdd = new EvenOdd();
         $result = $evenOdd->calculateEvenOdd($_POST);
    }
?>

<form action="" method="post">
     <table>
         <tr>
             <th>First Number:</th>
             <td><input type="text" name="first_number"/></td>
         </tr>
         <tr>
             <th>Second Number:</th>
             <td><input type="text" name="second_number"/></td>
         </tr>
         <tr>
             <td></td>
             <td>
                 <input type="radio" name="check" value="Odd">ODD
                 <input type="radio" name="check" value="Even">EVEN
             </td>
         </tr>
         <tr>
             <td></td>
             <td>
                 <textarea name="txt_descripcion" cols="66" rows="10" id="txt_descripcion">
                     <?php
                     if(isset($result)){
                         echo $result;
                     }
                   ?>
                 </textarea>
             </td>
         </tr>
         <tr>
             <td></td>
              <td><input type="submit" name="btn"/></td>
         </tr>
     </table>
</form>