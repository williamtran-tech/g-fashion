@extends('layouts.master_layout')
@extends('layouts.cart_layout')
@section('cart')
{{-- <div class="carousel slide">
    <!-- The Slideshow -->
        <div class="img">
        </div>
</div> --}}
<div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Price</label>
      <label class="product-quantity">Quantity</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
    </div>
  
    <div class="product">
      <div class="product-image">
        <img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg">
      </div>
      <div class="product-details">
        <div class="product-title">Nike</div>
        <p class="product-description"></p>
      </div>
      <div class="product-price">12.99</div>
      <div class="product-quantity">
        <input type="number" value="2" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Remove
        </button>
      </div>
      <div class="product-line-price">25.98</div>
    </div>
  
    <div class="product">
      <div class="product-image">
        <img src="https://glab.vn/storage/products/2022/04/09/480x320/6251589f43d8f.jpg">
      </div>
      <div class="product-details">
        <div class="product-title">Nike</div>
        <p class="product-description"></p>
      </div>
      <div class="product-price">45.99</div>
      <div class="product-quantity">
        <input type="number" value="1" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Remove
        </button>
      </div>
      <div class="product-line-price">45.99</div>
    </div>
  
    <div class="totals">
      <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">71.97</div>
      </div>
      <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
      </div>
      <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">90.57</div>
      </div>
    </div>
        
        <button class="checkout">Checkout</button>
  
  </div>
  
@endsection
@section('menu_js_2')
<script src="js/navbar2.js"></script>
@endsection
