<?php
session_start();
if(!isset($_SESSION['email'])){ //check
    echo "<script>window.location.assign('adminlogin.php?msg=Please Login!!')</script>";
}
$email=$_SESSION['email']; //store
include("header1.php");
?>
    <div class="container my-5">
        <h1 class="text-center">View NGO</h1>
      
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
                <th>NGO Name</th>
                <th>NGO Image</th>
                <th>Email</th>
                <th>Description</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
               
            </tr>
            <?php
                include("config.php");
                $query="SELECT * from `ngo`";
                $result=mysqli_query($connect,$query);
                $sno=1;
               while($data=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $data['ngo_name']?></td>
                    <td>
                        <img src="images/<?php echo $data['thumbnail']?>" style="height:200px" class="img-fluid w-80">
                       
                    </td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['description']?></td>
                    <td><?php echo $data['address']?></td>
                  
                    <td>
                       
                        <a href="update_ngo.php?id=<?php echo $data['id']?>" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="delete_ngo.php?id=<?php echo $data['id']?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
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