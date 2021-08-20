<?php
require_once('../connection.php');
extract($_POST);
$sqlchk4 = mysqli_query($conn,"select * from job_reg where email_id= '".$_SESSION['user']."'"); 
$chk4 = mysqli_num_rows($sqlchk4);
if($chk4 >0){
  $err= "<font color='red'>You Have Already applied, you can Apply for more companies!</font>";
}


if(isset($save)){
  
 

  $q = "insert into job_reg values('$comp_name','','$comp_id','$salary_ex','$wf','$date','$duration','$final_salary','$course','$rn','$sfn','$smn','$sln','$gen','$cn','$email','$ecn','$gn','$gcn','$gaddress','$saddress','$scity','$spc')";
  $run = mysqli_query($conn,$q);
  if($run){
    $err = "<font color='green'>Data Inserted</font>";

  }else{
    $err = "<font color='red'>ERROR!</font>";
  }


}

//select old data
// getting user fname Mname Lname
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);


//dropdown values for courses
$res3 = mysqli_query($conn,"SELECT course_fn FROM courses");
$row3 = mysqli_num_rows($res3);

//dropdown values for room_no
$res4 = mysqli_query($conn,"SELECT comp_id FROM company");
$row4 = mysqli_num_rows($res4);

//getting Student_register_no
$getr = mysqli_query($conn,"select regid from user where email = '".$_SESSION['user']."'");
$sregno = mysqli_fetch_array($getr);



?>



<form class="form-group" method="POST" action="">

<h3><?php echo @$err;?></h3>


<h3>Apply for Job</h3>
<br>

<div class="form-group">
    <label for="comp_name">COMPANY NAME</label>
    <input type="text" class="form-control" name="comp_name" placeholder="Eneter_Company_name"   required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">COMPANY_ID</label>
    <select class="form-control form-control-lg" name="comp_id" required>
    <?php
                    
										
											while($row= mysqli_fetch_array($res4))
											{
												echo "<option value='". $row['comp_id'] ."'>" .$row['comp_id'] ."</option>" ;
											}
											
										?>

</select> 
</div>




  <div class="form-group">
    <label for="fee">SALARY_ EXCEPECTATION</label>
    <input type="text" class="form-control" name="salary_ex" placeholder="Salary_excepectation" required>
  </div>

  <label for="fee">FOOD STATUS</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="wf" id="inlineRadio1" value="with food">
  <label class="form-check-label" for="inlineRadio1">with food</label>
  <input class="form-check-input" type="radio" name="wf" id="inlineRadio2" value="without food">
  <label class="form-check-label" for="inlineRadio2">without food</label>
</div>


<div class="form-group">
    <label for="date">WORK FROM </label>
    <input type="date" class="form-control" name="date"  placeholder="date" required>
 </div>

<div class="form-group">
    <label for="exampleInputEmail1">DURATION</label>
    <select class="form-control form-control-lg" name="duration" required>
  <option>1 month</option>
  <option>2 months</option>
  <option>3 months</option>
  <option>4 months</option>
  <option>5 months</option>
  <option>6 months</option>
  <option>7 months</option>
  <option>8 months</option>
  <option>9 months</option>
  <option>10 months</option>
  <option>11 months</option>
  <option>12 months</option>
  <option>1 year above</option>
</select> 
</div>


<div class="form-group">
    <label for="final_salary">FINAL SALARY</label>
    <input type="text" class="form-control" name="final_salary"  placeholder="Final_Salary" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">COURCE</label>
    <select class="form-control form-control-lg" name="course" required>
    <?php
                    
										
											while($row3 = mysqli_fetch_array($res3))
											{
												echo "<option value='". $row3['course_fn'] ."'>" .$row3['course_fn'] ."</option>" ;
											}
											
										?>
</select> 
</div>


<div class="form-group">
    <label for="fee">REGISTER NUMBER</label>
    <input type="text" class="form-control" name="rn" value="<?php echo $sregno['regid'];?>"  placeholder="*Enter your USN" required readonly>
  </div>

  
<div class="form-group">
    <label for="fee">STUDENT FNAME</label>
    <input type="text" class="form-control" name="sfn"  value="<?php echo $res['name'];?>" placeholder="total amount" required readonly>
  </div>


  <div class="form-group">
    <label for="fee">STUDENT MNAME</label>
    <input type="text" class="form-control" name="smn" value="<?php echo $res['mname'];?>"  placeholder="total amount" required readonly>
  </div>


  <div class="form-group">
    <label for="fee">STUDENT LNAME</label>
    <input type="text" class="form-control" name="sln" value="<?php echo $res['lname'];?>"  placeholder="total amount" required readonly>
  </div>

    
  <div class="form-group">
    <label for="fee">GENDER</label>
    <input type="text" class="form-control" name="gen"  value="<?php echo $res['gender'];?>"  placeholder="gender" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">CONTACT NUMBER</label>
    <input type="number" class="form-control" name="cn"  value="<?php echo $res['mobile'];?>" placeholder="total amount" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">STDENT EAMIL</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $res['email'];?>" placeholder="email" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">EMERGENCY CONACT NUMBER</label> 
    <input type="number" class="form-control" name="ecn"  placeholder="emergency contact number" required>
  </div>


  <div class="form-group">
    <label for="fee">GAURDIAN NAME</label>
    <input type="text" class="form-control" name="gn"  placeholder="guardian Name" required>
  </div>

  <div class="form-group">
    <label for="fee">GAURDIAN CONTACT NUMBER</label>
    <input type="number" class="form-control" name="gcn"  placeholder="emergency contact number" required>
  </div>


  <div class="form-group">
	<label class="control-label">GAURDIAN  ADDRESS</label>
	<textarea  rows="5" name="gaddress"  id="address" class="form-control" required="required"></textarea>
</div>

  <div class="form-group">
	<label class="control-label">STUDENT ADDRESS</label>
	<textarea  rows="5" name="saddress"  id="address" class="form-control" required="required"></textarea>
	</div>


  <div class="form-group">
    <label for="fee">CITY</label>
    <input type="text" class="form-control" name="scity"  placeholder="city" required>
  </div>

  <div class="form-group">
    <label for="fee">PINCODE</label>
    <input type="text" class="form-control" name="spc"  placeholder="Pincode" required>
  </div>



  <input type="submit" class="btn btn-success" value="Register" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>
