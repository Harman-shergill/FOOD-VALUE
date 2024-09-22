<?php
include("header_ngo.php");
?>
<div class="container">
    <div class="row">
        <?php
        include("config.php");
        $query="Select * from `ngo`";
        $result=mysqli_query($connect,$query);
        while($data=mysqli_fetch_array($result)){

       ?>
        <div class="col-md-4 p-5">
        <div class="card" style="width: 18rem;">
        <img src="images/<?php echo $data['thumbnail']?>" class="card-img-top" alt="..." style="height:200px;">
            <div class="card-body">
            <h5 class="card-title" style="color:black"><?php echo $data['ngo_name']?></h5>
<!--             
            <a href="update_status.php?id=<?php echo $data['id']?>" class="btn btn-primary">Update status</a>
            <a href="view_status.php?id=<?php echo $data['id']?>" class="btn btn-primary">View status</a> -->
          
            </div>
            
        </div>
        </div>
        <?php
         }
         ?>
    </div>
</div>
<?php
include("footer.php");
?>