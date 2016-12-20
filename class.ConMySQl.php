<?php namespace Database;
/*
 * Class Name ConMySQl Verssion 1.0.0
 * Type Connect Database Class PDO
 * Author   : Ayman Mahmoud Alaiwah
 * facebook : www.fb.com/progaymanalaiwah
 */

use \PDO; # NameSpace Class PDO
class ConMySQl { #Start Class

  # Vairables Content On Information  Connect Database
  private $DBHost ; # Host Name Database
  private $DBUser ; # User Name Database
  private $DBPass ; # Paas Database
  private $DBName ; # Name Database
  private $Options; #  Options PDO
  private $dsn    ;
  public  $pdo    ; # Content Connect

  public function __construct($Host,$User,$Pass,$Name){ #Start

    $this->DBHost = $Host;
    $this->DBUser = $User;
    $this->DBPass = $Pass;
    $this->DBName = $Name;

    # Running Function Connect Database
    $this->pdo = $this->ConnectMysql();

  } #End

  # IDFUNCTION = [ DBCONNECTMYSQL ]
  # Create Function Connect Database  By Class PDO Verssion 1.0.0
  # Type Database : Mysql
  private function ConnectMysql(){ # Start

      $this->dsn = "mysql:host=$this->DBHost;dbname=$this->DBName";
      $this->Options = array( # Array Option Class PDO
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', # Option Encoding Utf8
      );
      try{
          # New Object On Class PDO
          $ConnMysql = new PDO($this->dsn,$this->DBUser,$this->DBPass,$this->Options);
          $ConnMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $ConnMysql; # If Connect Return Connect
      }catch(PDOExcption $e){
        echo 'Error Connect Database : <br><pre>' . $e->getMessage() . '</pre>';
      }
  } #End

  # Function Seclect Verssion 1.0.0
  # IDFUNCTION = [ DBSELECT ]
  public function Select($Column,$Table,
                         $ReturnType = 0,$Fetch= 'BOTH',
                         $CloumnWhere   = false,$ValueWhere = array())
  { #Start Function Selelct

      # Return Value  If Where = $ValWhere Else $Where = ''
      $Where = $CloumnWhere != false ? "WHERE $CloumnWhere" : '';
      $stmt = $this->pdo->prepare("SELECT $Column FROM $Table $Where"); #Query
      $stmt->execute($ValueWhere); # Exec Query

      $FetchType = PDO::FETCH_BOTH; # Default Value Fatch Type
      $Fetch = strtoupper($Fetch);  # If $Fetch LowerCase Function strtoupper Conversion UpperCase
      # Check Fetch Type Default PDO::FETCH_BOTH
      if    ($Fetch == 'OBJ'  ){$FetchType = PDO::FETCH_OBJ;}
      elseif($Fetch == 'ASSOC'){$FetchType  = PDO::FETCH_ASSOC;}
      elseif($Fetch == 'LAZY' ){$FetchType  = PDO::FETCH_LAZY;}

      # Check Value $ReturnType And Return Value
      if     ($ReturnType == 2){ return $stmt->rowCount($FetchType);}
      elseif ($ReturnType == 1){ return $stmt->fetchAll($FetchType);}
      else   { return $stmt->fetch($FetchType);}

  } # End Function Selelct

  # Function Insert Verssion 1.0.0
  # IDFUNCTION  = [ DBINSERT ]
  public function Insert($NameTable,$Column,$NumberColumn , $Values = array()){ # Start Function Insert
      $stmt = $this->pdo->prepare("INSERT INTO $NameTable ($Column) VALUES ($NumberColumn)");
      $exec = $stmt->execute($Values);
      $exec = $exec ?  true :  false; # Check Of Insert Data
      return $exec;
  } #End Function Insert

  # Function Update Verssion 1.0.0
  # IDFUNCTION = [ DBUPDATE ]
  public function Update($NameTable,$Column,$Values = array(),$Where){ #Start Function Update
      $stmt  = $this->pdo->prepare("UPDATE $NameTable SET $Column WHERE $Where");
      $exec  = $stmt->execute($Values);
      $exec  = $exec ? true : fasle; # Check Update Date
      return $exec;

  } #End Function Update

  # Function Delete Verssion 1.0.0
  # IDFUNCTION [ DBDELETE ]
  public function Delete($NameTable,$Where){ # Start Function Delete
      $stmt  = $this->pdo->prepare("DELETE FROM $NameTable WHERE $Where");
      $exec  = $stmt->execute();
      $exec  = $exec ? true : fasle; # Check Update Date
      return $exec;
  } # End Function Update

  # Function CheckOnData Verssion 1.0.0
  # IDFUNCTION [ DBCHECKONDATA ]
  public function CheckOnData($Column,$NameTable,$CheckValue){
    $stmt = $this->pdo->prepare("SELECT $Column FROM $NameTable WHERE $Column = ?"); #Query
    $stmt->execute(array($CheckValue));
    $Count = $stmt->rowCount(); # Return Number Row
    $Count = $Count > 0 ? true : false;
    return $Count;
  }

  public function __destruct(){
    $this->pdo = null; # Close  Connect Database
  }

} #End Class
