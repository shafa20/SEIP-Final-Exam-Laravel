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
      
   
   <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Blank</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <table class="table">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Size</th>
                            <th>Cost Price</th>
                            <th>Sale Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>                        
                    <tbody>
                        @php $sl=1; @endphp
                        @foreach($products as $data)
                            <tr>
                                <td>{{ $sl }}</td>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->product_description }}</td>
                                <td>{{ $data->product_category }}</td>
                                <td>{{ $data->product_size }}</td>
                                <td>{{ $data->product_costprice }}</td>
                                <td>{{ $data->product_saleprice }}</td>
                                <td><img height="80" src="{{ asset('backend/subcategoryimages/'.$data->product_image) }}" alt=""></td>
                                
                                <td>
                                    @if($data->product_status==1)
                                    <span class="badge badge-info">Active</span>
                                    @else
                                    <span class="badge badge-info">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('editproduct',$data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                   
                                    <!-- <button type="button" class="btn btn-danger"><i class="fa fa-trash" data-bs-toggle="modal" data-bs-target="#delete"></i></button> -->
                                   <!--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
                                </td>
                            </tr> -->
                            
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


                        <a href="{{ Route('delete',$data->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $data->id }}" ></i></a>
                      </td>
                    </tr>

<!-- Modal -->
<!-- <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{ Route('delete',$data->id) }}"  class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div> -->

@php $sl++; @endphp
                        @endforeach
                        
                    </tbody>
                </table>

                <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>  
   