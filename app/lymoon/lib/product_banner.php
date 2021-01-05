<section class="lymoon-product-slider-section">
    <h2 class="laymoon-zap lpsc">PRODUCTS</h2>
    <div class="lymoon-product-slider">
        <div class="circlular">

            <div class="circle">
                <a href="/products/<?php echo (urlencode('Curry Powder')); ?>"><img src="/cdn/products_cat/Curry Powder.png" /></a>
            </div>
            <div class="circle">
                <a href="/products/<?php echo (urlencode('FERMENTED & VISCOUS FOOD')); ?>"><img src="/cdn/products_cat/FERMENTED & VISCOUS FOOD.png" /></a>
            </div>
            <div class="circle">
                <a href="/products/<?php echo (urlencode('Oils & Liquids')); ?>"><img src="/cdn/products_cat/Oils & Liquids.png" /></a>
            </div>
            <div class="circle">
                <a href="/products/<?php echo (urlencode('Taste Rich Pickles')); ?>"><img src="/cdn/products_cat/Taste Rich Pickles.png" /></a>
            </div>
        </div>
    </div>
    <div class="container-fluid lymoon-product-slider-bottom">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-6 col-md-6 col-sm-10">
                <a class="prev" onclick="toggles()">&#10094;</a>
                <a class="next" onclick="toggles()">&#10095;</a>
                <h1 class="lymoon-title" style="font-family:laymoon-rich;">Laymoon Spreads</h1>
                <p class="lymoon-justify">We are fortunate to introduce our wide range of products from the house of
                    Lymoon, contributing to the perfect oriental taste, revolutionizing every kitchen with enhancing
                    aromas and flavors of perfectly cooked food, that tantalizes nostrils and satisfies the taste
                    buds.</p>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        function liSorter(a, b) {
}
        toggles = function() {
            $('.circle').toggle('slide');
            $('.circle').toggle('slide');
        }
    });
</script>