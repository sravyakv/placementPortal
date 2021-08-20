<?php 



$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>You have not Applied for any Company!!!</h2>";
}
else
{
?>


<h2>All Details</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>SR.NO</th>
		<th>COMPANY NAME</th>
		<th>COMAPNY ID</th>
		<th>EXCEPECTED SALARY</th>
		<th>FOOD STATUS</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['comp_name']."</td>";
echo "<td>".$row['comp_id']."</td>";
echo "<td>".$row['salary_ex']."</td>";
echo "<td>".$row['food_status']."</td>";

echo "</Tr>";
$i++;
}

?>



<table class="table table-bordered">
	<Tr class="success">
		<th>WORK FROM</th>
		<th>DURATION</th>
		<th>FINAL SALARY</th>
		<th>COURCE</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['work_from']."</td>";
echo "<td>".$row['duration']."</td>";
echo "<td>".$row['final_salary']."</td>";
echo "<td>".$row['course']."</td>";

echo "</Tr>";
}



?>

<table class="table table-bordered">
	<Tr class="success">
		<th>REGISTER NUMBER</th>
		<th>FNAME</th>
		<th>MNAME</th>
		<th>LNAME</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['reg_no']."</td>";
echo "<td>".$row['sfname']."</td>";
echo "<td>".$row['smname']."</td>";
echo "<td>".$row['slname']."</td>";

echo "</Tr>";
}



?>


<table class="table table-bordered">
	<Tr class="success">
		<th>GENDER</th>
		<th>CONTACT NUMBER</th>
		<th>EMAIL ID</th>
		<th>EMERGENCY CONTACT NUMBEER</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['contact_no']."</td>";
echo "<td>".$row['email_id']."</td>";
echo "<td>".$row['emer_contact_no']."</td>";

echo "</Tr>";
}



?>

<table class="table table-bordered">
	<Tr class="success">
		<th>GUARDIAN NAME</th>
		<th>GUARDIAN NUMBER</th>
		<th>GUARDIAN ADDRESS</th>
		
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['guardian_name']."</td>";
echo "<td>".$row['guardian_no']."</td>";
echo "<td>".$row['guad_address']."</td>";


echo "</Tr>";
}

?>

<table class="table table-bordered">
	<Tr class="success">
		<th>STUDENT ADDRESS</th>
		<th>CITY</th>
		<th>PINCODE</th>	
		
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from job_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['stu_address']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['pincode']."</td>";


echo "</Tr>";
}

?>
<!--<table class="table table-bordered">

<h2>Compnay Realted Details</h2>
	<Tr class="success">
		<th>SR.NO</th>
		<th>BLOCK NO</th>
		<th>COMPANY ID</th>
		<th>FOOD_STATUS</th>
		</Tr>-->
		<?php 

$ro1 = mysqli_query($conn,"select * from `student-job-detail` where email='".$_SESSION['user']."'");
$ro1r = mysqli_num_rows($ro1);
$i=1;
while($row=mysqli_fetch_array($ro1))
{

/*echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['block-id']."</td>";
echo "<td>".$row['comp_id']."</td>";
echo "<td>".$row['food_status']."</td>";


echo "</Tr>";*/
}

?>




<!--<table class="table table-bordered">

	<Tr class="danger">
		<th>WORK HOURS</th>
		<th>TYPE OF CANDIDATES</th>
		<th>NEED</th>
		</Tr>-->
		<?php 

$ro1 = mysqli_query($conn,"select * from `student-job-detail` where email='".$_SESSION['user']."'");
$ro1r = mysqli_num_rows($ro1);
$i=1;
while($row=mysqli_fetch_array($ro1))
{

echo "<Tr>";

/*echo "<td>".$row['work_hours']."</td>";
echo "<td>".$row['type_of_condi']."</td>";
echo "<td>".$row['need']."</td>"; */


echo "</Tr>";
}

?>

</table>
<?php }?>
