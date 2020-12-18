<?php
$a=10;
echo$a;
//define array variable
$a=array();
$b=array(1,2,3,4,5,);
$b=array("a","b","c","d");
echo$b[0];
echo$b[1];
echo$b[2];
echo"<BR>";
print_r($b);

//can define each address
$bb[0]=1;
$bb[1]=2;
$bb[2]=3;
$bb[3]=4;
$bb[4]=5;

$bb[0]="a";
$bb[1]="b";
$bb[2]="c";
$bb[3]="d";
echo"<HR>";
//Ex.2
$b=array(1,2,3,4,5,);
$b[3]=$b[3]+10;
echo$b[3];
echo"<HR>";
//Ex.3
$b=array(1,2,3,4,5,);

for($i=1;$i<=4;$i++)
{
echo$b[$i];
}
echo"<HR>";
$score=0;
$b=array(50,55,60,65,70,);
if($score[0]>=60)
  echo"pass";
else
  echo"fail";
echo"<HR>";
for($i=1;$i<=4;$i++)
{
if($score[$i]>=60)
   echo"pass";
else
   echo"fail";
   echo"<BR>";
}
?>
