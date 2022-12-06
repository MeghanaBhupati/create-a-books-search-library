

<?php
//create connection to Oracle
$conn=oci_connect("phphol","welcome","//localhost/orcl");
$query='select*from departments';
$stid=oci_parse($conn,$query);
$r=oci_execute($stid);
//fetch the results in an associative array
print'<table border="1">';
while($row=oci_fetch_array($stid,OCI_RETURN_NULLS+OCI_ASSOC)){
  print'<tr>';
  foreach($row as $item){
    print'<td>'.($item?htmlentities($item):'').'</td>';
  }
  print'</tr>';
}
print'</table>';
//close the oracle connection
oci_close($conn);
?>
    
