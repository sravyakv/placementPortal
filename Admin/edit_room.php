<?php 
require_once('../connection.php');
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update company set comp_name='$comp_name',comp_id='$comp_id',salary_range='$salary_range' where id='".$_GET['id']."'");
$err="<font color='blue'>Company updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from company where id ='".$_GET['id']."'");
$res=mysqli_fetch_array($q);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT OPTION</title>
</head>
<body>

<form class="form-group" method="POST" action="">

<p><?php echo @$err;?></p>
<div class="form-group">
    <label for="exampleInputEmail1">COMPANY_NAME</label>
    <input type="text" class="form-control" name="comp_name"  value="<?php echo $res['comp_name'];?>" required>
</div>


<div class="form-group">
    <label for="comp_id">COMPANY_ID</label>
    <input type="text" class="form-control" name="comp_id"  value="<?php echo $res['comp_id'];?>" required>
  </div>


  <div class="form-group">
    <label for="salary_range">SALARY_RANGE</label>
    <input type="text" class="form-control" name="salary_range"   value ="<?php echo $res['salary_range'];?>" required>
  </div>

  <input type="submit" class="btn btn-success" value="UPDTE COMPANY" name="update" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>


</body>
</html>