<?php
class product {
    var $ProductID = null;
    var $ProductName = null;
    var $ProductImage ="images/";
    var $ProductPrice =null;
    var $ProductDesc =null;

    public function __construct() { }

    //tn
  
    //Lấy danh mục sản phẩm
    function getProductType()
    {
        $db = new connect();
        $select = "select * from producttype";
        $result = $db->getList($select);
        return $result;
    }
    // Lấy danh sách sản phẩm từ database
     function getList()
    {
         $db = new connect();
         $select = "select * from products";
         $result = $db->getList($select);
         return $result;
     }

     function getList_DESC()
    {
         $db = new connect();
         $select = "select * from products ORDER BY ProductID DESC";
         $result = $db->getList($select);
         return $result;
     }

     // Lấy danh sách sản phẩm có liệt kê theo trang
     function getListPage($from,$to)
     {
         $db = new connect();
         $select = "select * from products ORDER BY ProductID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }

     function getListPageOrderProduct($from,$to,$category)
     {
         $db = new connect();
         $select = "select * from products WHERE ProductCategory='$category' ORDER BY ProductID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
     function CountProduct($productname)
    {
        $db = new connect();
        $select = "select Count(*) from products WHERE ProductCategory='$productname'";
        $result = $db->getInstance($select);
        return $result;
    }

     function CountProductAll()
    {
        $db = new connect();
        $select = "select Count(*) from products";
        $result = $db->getInstance($select);
        return $result;
    }

     // Lấy thông tin chi tiết sản phẩm theo ID
     function getProductById($id)
     {
         $db = new connect();
         $select = "select * from products where ProductID=$id";
         $result=$db->getInstance($select);
         return $result;
     }
    //Thêm sản phẩm mới
     function Addproduct($tensanpham,$image,$price,$mota,$mathang,$brand,$product)
     {
            $db = new connect();
            $query = "INSERT INTO products(ProductName,ProductImage,ProductPrice,ProductDesc,ProductCategory,ProductBrand,ProductGroup) VALUES ('$tensanpham','$image','$price','$mota','$mathang','$brand','$product')";
            $db->exec($query);
     }
     //Update sản phẩm
     function Editproduct($tensanpham,$image,$price,$mota,$mathang,$brand,$id)
     {
         $db = new connect();
         $query = "UPDATE products set ProductName='$tensanpham',ProductImage='$image',ProductPrice='$price',ProductDesc='$mota',ProductCategory= '$mathang', ProductBrand='$brand' where ProductID='$id'";
         $db->exec($query);
     }
     //Xoá sản phẩm
     function Deleteproduct($id)
         {
            $db = new connect();
            $query = "delete from products where ProductID = '$id'";
            $db->exec($query);
         }
}

?>
