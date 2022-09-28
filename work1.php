<?php
$x=[1,2,3,4,5,6];
$b=$x[0];
for($i=1;$i<count($x);$i++)
{
    if($b<$x[$i])
    {
        $b=$x[$i];
    }
}
    echo "array element is:1,2,3,4,5,6";
    echo"<br>";
    echo " \n large element: ",$b,"\n" ;
    echo"<br>";
$sm=$x[0];
for($i=0;$i<count($x);$i++)
{
    if($sm>$x[$i])
    {
        $sm=$x[$i];
    }
}
    echo " \n small element: ",$sm,"\n" ;



?>
