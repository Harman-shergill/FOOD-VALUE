<?php
session_start();
if(!isset($_SESSION['email'])){ //check
    echo "<script>window.location.assign('adminlogin.php?msg=Please Login!!')</script>";
}
include("header1.php");
?>
    <div class="container my-5">
        <h1 class="text-center">View Enquiry</h1>
      
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
                <th>Subject</th>
                <th>Message</th>
                <th>User type</th>
                
            </tr>
            <?php
                include("config.php");
                $query="SELECT * from `enquiry`";
                $result=mysqli_query($connect,$query);
                $sno=1;
               while($data=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $data['name']?></td>
                   
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['subject']?></td>
                    <td><?php echo $data['message']?></td>
                    <td><?php echo $data['user_type']?></td>
                    
                    

                  
                   
                    
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