<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ajax Pagination using jQuery with PHP & MySQL</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function(){
    function getAllData(page){
      $.ajax({
        url  : "list-products.php",
        type : "POST",
        cache: false,
        data : {slide_no:page},
        success:function(response){
          $("#product-data").html(response);
        }
      });
    }
    getAllData();
    
    // Pagination Source code
    $(document).on("click", ".pagination li a", function(e){
      e.preventDefault();
      var pageId = $(this).attr("id");
      getAllData(pageId);
    });
  });
</script>
  </head>

<body>
<div class="jumbotron text-center">
  <h2>Ajax using jQuery with PHP & MySQL</h2>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="product-data">
        
      </div>
    </div>
  </div>
</div>
</body>
</html>