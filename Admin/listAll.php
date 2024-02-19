<?php 

include('includes/db_conn.php');

$sql = "SELECT * FROM main_enrolments";

$result = $conn->query($sql);

?>


      
<div class="main">
<div class="row">
<link rel="stylesheet" href="css/styles.css">
<div class="panel panel-default">
<div class="panel-heading">Student List - Registration System</div>
                    <div class="pane-body">
                <table class="table">
                    <thead>
                        <tr>
                        
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Couse</th>
                        <th scope="col">Mode Type</th>
                        <th scope="col">Campus</th>
                       

                    
                       
                    </thead>
                        <tbody>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
                            <tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['mode']; ?></td>

<td><?php echo $row['campus']; ?></td>
<


</tr>      

                            <?php       }

            }

        ?>            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
      
            <a href="29001779@myboston.co.za">email 29001779@myboston.co.za</a>
        </div>
    </footer>
</body>
</html>