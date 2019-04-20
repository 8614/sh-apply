<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/assets/plugins/Hui/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/assets/plugins/Hui/lib/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/Hui/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/Hui/static/h-ui.admin/css/H-ui.admin.css" />


    <link rel="stylesheet" type="text/css" href="/assets/plugins/Hui/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/Hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/Hui/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/assets/plugins/Hui/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="/assets/css/number.css" />

    <!--分页css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/paginate.css" />

    <script type="text/javascript" src="/assets/js/common/jquery-1.10.2.min.js"></script>

    <title>商户平台</title>

</head>
<body>

<div class="web_shadow dis_n"></div>


@yield('content')

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/assets/plugins/Hui/lib/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="/assets/plugins/Hui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/assets/plugins/Hui/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/assets/plugins/Hui/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/assets/plugins/Hui/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript" src="/assets/scripts/admin_js.js?v=2"></script>

<!--日期date框-->
<link rel="stylesheet" type="text/css" media="all" href="/assets/plugins/date/jquery.datetimepicker.css" />
<script type="text/javascript" src="/assets/plugins/date/jquery.datetimepicker.js"></script>
<script type="text/javascript">
    $(window).resize();
    window.onload = function(){
        $('.from').datetimepicker({
            lang:'ch',
            timepicker:false,
            format:'Y-m-d',
            formatDate:'Y-m-d',
        });

        $('.to').datetimepicker({
            lang:'ch',
            timepicker:false,
            format:'Y-m-d',
            formatDate:'Y-m-d',
        });

        $('.applydate').datetimepicker({
            lang:'ch',
            timepicker:false,
            format:'Y-m-d',
            formatDate:'Y-m-d',
        });
    };
</script>

<script type="text/javascript">
    $(function(){
        /*$("#min_title_list li").contextMenu('Huiadminmenu', {
         bindings: {
         'closethis': function(t) {
         console.log(t);
         if(t.find("i")){
         t.find("i").trigger("click");
         }
         },
         'closeall': function(t) {
         alert('Trigger was '+t.id+'\nAction was Email');
         },
         }
         });*/
    });
    /*个人信息*/
    function myselfinfo(){
        layer.open({
            type: 1,
            area: ['300px','200px'],
            fix: false, //不固定
            maxmin: true,
            shade:0.4,
            title: '查看信息',
            content: '<div>管理员信息</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }

    function child_channel_edit(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }


</script>

@if(Session::has('alert'))
    <script>alert("{{Session::get('alert')}}")</script>
@endif

</body>
</html>
