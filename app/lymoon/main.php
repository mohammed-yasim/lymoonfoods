<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lymoon Foods Taste of Goodness</title>
    <?php  $this->load->view('lymoon/lib/meta'); ?>
</head>

<body>
    <header>
        <?php $this->load->view('lymoon/lib/nav');?>
        <?php $this->load->view('lymoon/lib/banner');?>
    </header>
    <?php $this->load->view('lymoon/lib/product_slider');?>
    <?php $this->load->view('lymoon/lib/product_banner');?>
    <?php $this->load->view('lymoon/lib/about');?>
    <?php $this->load->view('lymoon/lib/media');?>
    <?php $this->load->view('lymoon/lib/reach-us');?>
    <?php $this->load->view('lymoon/lib/footer');?>
</body>
<?php $this->load->view('lymoon/lib/js');?>
<script defer src="./cdn/jquery.flexslider-min.js"></script>
<script defer src="/cdn/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            controlsContainer: $(".custom-controls-container"),
            directionNav: false,
            dist: 0
        });
        $('.parallax').parallax();
        $('.lymoon-carousel ').carousel({
            numVisible: 7,
            indicators: true
        });

    });
</script>
</html>