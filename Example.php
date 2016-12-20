<?php

# require File Setting
require "config.php";
# require CLass Database
require "class.ConMySQl.php";

// New Object On Class Databse
$con = new Database\ConMySQl(DB_HOST,DB_USER,DB_PASS,DB_NAME);

/* Function Select
  $Select = $con->Select("*","Users",0,"OBJ");
  echo $Select->Username; //OBJ
  echo $Select->Email; //OBJ
*/

/* Function Select
  $Select = $con->Select("*","Users",0,"BOTH",);
  echo $Select['Username']; //BOTH fetch()
  echo $Select['Email']; //BOTH
*/

/* Function Select
  $Select = $con->Select("*","Users",1,"BOTH","id = ? AND Username = ?",array(1,'aymanalaiwah'));
  foretch($Select as $se){
    echo $se['username']; // BOTH AND fetchAll();
    echo $se['Email'];   // BOTH
}
*/


/* Function Insert
  $con->Insert('Users','Email,Username,Password',"?,?,?" ,array('prog.aymanmahmoud@gmail.com','admin','admin123456'))
  return True Or False
*/

/* Function Update
  $con->Update('Users','username = ?,password = ?,Email = ?',array('admin','admin123456','root@gmail.com'),'ID = 1');
  return True Or False
*/

/* Function Delete
  $con->Delete('users','ID = 5');
*/

/* Function CheckOnData
  $con->CheckOnData('Username','users','admin');
  if admin In Column Username Return True Else False
*/

?>
