<?php     
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['dob']=='' || $_REQUEST['number']=='' || $_REQUEST['email']=='' || $_REQUEST['marks']=='' || $_REQUEST['universityName']=='' || $_REQUEST['universityEmail']=='' || $_REQUEST['reason']=='')
{
Echo "Please fill the empty field.";
}
Else
{
$sql="insert into users(name,dob,number,email,marks,universityName,universityEmail,reason) values('".$_REQUEST['name']."', '".$_REQUEST['dob']."', '".$_REQUEST['number']."', '".$_REQUEST['email']."', '".$_REQUEST['marks']."', '".$_REQUEST['universityName']."', '".$_REQUEST['universityEmail']."','".$_REQUEST['reason']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>