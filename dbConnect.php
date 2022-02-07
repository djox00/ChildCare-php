<?php
class Database
{
    //naredne cetiri varijable modifikujte u skladu sa vasim okruzenjem
    private static $dbName = 'mainDB' ;
    private static $dbHost = 'localhost' ;
    private static $username = 'root'; 
    private static $password = ''; 

 
    private static $cont  = null;
     

    
    public function __construct() {
        die('Init function is not allowed');
    }
    
    //putem funkcije connect() ostvarujemo konekciju sa bazom podataka
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$username, self::$password); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
