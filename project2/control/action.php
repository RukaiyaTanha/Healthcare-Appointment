<?php 

include "../model/db.php";
$fnameError ="";
$emailError="";
$phoneError="";
$addressError="";
$genderError="";
$addressError="";
$additionalError ="";
$symptomsError="";
$specialError="";
$haserror="";
if(isset($_REQUEST['submit'])){
if(empty($_REQUEST['fullName'])){
    $fnameError="invalid";
     $haserror=1;
}
else{
    $fnameError=$_REQUEST['fullName'];
}


if(isset($_REQUEST['submit'])){
if(empty($_REQUEST['email'])){
    $emailError="Invalid";
     $haserror=1;
}
else{
   $emailError=$_REQUEST['email']; 
}
}

if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST['password'])|| !ctype_digit($_REQUEST['password'])){
        $phoneError="Invalid";
         $haserror=1;
    }
    else{
       $phoneError=$_REQUEST['password']; 
    }
    }

    if(isset($_REQUEST['submit'])){
        if(empty($_REQUEST['address'])){
            $addressError="Invalid";
             $haserror=1;
        }
        else{
           $addressError=$_REQUEST['address']; 
        }
        }

        if(isset($_REQUEST['submit'])){
            if(empty($_REQUEST['gender'])){
                $genderError="Invalid";
                 $haserror=1;
            }
            else{
               $genderError=$_REQUEST['gender']; 
            }
            }

            if(isset($_REQUEST['submit'])){
                if(empty($_REQUEST['additionalInfo'])){
                    $additionalError="Invalid";
                     $haserror=1;
                }
                else{
                    $additionalError=$_REQUEST['additionalInfo']; 
                }
                }

                if(isset($_REQUEST['submit'])){
                    if(empty($_REQUEST['symptoms'])){
                        $symptomsError="Invalid";
                         $haserror=1;
                    }
                    else{
                        $symptomsError=$_REQUEST['symptoms']; 
                    }
                    }

                if(isset($_REQUEST['submit'])){
                    if(empty($_REQUEST['specialization'])){
                        $specialError="Invalid";
                        $haserror=1;
                    }
                    else{
                       $specialError=$_REQUEST['specialization']; 
                    }
                    }
                  if ($_FILES['mypic']['name']=="") {
                     echo "no file uploaded";
                     $haserror=1;
                 } 
                 else {
                    if(move_uploaded_file($_FILES['mypic']['tmp_name'],"../file/"
                    .$_REQUEST['uname']."-"
                    .$_FILES['mypic']['name']))
                    {
                  echo $_FILES['mypic']['name'];
                  echo "file Uploaded";
                    }
                     }
                     if ($haserror == "") {
            $conobj = createCon();
             if (insertData($conobj, $_REQUEST['fullName'], $_REQUEST['email'], $_REQUEST['password'], "../file/" . $_REQUEST['uname'] . "-" . $_FILES['mypic']['name'], $_REQUEST['address'], $_REQUEST['gender'], $_REQUEST['additionalInfo'], $_REQUEST['symptoms'], $_REQUEST['specialization'])) {
             header("Location: ../view/login.php");
           exit(); 
        } else {
          echo "Data insertion failed.";
    }
}
else{
    echo "<br>"."Please fillup all requirment first";
}


}

                     
                    
                        

                     
                     ?>


                
