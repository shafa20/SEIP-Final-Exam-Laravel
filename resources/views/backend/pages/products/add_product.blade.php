<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body>
      
   

        <form action="{{Route('insertproduct')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="offset-sm-1 col-sm-5">
              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              
              <div class="form-group">
                <select name="category" class="form-control">
                  <option value="">-----SELECT CATEGORY-----</option>
                  <option value="Men">Men</option>
                  <option value="Women">Women</option>
                  <option value="Kidz">Kidz</option>
                </select>
              </div>
              <div class="form-group">
                <select  name="size" class="form-control">
                  <option value="">-----SELECT SIZE-----</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                </select>
              </div>
              <div class="form-group">
                <label for="costPrice">Product Cost Price</label>
                <input type="number" name="costPrice" class="form-control">
              </div>
              <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="number" name="quantity" class="form-control">
              </div>
            </div><!-- col-3 -->    
            <div class="col-sm-5">
              <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" rows="7" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="description">Product Image</label>
                <input type="file" name="product_image" class="form-control">
              </div>
              <div class="form-group">
                <label for="salePrice">Product Sale Price</label>
                <input type="number" name="salePrice" class="form-control">
              </div>
              <div class="form-group">
                <button class="form-control btn btn-success my-4">ADD PRODUCT</button>
              </div>
            </div><!-- col-3 -->          
    
          </div><!-- row -->
        </form> 
      <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>  
   