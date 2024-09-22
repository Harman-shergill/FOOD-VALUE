<?php
session_start();
if(!isset($_SESSION['email'])){ //check
    echo "<script>window.location.assign('adminlogin.php?msg=Please Login!!')</script>";
}
include("header1.php");
?>
    <div class="container my-5">
        <h1 class="text-center">View User</h1>
      
        <?php
       
        if(isset($_GET['msg'])){
          ?>
          <div class="alert alert-success"><?php echo $_GET['msg']?></div>
          <?php  
        }
        ?>
        <table class="table table-bordered table-striped"  >
       
            <tr>
                <th>SNO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                
            </tr>
            <?php
                include("config.php");
                $query="SELECT * from `user`";
                $result=mysqli_query($connect,$query);
                $sno=1;
               while($data=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $data['username']?></td>
                   
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['contact']?></td>
                    <td><?php echo $data['address']?></td>
                    
                    

                  
                   
                    
                </tr>
            <?php
            $sno++;
            }
            ?>
        </table>
    </div>
<?php
include("footer.php");
?>