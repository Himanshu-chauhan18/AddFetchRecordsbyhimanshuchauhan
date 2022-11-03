<html>

<head>

    <script type='text/javascript'>
        function addFields() {
            // Generate a dynamic number of inputs
            var number = document.getElementById("member").value;
            document.getElementById("count").value = number;
            // Get the element where the inputs will be added to
            var container = document.getElementById("container");
            // Remove every children it had before

            container.appendChild(document.createTextNode("Department Code  "));
            var input = document.createElement("input");
            input.type = "text";
            input.name = "department";
            input.required = true;
            input.style = 'margin-right:20px; margin-top:20px; margin-left:20px;'
            container.appendChild(input)

            container.appendChild(document.createElement("br"));
            for (i = 0; i < number; i++) {
                // Append a node with a random text
                container.appendChild(document.createTextNode("Name  "));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "name[]";


                input.style = 'margin-right:20px; margin-top:20px;'
                container.appendChild(input)

                container.appendChild(document.createTextNode("Contact  "));
                var input = document.createElement("input");
                input.type = "text";
                input.name = "contact[]";

                container.appendChild(input)
                    // Append a line break 
                container.appendChild(document.createElement("br"));
            }


            var input = document.createElement("input");
            input.type = "submit";
            input.name = "submit";
            input.style = 'margin-right:20px; margin-top:20px; background-color:green; color:white; padding:8px; border-style:none; border-radius:10px;';

            container.appendChild(input)
        }

        function search() {
            // Generate a dynamic number of inputs
            var number = document.getElementById("member").value;

        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container border border-dark mt-5 p-4 shadow-lg p-3  bg-white rounded">
        <div class="row">
            <!-- first-div -->
            <div class="col-sm-6 border-right border-dark mr-5">
            <h4 class="mb-5"> Enter  Records</h4>
                Enter number of Rows:<input type="text" id="member" name="member" class="form-control-sm ml-2" value="">
                <button id="filldetails" onclick="addFields()" class="submit btn btn-warning">Add Rows</button>
                <form action="dynamicappend.php" method="post">
                    <input type="hidden" value="" id='count' name="count">
                    <div id="container" />
                </form>
            </div>
        </div>
        <div class="row">
            <!-- first-div -->
            <div class="col-sm-12">
                <div id="main-content">
                    <h4 class="mb-3"> Search Records</h4>
                    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="text" name="sid" class="mb-2 form-control" />
                        </div>
                        <input class="submit btn btn-warning" type="submit" name="showbtn" value="Show" id="addblock"  />
                    </form>

                    <?php


      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM  bulkrecordmaster WHERE DeptCode = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
       
          ?>
           <label>Department Code</label>
           <input type="text" disabled name="id" value="<?php echo $stu_id ?>" class="mb-5 form-control" />
          <?php
        
        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
                        <form class="post-form" action="updatedata.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo  $stu_id; ?>" />
                               
                                <label>Name</label>
                                <input type="text" name="name[]" readonly value="<?php echo $row['Name']; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" class="alphaonly" />
                                <label>Contact</label>
                                <input type="text" name="contact[]" value="<?php echo $row['Contact']; ?>"  />
                            </div>

                            <?php
  }
}
}

    ?>

<?php
if(isset($_POST['showbtn'])){
?>

<input class="btn btn-warning" type="submit" value="Update" id="button"  />
                        </form>
<?php
}
?>
                </div>
            </div>
        </div>
        <!-- <input type="text" name="fname" value="" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"  class="alphaonly" /> -->
        <!-- container end -->
    </div>



</body>

</html>