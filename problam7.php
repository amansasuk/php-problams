<table border = '2' style="width:270px;">
<style>
.black{
    background-color:black;
    width: 30px;
    height: 30px;
}
.white{
    background-color:white;
    width: 30px;
    height: 30px;
}

</style>
<?php
for($i=1; $i<=8;$i++)
{
    ?> <tr> 
    <?php
    for($j=1; $j<=8; $j++)
    {
        $sum = $i+$j;
        if($sum%2 == 0)
        {
        ?> <td  class="black"> </td>
        <?php
        }
        else
        {
        ?> <td class="white"> </td><?php
        }
        
    }
    ?> </tr> <?php
}
?>
</table>