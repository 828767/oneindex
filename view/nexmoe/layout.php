<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
        <title><?php e(config('site_name'));?>
            - 私人云服务</title>
        <link rel="stylesheet" href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/css/style.css">
        <script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>
        <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <style>

        body {
            background-color: #fff;
            background-image: url("https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/img/bg_full.jpg") !important;
            padding-bottom: 60px;
            background-position: auto!important;
            background-size: cover !important;
            background-attachment: fixed !important;
            background-repeat: no-repeat !important;
        }

        @media screen and (max-device-width:980px) {
            body {
                background-image: url("https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/img/bg_m.jpg") !important;
                background-position: auto!important;
                background-size: cover !important;
                background-attachment: fixed !important;
                background-repeat: no-repeat !important;
            }

        }
    </style>
    <body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">

        <script src="https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/js/dianjiyuanquan.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/js/beijingzhuwang.js"></script>

        <div class="navSize">
            <div class="mymove">
                <a href="/"><img class="avatar" src="https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/img/avatar.jpg"/></a>

                <center>
                    <a href="/">
                        <button class="btn btn-gradient">
                            首页
                        </button>
                    </a>
                    <a href="//blog.kaixinwu.vip">
                        <button class="btn btn-gradient">
                            博客
                        </button>
                    </a>
                    <a href="/images">
                        <button class="btn btn-gradient">
                            图床
                        </button>
                    </a>
                </center>

                <div class="navRight">
                    <ul class="navul">
                        <li class="navli">
                            <a href="//blog.kaixinwu.vip" target="_blank">博客</a>
                        </li>
                        <li class="navli">
                            <a href="/login">登陆</a>
                        </li>
                    </ul>
                    <div class="icon"></div>
                </div>
            </div>
        </div>

        <div class="mdui-container">
            <div class="mdui-container-fluid">
                <div class="mdui-toolbar nexmoe-item">
                    <a href="/"><?php e(config('site_name'));?></a>
                    <?php foreach((array)$navs as $n=>$l):?>
                    <i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
                    <a href="<?php e($l);?>"><?php e($n);?></a>
                    <?php endforeach;?>
                    <!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon
                    material-icons">refresh</i></a>-->
                </div>
            </div>
            <?php view::section('content');?>
        </div>
        <div id="blog">
            <div id="comeIn">
                <center>
                    <a class="links" href="//kaixinwu.vip" target="_blank" id="a1">🍭主站</a>
                    <a class="links">
                        ・
                    </a>
                    <a class="links" href="//www.wubase.com" target="_blank" id="a2">🍢影视站</a>
                    <a class="links" id="a4">
                        ・
                    </a>
                    <a class="links" href="/images" target="_blank" id="a3">🍡图床</a>
                </center>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/gh/828767/oneindex/view/nexmoe/js/urusai.js"
            async="async"></script>

        <script>
            function delay(j) {
                var start = new Date().getTime();
                while (true) 
                    if (new Date().getTime() - start > j) 
                        break;
                    }
                var links = document.getElementsByClassName("fileLinks");
            function downall() {
                for (i = 0; i < links.length; i++) {
                    window.open(links[i].href, "download" + i)
                    delay(2000);
                }
            }
        </script>

    </body>

</html>