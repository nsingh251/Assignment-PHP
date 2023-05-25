
<?php
// PHP Program to Find Grade of a Student using Switch Case

// These are the marks of five subjects
error_reporting(0);

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$class = $_POST['class'];
$email = $_POST['email'];
$sub_1 = $_POST['English'];
$sub_2 = $_POST['Maths'];
$sub_3 = $_POST['History'];
$sub_4 = $_POST['Science'];;
$sub_5 = $_POST['Geography'];;
$sub_6 = $_POST['Hindi'];
$remark = $_POST['remark'];

// It will calculate total, average, percentage, and grade
$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5 + $sub_6;
$average = $total / 6.0;
$percentage = ($total / 600.0) * 100;

/* will calculate the Grade */
if ($percentage>=75)
{
	$grade = "Distinction";
}
else if($percentage>=60)
{
	$grade = "First Class";
}
else if($percentage>=33)
{
	$grade = "Pass";
}
else
{
	$grade = "Fail";
}
?>
<html>
<head>
  <title> Student Report Card </title>
  
  <style>
    html {
  font-family:arial;
  font-size: 18px;
}

td {
  border: 1px solid #726E6D;
  padding: 15px;
}

thead{
  font-weight:bold;
  text-align:center;
  background: #625D5D;
  color:white;
}

table {
  border-collapse: collapse;
}

.footer {
  text-align:right;
  font-weight:bold;
}

tbody >tr:nth-child(odd) {
  background: #D1D0CE;
}
.head{
    background-color: #008080;
}

    </style>
</head>

<body><center>
<h2> <u>Student Report Card </u></h2>
  <table>
    <thead>
      <tr class="head">
        <td >Student ID : <?php echo $id;?> </td>
        <td > Name : <?php echo $fname . " ". $lname;?> </td>
        <td > Class :  <?php echo $class;?> </td>
        <td colspan="2"> Email :  <?php echo $email;?> </td>
      </tr>
      <tr>
        <td>S.NO. </td>
        <td colspan="2"> Subjects </td>
        <td  colspan="2"> Marks </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td colspan="2"> English </td>
        <td colspan="2"><?php echo $sub_1;?></td>
        

      </tr>
      <tr>
        <td>2. </td>
        <td colspan="2">Maths </td>
        <td colspan="2"> <?php echo $sub_2;?></td>
        
       
      </tr>
      <tr>
        <td>3. </td>
        <td colspan="2">History </td>
        <td colspan="2"> <?php echo $sub_3;?></td>
        
       
      </tr>
      <tr>
        <td>4.</td>
        <td colspan="2">Science</td>
        
        <td colspan="2"> <?php echo $sub_4;?> </td>
       
      </tr>
      <tr>
        <td>5. </td>
        <td colspan="2">Geography </td>
        
        <td colspan="2"> <?php echo $sub_5;?> </td>
       
      </tr>
      <tr>
        <td>6. </td>
        <td colspan="2">Hindi </td>
        
        <td colspan="2"> <?php echo $sub_6;?> </td>
       
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3" class="footer">Total</td>
        <td> <?php echo $total;?> </td>
        <td colspan="1">600(Out Of) </td>
      </tr>
      <tr>
        <td colspan="3" class="footer">Average</td>
        <td colspan="2"><?php echo $average;?> </td>
      </tr>
      <tr>
        <td colspan="3" class="footer">Percentage</td>
        <td colspan="2"><?php echo $percentage ."%";?> </td>
      </tr>
      <tr>
        <td colspan="3" class="footer">Grade</td>
        <td colspan="2"><?php echo $grade;?> </td>
      </tr>
      <tr>
        <td   class="footer">Remarks</td>
        <td colspan="4" ><?php echo $remark;?> </td>
      </tr>
  </tfoot>
  </table>
  </center>
</body>

</head>
</html>
