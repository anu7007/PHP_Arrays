<?php
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
      "id" => "PR001",
      "name" => "MAX-001",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR002",
      "name" => "BIG-301",
      "brand" => "Bravia"
      ),
      array(
      "id" => "PR003",
      "name" => "APL-02",
      "brand" => "Apple"
      )
    ),
    "Mobile" => array(
      array(
      "id" => "PR004",
      "name" => "GT-1980",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR005",
      "name" => "IG-5467",
      "brand" => "Motorola"
      ),
      array(
      "id" => "PR006",
      "name" => "IP-8930",
      "brand" => "Apple"
      )
    )
  ),
  "Jewelry" => array(
    "Earrings" => array(
      array(
      "id" => "PR007",
      "name" => "ER-001",
      "brand" => "Chopard"
      ),
      array(
      "id" => "PR008",
      "name" => "ER-002",
      "brand" => "Mikimoto"
      ),
      array(
      "id" => "PR009",
      "name" => "ER-003",
      "brand" => "Bvlgari"
      )
    ),
    "Necklaces" => array(
      array(
      "id" => "PR010",
      "name" => "NK-001",
      "brand" => "Piaget"
      ),
      array(
      "id" => "PR011",
      "name" => "NK-002",
      "brand" => "Graff"
      ),
      array(
      "id" => "PR012",
      "name" => "NK-003",
      "brand" => "Tiffany"
      )
    )
  )
      );
    //   echo '<pre>';
    //   print_r($products);
    //   echo '</pre>';
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PHP Arrays</title>
      </head>
      <body>
         <?php
         $table="";
         $table="<table>
         <tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
        foreach($products as $category=>$subcategory){
             foreach($subcategory as $subcategory=>$product){
                 foreach($product as $items=>$item){
                        $table=$table . "<tr><td>" .$category. "</td>";
                        $table=$table . "<td>" .$subcategory. "</td>";
                        $table = $table . "<td>" . $item ["id"] . "</td><td>" . $item["name"]. "</td><td>" .$item["brand"] . "</td>";

                        $table = $table . "</tr>";
                         
    }}}
        $table=$table."</table>";
        echo $table;                
       ?>   

</body>
</html>