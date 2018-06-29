<?php
class Model
{
    protected $db;
    
    public function __construct()
    {
        global $config;
        try {
            $this->db = new PDO
                    ($config['dbtype'].":dbname=".$config['dbname'].";host=".$config['dbhost']
                    ,$config['dbuser']
                    ,$config['dbpass']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo '[ERRO]: '.$e->getMessage();
            exit;
        }
    }
}
?>