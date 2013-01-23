<!DOCTYPE html>

<html lang="en">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <!--[if gt IE 8]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->        

        <title>Virgo - Premium Admin Template</title>

        <link href="<?php echo base_url(); ?>css/stylesheets.css" rel="stylesheet" type="text/css" />      
        <!--[if lt IE 10]>
            <link href="<?php echo base_url(); ?>css/ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->        
        <link rel="icon" type="image/ico" href="favicon.ico"/>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/jquery/jquery-1.8.3.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/jquery/jquery-ui-1.9.1.custom.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/jquery/globalize.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/other/excanvas.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/other/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/bootstrap/bootstrap.min.js'></script>            
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/fancybox/jquery.fancybox.pack.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/highcharts/highcharts.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/highcharts/modules/exporting.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/epiechart/jquery.easy-pie-chart.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/sparklines/jquery.sparkline.min.js'></script>    
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/pnotify/jquery.pnotify.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/fullcalendar/fullcalendar.min.js'></script>        
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/datatables/jquery.dataTables.min.js'></script>    
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/wookmark/jquery.wookmark.js'></script>        
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>js/plugins/uniform/jquery.uniform.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>js/plugins/select/select2.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/multiselect/jquery.multi-select.min.js'></script>    
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/validationEngine/jquery.validationEngine.js'></script>        
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/stepywizard/jquery.stepy.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/animatedprogressbar/animated_progressbar.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/media/mediaelement-and-player.min.js'></script>    
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/cleditor/jquery.cleditor.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/shbrush/shCore.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/shbrush/shBrushXml.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/shbrush/shBrushJScript.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins/shbrush/shBrushCss.js'></script>    
        <script type='text/javascript' src='<?php echo base_url(); ?>js/plugins.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/charts.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/actions.js'></script>
    </head>
    <body>
        <div class="login" id="login">
            <div class="wrap">
                <h1>Авторизация</h1>
                <form action="<?php base_url(); ?>/index.php/login/login_in" method="post" id="validate">
                    <div class="row-fluid">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input type="text" name="login" placeholder="Login" class="validate[required]"/>
                        </div>                                                 
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                            <input type="password" name="password" placeholder="Password" class="validate[required]"/>
                        </div>          
                        <div class="dr"><span></span></div>                                
                    </div>                
                    <div class="row-fluid">
                        <div class="span8">
                        </div>
                        <div class="span4    TAR">
                            <input type="submit" class="btn btn-block btn-primary" value="Войти"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>