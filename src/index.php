<?php
$products =  array(
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
          <link href="style.css" rel="stylesheet">
      </head>
      <body>
         <?php
         echo "<center><h3>Listing Array in tabular format</h3></center>";
        //  function display($products){
         
         $table=" ";
         $table="<table>
         <tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
        foreach($products as $category=>$subcategory){
             foreach($subcategory as $subcategory=>$product){
                 foreach($product as $items=>$item){
                        $table=$table . "<tr><td>" .$category. "</td>";
                        $table=$table . "<td>" .$subcategory. "</td>";
                        $table = $table . "<td>" . $item ["id"] . "</td><td>" . $item["name"]. "</td><td>" .$item["brand"] . "</td>";

                        $table = $table . "</tr>";
                      }
                         
    }}
        $table=$table."</table>";
        echo $table;   
        echo "<hr>"; 
        // display($products); 
        //////////////////////////////////////////////////////////////////////////
        echo "<center><h3>subcategory = Mobile</h3></center>";

         $table2="<table>
         <tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
        foreach($products as $category=>$subcategory){
             foreach($subcategory as $subcategory=>$product){
                 foreach($product as $items=>$item){
                        if($subcategory==="Mobile"){
                        $table2=$table2 . "<tr><td>" .$category. "</td>";
                        $table2=$table2 . "<td>" .$subcategory. "</td>";
                        $table2 = $table2 . "<td>" . $item ["id"] . "</td><td>" . $item["name"]. "</td><td>" .$item["brand"] . "</td>";

                        $table2 = $table2 . "</tr>";
                         
    }}}}
        $table2=$table2."</table>";
        echo $table2;   
        echo "<hr>"; 
        
    //////////////////////////////////////////////////////////////////////////////////
    echo "<center><h3>Brand = Samsung</h3></center>";
    foreach($products as $category=>$subcategory){
        foreach($subcategory as $subcategory=>$product){
            foreach($product as $items=>$item){
                if($item["brand"]=="Samsung"){
                    echo "Product ID:".$item["id"]."<br>".
                    "Product Name:".$item["name"]."<br>".
                    "Subcategory:".$subcategory."<br>".
                    "Category:".$category."<br>";
                    echo "<br>";
                   
                }
            }
        }
    } echo "<hr>";
/////////////////////////////////////////////////////////////////////////////////////////////////
echo "<center><h3> Delete product with id = PR003</h3></center>";    
// echo $tableHead="<tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
$table3=" ";
         $table3="<table>
         <tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
        foreach($products as $category=>$subcategory){
             foreach($subcategory as $subcategory=>$product){
                 foreach($product as $items=>$item){
                   if($item["id"]=="PR003"){
                     unset($item["id"]);
                     continue;
                   }
                        $table3=$table3 . "<tr><td>" .$category. "</td>";
                        $table3=$table3 . "<td>" .$subcategory. "</td>";
                        $table3 = $table3 . "<td>" . $item ["id"] . "</td><td>" . $item["name"]. "</td><td>" .$item["brand"] . "</td>";

                        $table3 = $table3 . "</tr>";
                      }
                         
    }}
        $table3=$table3."</table>";
        echo $table3;   
        echo "<hr>"; 
            
            // display($products);
            //////////////////////////////////////////////////////////////////

            echo "<center><h3>Update product name = 'BIG-555' with id = PR002</h3></center>";    
      foreach($products as $category=>$subcategory){
            foreach($subcategory as $subcategory=>$product){
                foreach($product as $items=>$item){
                    if($item['id']=="PR002"){
                      echo $item['id'];
                      $oldname=$item['name'];
                      $newname="BIG-555";
                      array_splice($item,1);
                    }
                }}}
                // display($products);

     ?> 

    </body>
    </html>