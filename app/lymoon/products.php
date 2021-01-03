<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Lymoon Foods</title>
    <link href="/cdn/lymoon.css" rel="stylesheet" />
</head>

<body>
    <?php $this->load->view('lymoon/lib/nav'); ?>
    <div style="width: 100%;height:100px;"></div>
    <?php $this->load->view('lymoon/lib/product_banner'); ?>
    <?php $this->load->view('lymoon/lib/product_slider'); ?>
    <?php $this->load->view('lymoon/lib/footer'); ?>
</body>
<?php $this->load->view('lymoon/lib/js'); ?>

<script defer src="/cdn/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.lymoon-carousel ').carousel({
            numVisible: 7,
            indicators: true
        });

    });
</script>
</html>