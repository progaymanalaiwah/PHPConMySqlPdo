<?php
/*
  * File documentation Class Connect Database Verssion 1.0.0
  * Name Class ConMySQl
  * Connect CLass PDO Type Database Mysql
 */
 #**********************************[ DBCONNECTMYSQL ]**********************************
/*
 * Name Function ConnectMysql
 * Function ConnectMysql Connect Database Mysql By Class PDO
 */
#**********************************[ DBSELECT ]**********************************
/*
 * IDFUNCTION = [DBSELECT-1-]
 * Name Function Select Permission Public  Verssion 1.0.0
 * Function Select Return Data On Databse [ 6 Value  2 Value Mandatory 4 Value my choice ]
 * Variable $Column , $Table , $ReturnType , $Fetch , $CloumnWhere , $ValueWhere
 * ----------------------------------[ Mandatory Variable ]-------------------------------------------
 * Mandatory Variable [ $Column , $Table ]
 * $Column Not Default
 *  - Name Column = * Or Name Table Or Tables
 *  - Example : Select Column From User
 *  - Example : Select * From User
 *  - Example : Select User,FullName From User
 * $Table Name Table
 * -----------------------------------[ Default Variable ]------------------------------------------
 * Default Variable   [  $ReturnType , $Fetch , $CloumnWhere , $ValueWhere ]
 * Default Value [  $ReturnType = 0 , $Fetch = 'BOTH' , $CloumnWhere = fasle , $ValueWhere = array() Empty]
 * $ReturnType Return Value Rang 0 To 2
 *  -  $ReturnType = 0 ReturnType = fetch() // Default
 *  -  $ReturnType = 1 ReturnType = fetchAll()
 *  -  $ReturnType = 2 ReturnType = rowCount()
 * $Fetch  Return Type Data Of Databse value Defult BOTH [BOTH,OBJ,ASSOC,LAZY]
 *  - $Fetch = 'BOTH'   Example fetch(PDO::FETCH_BOTH)  //Default
 *  - $Fetch = 'OBJ'    Example fetch(PDO::FETCH_OBJ)
 *  - $Fetch = 'ASSOC'  Example fetch(PDO::FETCH_ASSOC)
 *  - $Fetch = 'LAZY'   Example fetch(PDO::FETCH_LAZY)
 * $CloumnWhere Default false Return Not If
 *  - $CloumnWhere [Defualt] example Query = SELECT * FROM user
 *  - $CloumnWhere ["ID = ? AND Username = ?"] example Query = SELECT * FROM user $CloumnWhere
 *    - Query = SELECT * FROM user ID = ? AND Username = ?
 * $ValueWhere [Default] array() Empty
 * - If $CloumnWhere  = ["ID = ? AND Username = ?"]
 * - $ValueWhere = array(1,'ayman')
 * - $con->execute(array())
*/

#**********************************[ DBINSERT ]**********************************
/* IDFUNCTION  = [ INSERT-1-]
 * Name Function Insert Permission Public Verssion 1.0.0
 * Insert Data To Database
 * Variable 4 []
 * Variable $NameTable,$Column,$NumberColumn , $Values = array()
 *  - $NameTable    : Table Name Insert Value    [ User ]
 *  - $Column       : Column Insert Value        [Username,Email,Password]
 *  - $NumberColumn : Number Column INsert Value [ ?      , ?    , ?     ]
 *  - $Values       : Value Column   Array       [ "ayman" ,"prog.aymanmahmoud@mail.com" , root123456]
 *  - Example       : $con->Insert("Users","Username,Email,Password","?,?,?",array( "ayman" ,"prog.aymanmahmoud@mail.com" , "root123456"));
*/
#**********************************[ DBUPDATE ]**********************************
/* IDFUNCTION  = [ DBUPDATE ]
 * Name Function Update Permission Public Verssion 1.0.0 $Values = array(),$Where
 * Update Data To Database
 * Variable 4
 * Variable $NameTable,$Column,$NumberColumn , $Values = array()
 *  - $NameTable    : Table Name Update Value    [ User ]
 *  - $Column       : Column Update Value        [Username = ? ,Email = ?,Password = ?]
 *  - $Values       : New Value Column           array("Root","root@gmail.com","12345678root")
 *  - $Where        : WHERE ID = 1
 *  - Example       : $con->Insert("User","Username = ? ,Email = ?,Password = ?", array("Root","root@gmail.com","12345678root"),"ID = 5");
*/
#**********************************[ DBDELETE ]**********************************
/* IDFUNCTION [ DBDELETE ]
 * Name Function Delete Permission Public Verssion 1.0.0
 * Delete Data To Database WHERE
 * Variable 2 $NameTable,$Where
 * $NameTable : Name Table [ User ]
 * $Where     : WHERE Example ID = 1 AND Username = 'ayman'
 * Example    :$con->Delete('User','ID = 1');
 * Example    :$con->Delete('User','ID = 5 AND Username = "ayman"');
*/
#**********************************[ DBCHECKONDATA ]**********************************
/* IDFUNCTION [ DBCHECKONDATA ]
 * Name Function CheckOnData Permission Public Verssion 1.0.0
 * CheckOnData
 * Variable 3 [$Column,$NameTable,$CheckValue]
 * $Column     :
 * $NameTable  :
 * $CheckValue :
 * Example :$con->CheckOnData("Username","User","ayman");
 * If ayman In Table User Return True Else Return false
*/
?>
