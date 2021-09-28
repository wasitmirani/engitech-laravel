@if(!empty($product))
<div class="col-md-4 col-sm-6 last">
    <div class="product-item">
        <div class="product-media">
            <a href="{{route('product.view',['id'=>$product->id,'slug'=>$product->slug])}}">
                <img src="https://i.pinimg.com/originals/70/b4/90/70b4905f581c11bec7de62059e2c212c.jpg" class="" alt="">
            </a>
            <div class="wrapper-add-to-cart">
                <div class="add-to-cart-inner">
                    <a role="button"  onclick="addtocart({!!$product->id!!})" class="octf-btn octf-btn-primary mt-4">Add to cart </a>
                </div>
            </div>
        </div>
        <h2 class="woocommerce-loop-product__title"><a href="{{route('product.view',['id'=>$product->id,'slug'=>$product->slug])}}">{{Str::limit($product->name,!empty($title_limit) ? $title_limit : 25, '....')}}</a></h2>
        <div class="star-rating">
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
            <span><i class="fa fa-star"></i></span>
        </div>
        <span class="price-product"><span class="amount"><span class="">$</span>{{$product->unitPrice}}</span></span>
    </div>
</div>
@endif
