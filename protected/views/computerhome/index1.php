<?php
/* @var $this ComputerhomeController */

$this->breadcrumbs=array(
	'Computerhome',
);
?>
<h1><?php echo "WELCOME TO ONLINE COMPLAINT PORTAL"; ?></h1>
 
<?php
$report = computer::model()->findAll(); 

   
$counT=1 ;
$coUnT=$counT;
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
                             
                  if ($status == "pending")
                  {
        echo"        <table style=\"width: 100%; border: 1PX solid\">
<tr >

             
<td style=\"color: #FF0000; font-weight: bold; width :20PX;border: 2PX solid;\">$counT
     </td><td style=\"color: #FF0000;width :530PX; font-weight: bold; border: 2PX solid;\"> <B>$complaint</B></br>DATED:-$date, LOCATION:-$location
     </td><td style=\"color: #FF0000; width :130PX;font-weight: bold; border: 2PX solid;\">$name</br>CONTACT:-$contact
     </td><td style=\"color: #FF0000; width :130PX;font-weight: bold; border: 2PX solid;\">$status
      </td><td style=\"color: #FF0000; width :135PX;font-weight: bold; border: 2PX solid;\"><a href=../computer/$id dir=ltr> CLICK HERE  </a></td>
     </tr> 
</table> ";
                 $coUnT++;
                 $counT++;
                 if ($coUnT > 5){break;}
                  }
  }  
$coUnT=1 ;

foreach(array_reverse($report )as $val)      
{      
                $id = $val->id;   
                $complaint =$val->complaint;
                  $name = $val->name;
                  $location = $val->location;
                  $date = $val->date;
                  $contact = $val->contact;
                  $status = $val->status;
                             
                  if ($status == "ATTEND(pending) ")
                  {
        echo"        <table style=\"width: 100%; border: 1PX solid\">
<tr >

             
<td style=\"color: #800080; font-weight: bold; width :20PX;border: 2PX solid;\">$counT
     </td><td style=\"color: #800080;width :530PX; font-weight: bold; border: 2PX solid;\"> <B>$complaint</B></br>DATED:-$date, LOCATION:-$location
     </td><td style=\"color: #800080; width :130PX;font-weight: bold; border: 2PX solid;\">$name</br>CONTACT:-$contact
     </td><td style=\"color: #800080; width :130PX;font-weight: bold; border: 2PX solid;\">$status
      </td><td style=\"color: #800080; width :135PX;font-weight: bold; border: 2PX solid;\"><a href=../computer/$id dir=ltr> CLICK HERE  </a></td>
     </tr> 
</table> ";
                 $coUnT++;
                 $counT++;   
                 if ($coUnT > 5){break;}
                  }
  }  
$coUnT=1 ;

foreach(array_reverse($report )as $val)      
{      
                $id = $val->id;   
                $complaint =$val->complaint;
                  $name = $val->name;
                  $location = $val->location;
                  $date = $val->date;
                  $contact = $val->contact;
                  $status = $val->status;
                  $workDoneOn = $val->workDoneOn;
               
                  if ($status == "COMPLETED")
                  {
        echo"        <table style=\"width: 100%; border: 1PX solid\">
<tr >

             
<td style=\"color: #0000FF; font-weight: bold; width :20PX;border: 2PX solid;\">$counT
     </td><td style=\"color: #0000FF;width :530PX; font-weight: bold; border: 2PX solid;\"> <B>$complaint</B></br>DATED:-$date, LOCATION:-$location
     </td><td style=\"color: #0000FF; width :130PX;font-weight: bold; border: 2PX solid;\">$name</br>CONTACT:-$contact
     </td><td style=\"color: #0000FF; width :130PX;font-weight: bold; border: 2PX solid;\">Completed on <br>$workDoneOn
      </td><td style=\"color: #0000FF; width :135PX;font-weight: bold; border: 2PX solid;\"><a href=../computer/$id dir=ltr> CLICK HERE  </a></td>
     </tr> 
</table> ";
                 $coUnT++;
                 $counT++;   
                 if ($coUnT > 5){break;}
                  }        
                  
  }
?>
