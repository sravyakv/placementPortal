<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select comp_id from company where comp_id= '$comp_id' ");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This company already added</font>";
}
else
{
if($comp_name == 'comp_name one')
{
  $i = 1;
}else if($comp_name == 'comp_name two'){
  $i = 2;
}
else if($comp_name == 'comp_name three'){
  $i = 3;
}
else if($comp_name == 'comp_name four'){
  $i = 4;
}
else if($comp_name == 'comp_name five'){
  $i =5;
}
$query="insert into company (comp_name,comp_id,salary_range) values('$comp_name','$comp_id','$salary_range')";
mysqli_query($conn,$query);


$err="<font color='blue'>COMPANY ADDED</font>";

}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE CAMPUS RECRUITMENT SYSTEM</title>
</head>
<body>

<form class="form-group" method="POST" action="">

<p><?php echo @$err;?></p>
<div class="form-group">
    <label for="exampleInputEmail1">COMPANY_NAME</label>
    <select class="form-control form-control-lg" name="comp_name" placeholder="Enter_Compnay_name" required>
  <option>select company</option>
  <option>Google</option>
  <option>facebook</option>
  <option>amazon</option>
  <option>infosys</option>
  <option>wipro</option>
</select> 
</div>


<div class="form-group">
    <label for="comp_id">COMPANY_ID</label>
    <input type="text" class="form-control" name="comp_id" placeholder=" Enter_Company_id" required>
  </div>


  <div class="form-group">
    <label for="fee">SALARY_RANGE</label>
    <input type="text" class="form-control" name="salary_range"  placeholder="Enter_the_Salary_Range" required>
  </div>

  <input type="submit" class="btn btn-success" value="ADD COMPANY" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>


</body>
</html>