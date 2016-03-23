<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FMS Jobs Fair</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet">

    <link href="<?php echo base_url("fonts/css/font-awesome.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/animate.min.css") ?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url("css/custom.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/icheck/flat/green.css") ?>" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url("css/editor/external/google-code-prettify/prettify.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/editor/index.css") ?>" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url("css/select/select2.min.css") ?>" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url("css/switchery/switchery.min.css") ?>" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/dataTables.bootstrap.min.css"); ?>" />

    <script src="<?php echo base_url("js/jquery.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("js/jquery.dataTables.min.js"); ?>"></script>
    

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">                        
                        <a href="<?php echo site_url('home');?>" class="site_title"><i class="fa fa-paw"></i> <span>Fms Jobs Fair</span></a>
                        
                    </div>
                    <div class="clearfix"></div>


                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo base_url('images/img.png'); ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $_SESSION['username']; ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-folder-open"></i> ข้อมูลการจัดงาน <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">ประวัติการจัดงาน</a>
                                            
                                        <ul class="nav side-menu">
                                            <li>
                                                <i><a href="<?php echo site_url('event_controller');?>">เพิ่มข้อมูล</a></i>
                                            </li>
                                        </ul>   
                                        <ul class="nav side-menu">
                                            <li>
                                                <i><a href="<?php echo site_url('event_controller/list_event_master');?>">ข้อมูลของงาน</a>

                                                </i>
                                            </li>
                                        </ul>       
                                            
                                        </li>

                                        <li><a href="#">ข้อมูลการจัดงานแต่ละครั้ง</a>
                                            <ul class="nav side-menu">
                                            <li>
                                                <i><a href="<?php echo site_url('event_controller/event_time_form');?>">เพิ่มข้อมูล</a></i>
                                            </li>
                                        </ul>   
                                        <ul class="nav side-menu">
                                            <li>
                                                <i><a href="<?php echo site_url('event_controller/list_event');?>">ข้อมูลการจัดงานแต่ละครั้ง</a>

                                                </i>
                                            </li>
                                        </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i> ข้อมูลบริษัท <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('company_controller'); ?>">เพิ่มข้อมูลบริษัท</a>
                                        </li>
                                        <li><a href="<?php echo site_url('company_controller/list_company');?>">ดูข้อมูลบริษัท</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-newspaper-o"></i> ตำแหน่งงาน <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('job_controller'); ?>">เพิ่มตำแหน่งงาน</a>
                                        </li>
                                        <li><a href="<?php echo site_url('job_controller/job_position');?>">เพิ่มข้อมูลตำแหน่งงาน</a>
                                        </li>
                                        <li><a href="<?php echo site_url('job_controller/list_position');?>">ตำแหน่งงานที่เปิดรับสมัคร</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> สาขาวิชา <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('major_controller'); ?>">เพิ่มสาขา</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-rss-square"></i> ข่าวสาร <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('news_controller') ?>">เพิ่ม/อัพเดตข่าวสาร</a>
                                        </li>  
                                        <li><a href="<?php echo site_url('news_controller/list_news') ?>">อ่านข่าว</a>
                                        </li>                                       
                                    </ul>
                                </li>                                
                                <li><a><i class="fa fa-bar-chart-o"></i> ผลการประเมินการจัดงาน <span class="fa fa-chevron-down"></span></a>                                    
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url('poll_controller/add_form') ?>">เพิ่มชื่องานสำหรับการประเมิน</a>
                                        </li>   
                                        <li><a href="<?php echo site_url('poll_controller') ?>">ดูผลการประเมิน</a>
                                        </li>                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                      
                    </div>
                    <!-- /sidebar menu -->

                   
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i>
                            </a>                            
                        </div>                        
                        <ul class="nav navbar-nav navbar-right">                        
                            <li><a href="<?php echo site_url('login/destroySession');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-user">&nbsp;</span><?php echo $_SESSION['username']; ?></a></li>
                        </ul>
                    </ul>
                    </nav>
                </div>

            </div>
        
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>
            
                   
        <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

        <!-- chart js -->
        <script src="<?php echo base_url("js/chartjs/chart.min.js") ?>"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url("js/progressbar/bootstrap-progressbar.min.js") ?>"></script>
        <script src="<?php echo base_url("js/nicescroll/jquery.nicescroll.min.js") ?>"></script>
        <!-- icheck -->
        <script src="<?php echo base_url("js/icheck/icheck.min.js") ?>"></script>
        <!-- tags -->
        <script src="<?php echo base_url("js/tags/jquery.tagsinput.min.js") ?>"></script>
        <!-- switchery -->
        <script src="<?php echo base_url("js/switchery/switchery.min.js") ?>"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url("js/moment.min2.js") ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("js/datepicker/daterangepicker.js") ?>"></script>
        <!-- richtext editor -->
        <script src="<?php echo base_url("js/editor/bootstrap-wysiwyg.js") ?>"></script>
        <script src="<?php echo base_url("js/editor/external/jquery.hotkeys.js") ?>"></script>
        <script src="<?php echo base_url("js/editor/external/google-code-prettify/prettify.js") ?>"></script>
        <!-- select2 -->
        <script src="<?php echo base_url("js/select/select2.full.js") ?>"></script>
        <!-- form validation -->
        <script type="text/javascript" src="<?php echo base_url("js/parsley/parsley.min.js") ?>"></script>
        <!-- textarea resize -->
        <script src="<?php echo base_url("js/textarea/autosize.min.js") ?>"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="<?php echo base_url("js/autocomplete/countries.js") ?>"></script>
        <script src="<?php echo base_url("js/autocomplete/jquery.autocomplete.js") ?>"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="<?php echo base_url("js/custom.js") ?>"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>