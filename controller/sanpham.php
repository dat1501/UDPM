<?php

include __DIR__ . '\..\Models\classDataBase.php';


class SanPham 
{
    private $data;
    protected $db;
    public function  __construct()
    {
        $this->db = new ClassDataBase();
    }
    
    public function main()
    {
    
    }

    public function getAllSp()
    {
        $this->db->Thucthi_SQL('select * from sanpham', []);

        return $this->db->Lay_Toanbo_Ban_Ghi_Dang_Mang();
    }
}

