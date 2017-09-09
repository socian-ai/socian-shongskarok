<!DOCTYPE html>
<!-- saved from url=(0059)http://basictheme.net/html/white-preview/white/contact.html -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
    <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
    <style type="text/css">@media  print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media  screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
    <style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>সোশিয়ান - সংস্কারক</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon icon -->
    <link rel="icon" href="<?php echo e(URL::to('socian.png')); ?>">
    <!-- All CSS Files Here -->
    <link rel="stylesheet" href="<?php echo e(URL::to('bootstrap.min.css')); ?>">

    <link href="<?php echo e(URL::to('summernote.css')); ?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo e(URL::to('et-line-fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('global.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('font-awesome.min.css')); ?>">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<!-- PRELOADER -->
<div class="page-loader" style="display: none;">
    <div class="loader">লোড হচ্ছে...</div>
</div>
<!-- /PRELOADER -->
<!-- header start -->
<header id="sticky-header">
    <div class="header-area">
        <div class="container sm-100">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="logo text-upper">
                        <h4><a href="https://socian.xyz">সোশিয়ান</a></h4>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8"></div>
                <div class="col-md-2 col-sm-2">
                    <div class="logo text-upper">
                        <h4><a href="https://sgchecker.socian.xyz">সংস্কারক</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
<!-- basic-breadcrumb start -->
<div class="basic-breadcrumb-area gray-bg ptb-30">
    <div class="container">
        <div class="basic-breadcrumb text-center">
            <h3 class="">বাংলা কিছু লিখুন!</h3>
        </div>
    </div>
</div>
<!-- basic-breadcrumb end -->

<div class="basic-contact-form ptb-90">
    <div class="container">

        <div class="row">
            <form id="contact-form" action="http://basictheme.net/html/white-preview/white/mail.php" method="post">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <div class="summernote"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-lg btn-round btn-dark">সংস্কার</button>
                    </div>
                </div>
                <!-- .row -->
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="basic-footer text-center gray-bg ptb-30">
        <div class="container">
            <div class="copyright mt-20">
                <p>গ্রহস্বত্ব © ২০১৬ - ২০১৭ - <a href="https://socian.xyz">সোশিয়ান লিঃ</a> | সর্বস্বত্ব সংরক্ষিত</p>
            </div>
        </div>
    </div>
</footer>
<!-- All js plugins here -->

<script src="<?php echo e(URL::to('jquery.min.js')); ?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(URL::to('bootstrap.min.js')); ?>"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo e(URL::to('summernote.min.js')); ?>"></script>

<script>
    jQuery(document).ready(function () {
        var ppp = <?php echo json_encode($wordlist) ?>;
                //JSON.parse('<?php echo e(json_encode($wordlist)); ?>');

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            toolbar: false,
            placeholder: 'কিছু লিখুন...',
            hint: {
                words: ppp,
                match: /([^\u0000-\u007F]|\w)+/,
                search: function (keyword, callback) {
                    callback($.grep(this.words, function (item) {
                        return item.indexOf(keyword) === 0;
                    }));
                }
            }
        });
    });
</script>

</body>
</html>