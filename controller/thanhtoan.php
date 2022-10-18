<?php

include __DIR__ . '\..\Models\classDataBase.php';


class ThanhToan 
{
    private $data;
    protected $db;
    public function  __construct($request)
    {
        $this->data = $request;
        $this->db = new ClassDataBase();
    }
    
    public function main()
    {
        $sp = $this->data['sp'];
        $hdId = $this->insertHd();
        $resultInsert =  $this->insertSP($sp, $hdId);
        
        return $resultInsert;
    }

    private function insertSP ($sanPham, $hdId) 
    {
        $query = '';
        $params = [];
        foreach ($sanPham as $index => $sp) {
            $query .= " INSERT INTO chitiethoadon (id_hoadon, `name`, id_sp, soluong, price) values (?, ? , ?, ?, ?); ";
            $params[] = $hdId;
            $params[] = $sp['name'];
            $params[] = $sp['id'];
            $params[] = $sp['soluong'];
            $params[] = $sp['price'];
        }

        return $this->db->Thucthi_SQL($query, $params);
    }

    private function insertHd () 
    {
        $dataInsert = [
            $this->data['Hoten'],
            $this->data['dienthoai'],
            $this->data['Email'],
            $this->data['diachi'],
        ];

        $query = "INSERT INTO hoadon (hoten, phone, email, diachi) values (?, ? ,?, ?)";

        $this->db->Thucthi_SQL($query, $dataInsert);

        return $this->db->fetch_last_insert_id();
    }
}

