<?php

include 'config.php';
if(isset($_POST['submit']))
{ 
   $count = $_POST['count'];
   $id=$_POST["department"];
   $sql1 = "SELECT *  FROM bulkrecordmaster WHERE  DeptCode = {$id}";
   $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful."); 

   if(mysqli_num_rows($result1)>0){
    echo "<script>alert('There is some problem while adding the records');
    window.location= 'http://localhost/AddFetchRecordsbyhimanshuchauhan/';
    </script>";
   }else{
    for($i=0;$i<$count;$i++)
    {
        $empcode=$_POST["department"];
        $name=$_POST["name"][$i];
        $contact=$_POST["contact"][$i];
        if(!empty( $empcode) && !empty($name) && !empty($contact))
        {
            $sql = "INSERT INTO bulkrecordmaster(DeptCode,Name,Contact) VALUE('$empcode','$name','$contact')";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful."); 
            echo "<script>alert('Records added successfully');
    window.location= 'http://localhost/AddFetchRecordsbyhimanshuchauhan/';
    </script>";
        }
       
    }
    
   }
   
}else{
    echo "<script>alert('There is some problem while adding the
    records');
    window.location= 'http://localhost/AddFetchRecordsbyhimanshuchauhan/';
    </script>";
}

?>
