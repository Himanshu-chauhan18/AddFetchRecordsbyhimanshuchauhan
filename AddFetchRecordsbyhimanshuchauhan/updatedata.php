<?php

include 'config.php';

$id=$_POST['id'];

$sql1 = "SELECT Id,count(*) as empcount FROM bulkrecordmaster WHERE  DeptCode = {$id} ";
$result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
$rowcount=mysqli_fetch_all($result1);

$count=$rowcount[0][1];
$eid=$rowcount[0][0];

// echo "<pre>";
// print_r($rowcount);
// exit;

for($i=0;$i<$count;$i++)
{
    $name=$_POST['name'][$i];
    $contact=$_POST['contact'][$i];
 
    if(!empty($contact))
    {    
       $sql = "UPDATE bulkrecordmaster SET Contact = '{$contact}' WHERE Id={$eid}";
       $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    }
   
    $eid++;
}

if($result)
{
    echo "<script>alert('Records updated successfully');
    window.location= 'http://localhost/AddFetchRecordsbyhimanshuchauhan/';
    </script>";
}else{
    echo "<script>alert('Failed to update');
    window.location= 'http://localhost/AddFetchRecordsbyhimanshuchauhan/';
    </script>";
}

mysqli_close($conn);
?>
