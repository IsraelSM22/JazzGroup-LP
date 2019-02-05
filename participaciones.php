<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/layouts/head.php"; ?>
    <link rel="stylesheet" href="assets/scss/participations.css">

    <style>
        .participations > a{
            color: black !important;

        }
    </style>

</head>

<body>


<!-- Including the navigation layout -->
<?php include __DIR__ . "/layouts/navigation.php"; ?>

<div class="content-delimiter fs60" style="width: 100%; max-width:1200px; margin: 0 auto;">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 title">PARTICIPACIONES</div>
            <div class="col-md-12">
                <!-- Stackla Widget Embed Code (start) -->
                <div class="stackla-widget" data-alias="airfrance.stackla.com" data-ct="" data-hash="5c473eb0ecf15"
                     data-id="51983" data-title="Social Wall Mexico" data-ttl="30"
                     style="width: 100%; overflow: hidden;"></div>
                <!-- Stackla Widget Embed Code (end) -->
            </div>
        </div>
    </div>
</div>


<!-- Stackla Widget Embed Code (start) -->
<script type="text/javascript">
    (function (d, id) {
        var t, el = d.scripts[d.scripts.length - 1].previousElementSibling;
        if (el) el.dataset.initTimestamp = (new Date()).getTime();
        if (d.getElementById(id)) return;
        t = d.createElement('script');
        t.src = '//assetscdn.stackla.com/media/js/widget/fluid-embed.js';
        t.id = id;
        (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(t);
    }(document, 'stackla-widget-js'));
</script>
<!-- Stackla Widget Embed Code (end) -->


</body>

</html>

