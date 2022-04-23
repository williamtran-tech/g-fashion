// HOME PRELOADER


const preloader = document.querySelector('.preloader');

const fadeEffect = setInterval(() => {
  if (!preloader.style.opacity) {
    preloader.style.opacity = 1;
  }
  if (preloader.style.opacity > 0) {
    preloader.style.opacity -= 0.1;
  } else {
    clearInterval(fadeEffect);
  }
}, 200);

window.addEventListener('load', fadeEffect);


// ADD SMOOTH SCROLL

var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true,
    easeInOutQuad:true
});

// TOGGLE BUTTON PLUS/MINUS - PAGE FOORTER
	$(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".flat").addClass("flaticon-remove").removeClass("flaticon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".flat").removeClass("flaticon-plus").addClass("flaticon-remove");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".flat").removeClass("flaticon-remove").addClass("flaticon-plus");
        });
    });


// CHATBOX
    function openChat() {
      document.getElementById("chat_form").style.display = "block";
    }

    function closeChat() {
      document.getElementById("chat_form").style.display = "none";
    }


//SEARCH BAR - Open search site on Enter
var input = document.getElementById("mini_search_input");

    input.addEventListener("keyup",function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
        }
    });

    function openSearch() {
        window.open("./search.html");
    }




//CART SHOW UP
        $('.flaticon-shopping-cart').click(function(){
            $('.mh_cart_overlay').css("visibility","visible");
            $('.mh_cart').css("right", "0");
        })
            
        $('.addToCart').click(function(){
            $('.mh_cart_overlay').css("visibility","visible");
            $('.mh_cart').css("right", "0");
            $('.addToCart').html('In your Cart <span class="btn_icon"><i class="flaticon-shopping-cart"></i></span>');
        })
        $('.mh_cart_overlay').click(function(){
            $('.mh_cart_overlay').css("visibility","hidden");
            $('.mh_cart').css('right','-100%');
        })

        $('.mh_close_cart').click(function(){
            $('.mh_cart_overlay').css("visibility","hidden");
            $('.mh_cart').css('right','-100%');
        })

    //SUBTOTAL CART
        $(document).ready(function(){
        $('.add_qty').on('click', function(ev) {
            $currObj = $(ev.currentTarget);
            var currQCount = getCurrQCount($currObj);
                currQCount++;
                updateData($currObj, currQCount);
         });

         $('.remove_qty').on('click', function(ev) {
            $currObj = $(ev.currentTarget);
            var currQCount = getCurrQCount($currObj);

                currQCount--;
                updateData($currObj, currQCount);

         });


        function getCurrQCount($currObj){
            return $currObj.siblings(".input_qty").val();
        }

        function updateData($currObj, currQCount){
            $currObj.siblings(".input_qty").val(currQCount);

            var $parentObj = $currObj.closest(".item-row");
            var itemPrice = $parentObj.find(".item_price").attr("data-price");
            var itemCost = Number(itemPrice) * currQCount;
            $parentObj.find(".item-cost-val").text(itemCost);

            var subTotal = getSubTotal();
            var vatAmount = getVatAmount();
            var totalCost = subTotal + vatAmount;
            $("#subtotal").text(subTotal);
            $("#total_vat").text(vatAmount);
            $("#total_cost").text(totalCost);
        }

        function getSubTotal(){
            var subTotal = 0;
            $(".item-cost-val").each(function() {
                subTotal+= Number($(this).text());
            });
            return subTotal;
        }

        function getVatAmount(){
            var vatPercentage = 0.2;
            return vatPercentage * getSubTotal();
        }

    });




    