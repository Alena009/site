<?php

/**
 * Класс для получения соединения с БД
 */
 
class DB 
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);        
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        
        try {
            $db = new PDO($dsn, $params['user'], $params['password'], 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode = ''"));
        } catch (PDOException $e) {
            echo "Подключение не удалось: " . $e->getMessage();
        }
        
        return $db;
    }
    
    public function get($table, $count, $offset) 
    {
        $db = self::getConnection();
        
        $sql = "Select * from $table LIMIT $count OFFSET $offset";
        
        $result = $db->prepare($sql);

        $result->execute();
        
        $result->setFetchMode(PDO::FETCH_OBJ);     
        
        return $result->fetchAll();         
    }
    
    public function insert($table, $record) 
    {
        $values = get_object_vars($record);        
        $values = implode(",", array_values($values));
        
        $sql = "INSERT INTO $table VALUES ($values)";    
        
        return $this->execQuery($sql);       
    }  
    
    public function update($table, $record) 
    {
        $values = get_object_vars($record);        
        foreach ($values as $key => $value) {
            $str = "$str, $key = $value";
        }
        
        $str = substr($str, 1);
        
        $sql = "UPDATE $table SET $str WHERE id = $record->id";      
        
        return $this->execQuery($sql);       
    }    

    public function delete($table, $record) 
    {       
        $sql = "DELETE FROM $table WHERE id = $record->id";      
        
        return $this->execQuery($sql);       
    }      
    
    private function execQuery($query) 
    { 
        $db = self::getConnection();
        
        return $db->exec($query);
    }    
    
}
