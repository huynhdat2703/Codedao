<?php
class Database
{
    const HOME_URL = "http://localhost/codedao/";
    const DB_NAME = "codedao";
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_HOST = 'localhost';
    
    private $connection;

    public function connectDatabase()
    {
        $this->connection = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
        if ($this->connection->error) {
            die("Connect database error!");
        }
        return $this->connection;
    }

    public function disConnectDatabase()
    {
        mysqli_close($this->connection);
    }

    /**
     * Get the value of connect
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set the value of connect
     *
     * @return  self
     */
    public function setConnectiont($connect)
    {
        $this->connection = $connect;

        return $this;
    }
}
