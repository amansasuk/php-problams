<style>
   
    table tr td{
        padding:0px;
        border:1px solid;
    }
</style>
<table >
<?php
for ($i=1; $i <=6 ; $i++) { 
    ?>
        <tr class ="tab">
    <?php
   for ($j=1; $j <=6 ; $j++) { 
    ?> 
    
   <td>
       <?php
    echo $j ." * ". $i ;
    echo " = ";
    echo $i * $j;
    echo"<br>";
    ?>

    </td>
    <?php
   }
   
    ?>
        </tr>
    <?php
}
?>
</table>