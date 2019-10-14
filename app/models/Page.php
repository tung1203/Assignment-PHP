<?php

class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProducts()
    {
        $this->db->query('SELECT * FROM products WHERE status = 1');
        $row = $this->db->resultSet();
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function getProductsLimit($start_from, $limitPerPage)
    {
        $this->db->query('SELECT * FROM products WHERE status = 1 LIMIT :start, :limitPerPage');
        $this->db->bind(':start', $start_from);
        $this->db->bind(':limitPerPage', $limitPerPage);
        return $this->db->resultSet();
    } public function getProductsQuery($q)
    {
        $this->db->query('SELECT * FROM products WHERE productName LIKE % :query %');
        $this->db->bind(':query', $q);
        return $this->db->resultSet();
    }
}