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
      
     <form action="{{ route('updateproduct',$product->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="offset-sm-1 col-sm-5">
              <div class="form-group">
                <label for="name">Product Name</label>
                <input value="{{ $product->product_name }}" type="text" name="name" class="form-control">
              </div>
              
              <div class="form-group">
                <select name="category" class="form-control">
                  <option value="">-----SELECT CATEGORY-----</option>
                  <option value="Men" @if ($product->product_category == "Men") selected @endif >Men</option>
                  <option value="Women" @if ($product->product_category == "Women") selected @endif>Women</option>
                  <option value="Children" @if ($product->product_category == "Children") selected @endif>Children</option>
                </select>
              </div>
              <div class="form-group">
                <select  name="size" class="form-control">
                  <option value="">-----SELECT SIZE-----</option>
                  <option value="S" @if ($product->product_size == "S") selected @endif>S</option>
                  <option value="M" @if ($product->product_size == "M") selected @endif>M</option>
                  <option value="L" @if ($product->product_size == "L") selected @endif>L</option>
                  <option value="XL" @if ($product->product_size == "XL") selected @endif>XL</option>
                  <option value="XXL" @if ($product->product_size == "XXL") selected @endif>XXL</option>
                </select>
              </div>
              <div class="form-group">
                <label for="costPrice">Product Cost Price</label>
                <input value="{{ $product->product_costprice }}" type="number" name="costPrice" class="form-control">
              </div>
              <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input value="{{ $product->product_quantity }}" type="number" name="quantity" class="form-control">
              </div>
            </div><!-- col-3 -->    
            <div class="col-sm-5">
              <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" rows="7" class="form-control">
                  {{ $product->product_description }}
                </textarea>
              </div>
              <div class="form-group">
                <img height="80" src="{{ asset('backend/subcategoryimages/'.$product->product_image) }}" alt="">
                <label for="description">Product Image</label>
                <input  type="file" name="product_image" class="form-control">
              </div>
              <div class="form-group">
                <label for="salePrice">Product Sale Price</label>
                <input value="{{ $product->product_saleprice }}" type="number" name="salePrice" class="form-control">
              </div>
              <div class="form-group">
                <button class="form-control btn btn-success my-4">Update PRODUCT</button>
              </div>
            </div><!-- col-3 -->          
    
          </div><!-- row -->
        </form> 



      <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-T



c5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>  
   