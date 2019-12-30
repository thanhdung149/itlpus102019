<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/23/2019
 * Time: 7:25 PM
 */
/**
 * tạo ra class Oto
 * gồm các thuộc tính
 * tên, model , hãng , giá tiền , trong lượng , mức tiêu thụ xăng
 * gồm các phương thức
 * phương thức khởi tạo constructor
 * phương thức docthongtinxe()
 *
 * khởi tạo đối tượng
 * ford ecosport = new Oto()
 * gọi các thuộc tính và method bên ngoài class
 */


// tao class oto
class oto{
    // cac thuoc tinh oto
    public $ten;
    public $model;
    public $hang;
    public $giatien;
    public $trongluong;
    public $muctieuthuxang;

    // phuong thuc khoi tao contructor
    public function __construct($ten,$model,$hang,$giatien,$trongluong,$muctieuthuxang)
    {

        /**
        lay gia tri tu cac tham so gan cho cac thuoc tinh
         * trong class khi ma goi den chinh no
         * su dung tu khoa $this
         */
        $this->ten=$ten;
        $this->model=$model;
        $this->hang=$hang;
        $this->giatien=$giatien;
        $this->trongluong=$trongluong;
        $this->muctieuthuxang=$muctieuthuxang;
        echo "<br> phuong thuc contructor khoi tao";
    }

    /** thuong thuc doc thong tin xe*/
    public function docthongtinxe(){
        echo "<br>" . __METHOD__;
        echo "<br> ten xe: " . $this->ten;
        echo "<br> model xe: " . $this->model;
        echo "<br> hang xe: " . $this->hang;
        echo "<br> gia tien: " . $this->giatien;
        echo "<br> trong luong: " . $this->trongluong;
        echo "<br> muc tieu thu xang xe: " . $this->muctieuthuxang;
    }
}

/** khoi tao doi tuong cu the
    class la lop chung chung*/
$name=new oto("santafe","c800","Honda","1.100 ty","1.9 tan","8 lit");
echo "<pre>";
print_r($name);
echo "</pre>";

// goi cac thuoc tinh va method ben ngoai class

$name->docthongtinxe();

// goi cac thuoc tinh ben ngoai class
echo "<br> ten xe: " . $name->ten;
?>