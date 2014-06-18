<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="/sds/business2/Public/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/sds/business2/Public/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/sds/business2/Public/theme.css" rel="stylesheet">

</head>

<body role="document">

<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1><?php echo ($s_Title); ?></h1>
        <p><?php echo ($s_Introduction); ?></p>
    </div>




    <div class="page-header">
        <h1>List of toher info</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item">编号：<?php echo ($s_id); ?></li>
                <li class="list-group-item">软件大小：<?php echo ($s_size); ?></li>
                <li class="list-group-item">软件语言：<?php echo ($s_language); ?></li>
                <li class="list-group-item">下载次数：<?php echo ($s_download_times); ?></li>
                <li class="list-group-item">评论次数：<?php echo ($s_comment_times); ?></li>
                <li class="list-group-item">上传时间：<?php echo ($s_uploadtime_date); ?></li>
                <li class="list-group-item">官方网站：<?php echo ($s_offical_site); ?></li>
                <li class="list-group-item">运行平台：<?php echo ($s_plateform); ?></li>
                <li class="list-group-item">百度网盘分流：<?php echo ($s_URL_baidu); ?></li>
                <li class="list-group-item">官方下载地址：<?php echo ($s_URL_offical); ?></li>
            </ul>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">

        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">

        </div><!-- /.col-sm-4 -->
    </div>

    <div class="page-header">
        <h1>Wells</h1>
    </div>
    <div class="well">
        <p>This is a homework site for PHP class</p>
    </div>


</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--<script src="../../dist/js/bootstrap.min.js"></script>-->
<!--<script src="../../assets/js/docs.min.js"></script>-->
</body>
</html>