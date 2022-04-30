@extends('adminlte::page')

@section('title', 'Manage Product Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Product</h1>
@stop

@section('content')
<!-- Update Modal -->
  <div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UPDATE PRODUCT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="product_id" placeholder="Product ID" name="id" readonly>
            <label for="name">Product ID</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="edit_name" placeholder="Product Name" name="name" required>
            <label for="name">Product Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="edit_slug" placeholder="Product Name" name="slug" required>
            <label for="name">Product Slug</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" min="1" class="form-control" id="edit_price" name="price" placeholder="Product Price" required>
            <label for="price">Product Price</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" min="1" class="form-control" id="edit_cost" name="cost" placeholder="Product Cost" required>
            <label for="price">Product Cost</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" min="1" class="form-control" id="edit_quantity" name="quantity" placeholder="Product Quantity" required>
            <label for="price">Product Quantity</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Description" id="edit_description" name="description" style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Description</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="edit_category-select" name="category" required>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label for="category-select">Category</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="update_product btn btn-primary">Update</button>
        </div>
        <ul id="updateForm_errList"></ul>
      </div>
    </div>
  </div>
  {{-- END MODAL --}}

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE PRODUCT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="hidden" id="delete_product_id">
            <h4>Are you sure to delete permenantly this product?</h4>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="delete_product_btn btn btn-danger">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  {{-- END MODAL --}}

    {{-- Minimal --}}
  <div id="success_message"></div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"style="text-align:center;">Image</th>
      <th scope="col"style="text-align:center;">Name</th>
      <th scope="col"style="text-align:center;">Price</th>
      <th scope="col"style="text-align:center;">Cost</th>
      <th scope="col"style="text-align:center;">Quantity</th>
      <th scope="col"style="text-align:center;">Description</th>
      <th scope="col"style="text-align:center;">Category</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  {{-- Script for update functions --}}
<script>
    $(document).ready(function (){

      fetchProduct();

      function fetchProduct(){
        $.ajax({
          type: "GET",
          url: "fetch-products",
          dataType: "json",
          success: function (response) {
            // console.log(response.products);
            $('tbody').html("");
            $.each(response.products, function(key, product){
              $('tbody').append(
                '<tr>\
                <td><img src="cover/'+product.cover_img+'" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>\
                <td style="text-align:left;" value="'+product.name+'">'+product.name+'</td>\
                <td style="text-align:center;">'+product.price+'</td>\
                <td style="text-align:center;">'+product.cost+'</td>\
                <td style="text-align:center;">'+product.quantity+'</td>\
                <td>'+product.description+'</td>\
                <td style="text-align:center;">'+product.category_name+'</td>\
                <td style="text-align:center;">\
                <button class="edit_product btn btn-warning" value="'+product.id+'">Update</button>\
                <br></br>\
                <button class="delete_product btn btn-danger" value="'+product.id+'">Delete</button>\
                </td>\
                </tr>'
              )
            });
          }
        });
      }
      
      // Retrieve data to the form in the Edit Modal
      $(document).on('click', '.edit_product', function(e){
          e.preventDefault();

          //Get the id of the product
          var prod_id = $(this).val();
          // console.log(prod_id);
          $('#updateProductModal').modal('show');
          $.ajax({ 
            type: "GET",
            url: "/update-product/"+prod_id,
            success: function(response){
              // console.log(response);
              if (response.status == 404) {
                $('#success_message').html("");
                $('#success_message').addClass('alert alert-danger');
                $('#success_message').text(response.message);
              }
              else {
                $('#product_id').val(response.product.id);
                $('#edit_name').val(response.product.name);
                $('#edit_slug').val(response.product.slug);
                $('#edit_price').val(response.product.price);
                $('#edit_cost').val(response.product.cost);
                $('#edit_quantity').val(response.product.quantity);
                $('#edit_description').val(response.product.description);
                $('#edit_category-select').val(response.product.category_id);
              }
            }
          });
        })

        // When Click Update button in Modal
        $(document).on('click', '.update_product', function(e){
          e.preventDefault();

          var prod_id = $('#product_id').val();
          var data = {
            'name': $('#edit_name').val(),
            'slug': $('#edit_slug').val(),
            'price': $('#edit_price').val(),
            'cost': $('#edit_cost').val(),
            'quantity': $('#edit_quantity').val(),
            'description': $('#edit_description').val(),
            'category_id': $('#edit_category-select').val()
          };

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $.ajax({
            type: "PUT",
            url: "/update-product/"+prod_id,
            data: data,
            dataType: "json",
            success: function(response){
              // console.log(response);
              // if (response.status == 400){
              //   $('#updateForm_errList').html("");
              //   $('#updateForm_errList').addClass('alert alert-danger');
              //   $.each(response.errors, function(key, err_values){
              //     $('#updateForm_errList').append('<li>'+err_values+'</li>');
              //   });
              // } else 
              // Lỗi 500 u đầu, bỏ -> lỗi 422 -> bỏ
              if (response.status == 404){
                $('#updateForm_errList').html("");
                $('#success_message').addClass('alert alert-danger');
                $('#success_message').text(response.message);
              } else {
                $('#updateForm_errList').html("");
                $('#success_message').html("");
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                
                fetchProduct();
                $('#updateProductModal').modal('hide');
              }
            }
          });
        });

          // Delete product 
          $(document).on('click', '.delete_product', function(e){
          e.preventDefault();
          var prod_id = $(this).val();
          // console.log(prod_id);
          
          $('#delete_product_id').val(prod_id);

          $('#deleteProductModal').modal('show'); 
        });

        $(document).on('click', '.delete_product_btn', function(e){
          e.preventDefault();
          
          var prod_id = $('#delete_product_id').val();
          
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

          $.ajax({
              type: "DELETE",
              url: "/delete-product/"+prod_id,
              success: function(response){
                // console.log(response);
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#deleteProductModal').modal('hide');
                fetchProduct();
              }
          });
        });
      }) 
</script>
@stop