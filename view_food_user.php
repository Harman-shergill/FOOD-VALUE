<?php
session_start();
if(!isset($_SESSION['email'])){ //check
    echo "<script>window.location.assign('userlogin.php?msg=Please Login!!')</script>";
}
$em=$_SESSION['email'];
include("header_user.php");
?>
    <div class="container my-5">
        <h1 class="text-center">View Food</h1>
      
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
                <th>User Name</th>
                <th>Food Image</th>
                <th>Description</th>
                <th>Mfg date</th>
                <th>Expiry date</th>
                <th>Pickup address</th>
                <th>Status</th>
               
               
            </tr>
            <?php
                include("config.php");
                $query="SELECT * from `food` Where `email`='$em'";
                $result=mysqli_query($connect,$query);
                $sno=1;
               while($data=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $data['username']?></td>
                   
                    <td>
                        <img src="images/<?php echo $data['thumbnail']?>" style="height:200px" class="img-fluid w-80">
                       
                    </td>
                    <td><?php echo $data['description']?></td>
                    <td><?php echo $data['mfg_date']?></td>
                    <td><?php echo $data['exp_date']?></td>
                    <td><?php echo $data['pickup_address']?></td>
                    <td><?php echo $data['status']?></td>
                   
                    
                    
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