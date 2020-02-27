<?php
/* @var $this ComputerhomeController */

$this->breadcrumbs=array(
	'Computerhome',
);
?>

<?php $report = computer::model()->findAll(); 
    $counTn=0 ;
    $counTp=0 ;
    $counTa=0 ;
    $counTc=0 ;
    $len = count($report);
    foreach(array_reverse($report )as $val)      
    {      
      $id = $val->id;   
      $complaint =$val->complaint;
      $name = $val->name;
      $location = $val->location;
      $date = $val->date;
      $contact = $val->contact;
      $status = $val->status;
      $counTn++;
      if ($status == "pending"){$counTp++;}
      if ($status == "ATTEND(pending) "){$counTa++;}
      if ($status == "COMPLETED"){$counTc++;}
    } ?>
<h1>WELCOME TO ONLINE COMPLAINT PORTAL</h1>
<ul><h2>Data Analysis</h2><br>
    <?php if(Yii::app()->user->name==='administrator'){ 
    echo "<li><p><a href='../computer/admin' style=\"color: #FFA500;\">Number of Complaints-- ".$counTn." </a></p></li>";
    echo "<li><p><a href='../computer/adminpending' style=\"color: #FF0000;\">Pending Complaints-- ".$counTp." </a></p></li>";
    echo "<li><p><a href='../computer/adminattended' style=\"color: #800080;\">Attended Complaints but are still not completed-- ".$counTa." </a></p></li>";
    echo "<li><p><a href='../computer/admincompleted' style=\"color: #0000FF;\">Completed Complaints-- ".$counTc."</a></p></li>";
    echo "</ul>";}elseif(Yii::app()->user->name==='fieldengineer'){
    echo "<li><p style=\"color: #FFA500;\">Number of Complaints-- ".$counTn." </p></li>";
    echo "<li><p><a href='../computer/adminpending' style=\"color: #FF0000;\">Pending Complaints-- ".$counTp." </a></p></li>";
    echo "<li><p><a href='../computer/adminattended' style=\"color: #800080;\">Attended Complaints but are still not completed-- ".$counTa." </a></p></li>";
    echo "<li><p><a href='../computer/admincompleted' style=\"color: #0000FF;\">Completed Complaints-- ".$counTc." </a></p></li>";
    echo "</ul>";}
?>