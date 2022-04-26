@extends('master_layout');

@section('create_product')
<!--Message Create product successful-->
<!-- Modal -->
<div class="modal fade" id="messageCreate" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="text-align-center text-success" id="messageCreateLabel">Successful!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-align-center text-secondary">New product has been added.</h6>
            </div>
        </div>
    </div>
</div>

<!--Message Create product fail-->
<!-- Modal -->
<div class="modal fade" id="messageCreateFailed" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="text-align-center text-danger" id="messageCreateLabel">Create failed!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-align-center text-secondary">Product name existed.</h6>
            </div>
        </div>
    </div>
</div>

{{-- <div class="title">
    <h1>Create Product</h1>
</div> --}}

<div class="container mt-3">
    <form id="create-product-frm" method="POST" action="submit">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Product Name" name="name" required>
            <label for="name">Product Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="slug" placeholder="Product Name" name="slug" required>
            <label for="name">Product Slug</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="price" name="price" placeholder="Product Price" required>
            <label for="price">Product Price</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="category-select" name="category" required>
                <option value="">Select Category</option>
                <option value="1">Sneaker</option>
                <option value="2">Shirt</option>
            </select>
            <label for="category-select">Category</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="img-src" name="img_path" placeholder="Image Link" required>
            <label for="img-src">Image (URL)</label>
        </div>
        <button type="submit" class="btn btn-success btn-lg">Create</button>
    </form>
</div>
@endsection

