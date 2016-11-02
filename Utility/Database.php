<?php

namespace Hack\Utility;

use PDO;
use Hack\Utility\Tools;

class Database
{

    public function Contact()
    {
        $db = new PDO('mysql:host=localhost;dbname=avhackir_db;charset=utf8', 'avhackir_user', 'fVedukkGxf');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    
    public function Columns()
    {
        return  array(
            'id',
            'ip',
            'first_name',
            'last_name',
            'email',
            'mobile',
            'file_name',
            'file_size',
            'file_hash',
            'file_status',
            'time_request',
            'time_result',
            'status',
            'code',
            'result',
        );
    }

    public function InsertLog($fields)
    {
        // Check fields
        foreach (array_keys($fields) as $key) {
            if (!in_array($key, self::Columns())) {
                unset($fields[$key]);
            }
        }

        // Contact to db
        $db = self::Contact();

        // insert
        try {
            $insert = $db->prepare("INSERT INTO `log` (
                    `ip`, `first_name`, `last_name`, `email`, `mobile`, `file_name`, `file_size`, `file_hash`, `file_status`, `time_request`, `time_result`, `status`, `code`, `result`
                ) VALUES(
                    :ip, :first_name, :last_name, :email, :mobile, :file_name, :file_size, :file_hash, :file_status, :time_request, :time_result, :status, :code, :result
                )");
            $insert->execute(array(
                ':ip' => Tools::CleanVars($fields, 'ip', '', 'ip'),
                ':first_name' => Tools::CleanVars($fields, 'first_name', '', 'string'),
                ':last_name' => Tools::CleanVars($fields, 'last_name', '', 'string'),
                ':email' => Tools::CleanVars($fields, 'email', '', 'mail'),
                ':mobile' => Tools::CleanVars($fields, 'mobile', '', 'string'),
                ':file_name' => Tools::CleanVars($fields, 'file_name', '', 'string'),
                ':file_size' => Tools::CleanVars($fields, 'file_size', '', 'int'),
                ':file_hash' => Tools::CleanVars($fields, 'file_hash', '', 'string'),
                ':file_status' => Tools::CleanVars($fields, 'file_status', '', 'int'),
                ':time_request' => Tools::CleanVars($fields, 'time_request', '', 'int'),
                ':time_result' => Tools::CleanVars($fields, 'time_result', '', 'int'),
                ':status' => Tools::CleanVars($fields, 'status', '', 'int'),
                ':code' => Tools::CleanVars($fields, 'code', '', 'string'),
                ':result' => Tools::CleanVars($fields, 'result', '', 'string'),
            ));
            return $insert->rowCount();
        } catch(PDOException $ex) {
            echo "An Error occured!";
            return $ex->getMessage();
        }
    }

    public function UpdateLog($fields)
    {
        // Check fields
        foreach (array_keys($fields) as $key) {
            if (!in_array($key, self::Columns())) {
                unset($fields[$key]);
            }
        }

        // Contact to db
        $db = self::Contact();

        // update
        try {
            $sql = "UPDATE log SET 
                    result = :result,  
                    time_result = :time_result,  
                    status = :status  
                    WHERE code = :code";
            $update = $db->prepare($sql);
            $update->bindParam(':result', $fields['result'], PDO::PARAM_STR);
            $update->bindParam(':time_result', $fields['time_result'], PDO::PARAM_INT);
            $update->bindParam(':status', $fields['status'], PDO::PARAM_INT);
            $update->bindParam(':code', $fields['code'], PDO::PARAM_STR);
            $update->execute();

            $select = $db->prepare("SELECT * FROM log WHERE code = :code");
            $select->bindParam(':code', $fields['code'], PDO::PARAM_STR);
            $select->execute();
            return $select->fetch(PDO::FETCH_BOTH);
        } catch(PDOException $ex) {
            echo "An Error occured!";
            return $ex->getMessage();
        }
    }

    public function SelectNotFinishedLog()
    {
        // Contact to db
        $db = self::Contact();

        // update
        try {
            $sql= "SELECT * FROM `log` WHERE status = 0 ORDER BY `log`.`id` DESC LIMIT 100 ";
            $select = $db->prepare($sql);
            $select->execute();
            return $select->fetchAll();
        } catch(PDOException $ex) {
            echo "An Error occured!";
            return $ex->getMessage();
        }
    }
}