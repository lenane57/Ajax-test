<?php
   // Connect database 
   require_once('connect_db.php');
   $limit = 5;
   if (isset($_POST['slide_no'])) {
       $slide_no = $_POST['slide_no'];
   }else{
       $slide_no = 1;
   }
   $offset = ($slide_no-1) * $limit;
   $query = "SELECT * FROM products LIMIT $offset, $limit";
   $result = mysqli_query($con, $query);
   $output = "";
   if (mysqli_num_rows($result) > 0) {
   $output.="<table class='table'>
          <thead>
              <tr>
                 <th>Id</th>
                       <th>Shop Name</th>
                  <th>Product Name</th>
                  <th>Product code</th>
                  <th>Price</th>
               </tr>
          </thead>
            <tbody>";
   while ($row = mysqli_fetch_assoc($result)) {
   $output.="<tr>
               <td>{$row['id']}</td>
               <td>{$row['shop_name']}</td>
               <td>{$row['productname']}</td>
               <td>{$row['pcode']}</td>
               <td>{$row['price']}</td>
       </tr>";
   } 
   $output.="</tbody>
      </table>";
   $sql = "SELECT * FROM products";
   $all_products = mysqli_query($con, $sql);
   $totalRecords = mysqli_num_rows($all_products);
   $totalPage = ceil($totalRecords/$limit);
   $output.="<ul class='pagination justify-content-center' style='margin:20px 0'>";
   for ($i=1; $i <= $totalPage ; $i++) { 
      if ($i == $slide_no) {
      $active = "active";
      }else{
      $active = "";
      }
       $output.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
   }
   $output .= "</ul>";
   echo $output;
   }
?>