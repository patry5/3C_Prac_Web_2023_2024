<?php
$percent = 65;
if ($percent<=100 && $percent >=96){
    echo("Celujący");
}
else if ($percent<=95 && $percent >=90){
    echo("Bardzo dobry");
}
else if ($percent<=73 && $percent >=89){
    echo("Dobry");
}
else if ($percent<=50 && $percent >=73){
    echo("Dostateczny");
}
else if ($percent<=30 && $percent >=49){
    echo("Dopuszczajacy");
}
else if ($percent<=29){
    echo("Niedostateczny");
}
?>