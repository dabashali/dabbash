<?php
session_start();
if(isset($_SESSION['user_info'] ))
{
   include_once ('header.php');
   require_once('dbconnect.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-users"></i> Purchases</h2>
            </div>
        </div>
        <hr>       
<?php if(isset($_POST['Email']))
       {   
         $Email=trim($_POST['name']);
         echo $Email;
 ?>
        <div class="panel-body">
                                <div class="table-responsive"style="overflow-x:auto;">
                                    <table id="table" class="table table-striped table-bordered table-hover "
                                        id="dataTables-example">
                                        <thead>
                                            <tr>  
                                                <th>User Name</th>
                                                <th>Pruduct Name</th>
                                                <th>Description</th>
                                                <th>Number</th>
                                                <th>Price</th>
                                                <th>TotalPrice</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                                $sql="select p.* ,c.numbers,c.name  as ali from products p
                                                 JOIN content c on p.id=c.product_id where email=:Em";
                                                $stm= $conn -> prepare($sql);
                                                $stm->execute(array("Em"=>$Email)); 
                                                 if( $stm->rowCount())
                                                {
                                                  foreach( $stm->fetchall() as $row)
                                                  {
                                                  ?>
                                                <tr class="odd gradeX">
                                                <td><?php   echo $row['ali']; ?></td>
                                                <td><?php   echo $row['name']; ?></td>
                                                <td><?php   echo $row['description']; ?></td>
                                                <td><?php   echo $row['numbers']; ?></td>
                                                <td><?php   echo $row['price']; ?></td>
                                                <td><?php   echo '$' . $row['price'] * $row['numbers']; ?></td>
                                                <td><img src="upload/<?php echo $row['image'] ?>" style="border-radius:5px;margin-left:11px;" width="100px" height="100px"></td>
                                                 </tr>
                                            <?php 
                                                  }
                                                  }
                                                  else{
                                                    echo "no";
                                                  }
                                               ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            </div>

                            <?php  }
                            else 
                            {
                                echo "Email not correct"; }
                            ?>
            <div class="row">
            <div class="col-md-12">
            <form role="form" method="post" enctype="multipart/form-data">
                <label>Email</label>
                <div style="display:flex;" class="form-group">
                <input style="width:70%;" type="email" name="name" placeholder=" Enter email To See Your Purchases  "
                class="form-control" />
                <button style="margin-left:9px;" type="submit" name="Email"class="btn btn-primary">
                  Send Email</button>
                 </div>
            </form>
            </div>
            </div>
<!-- ___________________________________ -->
<?php
include_once('footer.php');
   }
else
    {
       header("location:../login.php");
    }
?>
