<?php
define('HOME_URL', 'http://localhost/codedao/');
define('DB_NAME', 'codedao');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

class Database
{
    private $connection;

    public function connectDatabase()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
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
