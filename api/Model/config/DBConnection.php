<?php

namespace Model\DBConnection;

class DBConnection
{
    private string $DB_HOST;
    private string $DB_NAME;
    private string $DB_USERNAME;
    private string $DB_PASSWORD;

    public function __construct($DB_HOST, $DB_NAME, $DB_USERNAME, $DB_PASSWORD)
    {
        $this->DB_HOST = $DB_HOST;
        $this->DB_NAME = $DB_NAME;
        $this->DB_USERNAME = $DB_USERNAME;
        $this->DB_PASSWORD - $DB_PASSWORD;
    }
}
