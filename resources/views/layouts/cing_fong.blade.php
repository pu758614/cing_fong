<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>慶豐電機 - @yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- waves.css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('icon/icofont/css/icofont.css') }}" >
    <!-- morris chart -->
    <link href="{{ asset('css/morris.js/css/morris.css') }}" rel="stylesheet">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" >
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('layouts.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        @include('layouts.menu')
                    </nav>
                    <div class="pcoded-content">
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-icon show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id='modal_edit' style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">客戶資料編輯</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                序號
                                <input type="text" class="form-control" placeholder="Disabled text" value="1" disabled="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                姓名
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                電話
                                <input class="form-control" type="text" id="name" value="">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                手機
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                傳真
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                電子信箱
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                地址
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                LINE
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                統編
                                <input class="form-control" type="text" id="name" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                備註
                                <textarea class="form-control" required=""></textarea>
                                <span class="form-bar"></span>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">儲存</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-icon show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id='modal_view' style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">客戶資料</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">序號</h6>
                                <p class="text-muted m-b-0">1</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <span>
                                    <h6 style="margin-bottom: 0.1rem;">姓名</h6>

                                    <p class="text-muted m-b-0">黃小姐123</p>
                                </span>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">電話</h6>
                                <p class="text-muted m-b-0">07-3419215</p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">手機</h6>
                                <p class="text-muted m-b-0">0987654321</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">傳真</h6>
                                <p class="text-muted m-b-0">1234567</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">電子信箱</h6>
                                <p class="text-muted m-b-0">abc@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">地址</h6>
                                <p class="text-muted m-b-0">高雄市左營區重立路232巷2號</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">LINE</h6>
                                <p class="text-muted m-b-0">1234567</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">統編</h6>
                                <p class="text-muted m-b-0">9876543</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-inline-block">
                                <h6 style="margin-bottom: 0.1rem;">備註</h6>
                                <p class="text-muted m-b-0">aaaabbbbccccc</p>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- waves js -->
<script src="{{ asset('pages/waves/js/waves.min.js') }}"></script>

<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.js ') }}" ></script>

<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}" ></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}" ></script>
<!-- Morris Chart js -->
<script src="{{ asset('js/raphael/raphael.min.js') }}" ></script>
<script src="{{ asset('js/morris.js/morris.js') }}" ></script>
<!-- Custom js -->
<script src="{{ asset('js/morris-custom-chart.js') }}" ></script>
<script src="{{ asset('js/pcoded.min.js') }}" ></script>
<script src="{{ asset('js/vertical-layout.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datepicker-zh-TW.js') }}"></script>
<script>
    $(document).ready(function () {
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>
</body>

</html>
