<style type="text/css">
table, th {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 13px;
}
</style>
</head>

<body>
<table frame="box" style="width:100%">
  <tr>
 <th colspan="2" style="font-size:23px">Message Board</th> 
  </tr>
<?php
$count = 1;
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
$file = "read.txt";
$lines = count(file($file));
fgets($myfile);
while(!feof($myfile)) {
  if($count != $lines){
   echo "<tr><td>".$count.". ".fgets($myfile) . "</td></tr>";
  }else{
  fgets($myfile);
  } 
$count = $count + 1;
}
$test = fread($myfile,filesize("read.txt"));
fclose($myfile);
?>
</table>
<br><br>

