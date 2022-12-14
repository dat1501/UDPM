<?php

class ClassDataBase
{
    public $connection;
    protected $dbName = 'db_test';
    protected $host = 'localhost';
    protected $userName = 'root';
    protected $pass = '';
    protected $port = 3306;
    protected $pdo_smt;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host={$this->host};port={$this->port}; dbname={$this->dbName}", $this->userName, $this->pass);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /*
	hàm Thucthi_SQL($sql,$cacgiatri);
	+Đầu vào:
	$sql: là câu lệnh SELECT, INSERT, UPDATE, DELETE cần thực hiện
	$cacgiatri: là mảng chứa các các giá trị cần gán cho các 
	dấu chấm hỏi trong câu lệnh $sql
	+Thực hiện:
	 - gán các giá trị (bindParam) cho các dấu ? trong $sql
	 - thực thi câu lệnh $sql
	 +Trả về:
	  - giá trị là -1 nếu lỗi thực thi truy vấn CSDL
	  - ngược lại trả về số lượng bản ghi được cập nhật
	*/
	public function Thucthi_SQL($sql, $cacgiatri = array())
	{
		//thiết lập lệnh sql và gán biến PDOStatement
		$this->pdo_smt = $this->connection->prepare($sql);
		//gán các trị cho từng dấu ? (bindParam)
		if($cacgiatri){
			for($i=0; $i<count($cacgiatri);$i++){
				$this->pdo_smt->bindParam($i+1,$cacgiatri[$i]);	
			}
		}
		//thực thi lệnh truy vấn
		$ketqua = $this->pdo_smt->execute();//TRẢ VỀ TRUE/FALSE
		//trả kết quả về nơi gọi hàm
		if($ketqua==FALSE)
			return -1;
		else
			return $this->pdo_smt->rowCount();
	}
	//lệnh Lay_1_Ban_Ghi_Dang_Mang, phải dùng sau lệnh
	//Thucthi_SQL(), dùng trả về 1 bản ghi dữ liệu
	//từ lệnh SELECT ở dạng mảng có tên cột hoặc vị trí
	public function Lay_1_Ban_Ghi_Dang_Mang()
	{
		if($this->pdo_smt && $this->pdo_smt->errorCode()=="00000")
			return $this->pdo_smt->fetch(PDO::FETCH_BOTH);
		else
			return NULL;
	}	
	//lệnh Lay_Toanbo_Ban_Ghi_Dang_Mang, phải dùng sau lệnh
	//Thucthi_SQL(), dùng trả về các bản ghi dữ liệu
	//từ lệnh SELECT ở dạng mảng 2 chiều, mỗi dòng là 1 sản phẩm
	public function Lay_Toanbo_Ban_Ghi_Dang_Mang()
	{
		if($this->pdo_smt && $this->pdo_smt->errorCode()=="00000")
			return $this->pdo_smt->fetchAll(PDO::FETCH_BOTH);
		else
			return NULL;
	}
	//lệnh Lay_1_Ban_Ghi_Dang_Doituong, phải dùng sau lệnh
	//Thucthi_SQL(), dùng trả về 1 bản ghi dữ liệu
	//từ lệnh SELECT ở dạng đối tượng
	public function Lay_1_Ban_Ghi_Dang_Doituong()
	{
		if($this->pdo_smt && $this->pdo_smt->errorCode()=="00000")
			return $this->pdo_smt->fetch(PDO::FETCH_OBJ);
		else
			return NULL;
	}	
	//lệnh Lay_Toanbo_Ban_Ghi_Dang_Doituong, phải dùng sau lệnh
	//Thucthi_SQL(), dùng trả về các bản ghi dữ liệu
	//từ lệnh SELECT ở dạng mảng các đối tượng
	public function Lay_Toanbo_Ban_Ghi_Dang_Doituong()
	{
		if($this->pdo_smt && $this->pdo_smt->errorCode()=="00000")
			return $this->pdo_smt->fetchAll(PDO::FETCH_OBJ);
		else
			return NULL;
	}

    public function fetch_last_insert_id()
    {
        $this->Thucthi_SQL('SELECT LAST_INSERT_ID()');
        $row = $this->Lay_1_Ban_Ghi_Dang_Mang();

        return $row[0];
    }
}