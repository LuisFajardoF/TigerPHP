<?php 

class QueryBuilder 
{
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) 
    {
        $query = $this->pdo->prepare("select * from {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id) 
    {
        $query = $this->pdo->prepare("select * from {$table} where id={$id} limit 0,1");

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public function create($table, $params) 
    {
        $cols = implode(', ', array_keys($params));
        $placeholders = ':' . implode(', :', array_keys($params));

        $sql = "insert into {$table} ({$cols}) values ({$placeholders})";
        
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($params);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function update($table, $id, $params) 
    {
        $cols = array_keys($params);
        $cols = implode(', ', array_map(function ($col) {
            return "{$col}=:{$col}";
        }, $cols));

        $sql = "update {$table} set {$cols} where id=:id";
        
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute([...$params, 'id' => $id]);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function delete($table, $id) 
    {
        $sql = "delete from {$table} where id=:id";
        
        try {
            $query = $this->pdo->prepare($sql);
            $query->execute(['id' => $id]);
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}