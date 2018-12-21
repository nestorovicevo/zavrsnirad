    <?php
   class Connection
   {
       public static function make(string $servername, string $dbname, string $username, string $password)
       {
           try {
               $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

               return $connection;
           } catch (PDOException $e) {
               echo $e->getMessage();
           }
       }
   }
?>