<!DOCTYPE html>
<html lang="en">
<head>
<title>{{Config::get('app.system_name')}}-{{APP_PUBLIC_PATH}}</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
@section('css')
    <link href="{{APP_PUBLIC_PATH}}/css/uploadify.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/uniform.css" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/select2.css">
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/fullcalendar.css" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/matrix-style.css" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/matrix-media.css" />
<link href="{{APP_PUBLIC_PATH}}/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="{{APP_PUBLIC_PATH}}/css/jquery.gritter.css" />
<link href='{{APP_PUBLIC_PATH}}/css/font-css.css' rel='stylesheet' type='text/css'>

@show
</head>
<body>

<!--Header-part-->
@include('layout.logo')
<!--close-Header-part-->

<?php
$icon = array(
  'icon icon-home',
  'icon icon-signal',
  'icon icon-fire',
  'icon icon-th',
  'icon icon-inbox',
  'icon icon-fullscreen',
  'icon icon-th-list',
  'icon icon-pencil',
  'icon icon-user-md',
  'icon icon-tint',
  'icon icon-file',
  'icon icon-info-sign',
);

?>
<!--top-Header-menu-->
<!--start-top-serch-->
@include('layout.top')
<!--close-top-serch-->
<!--close-top-Header-menu-->

<!--sidebar-menu-->
@include('layout.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  @section('content')

  @show
</div>

<!--end-main-container-part-->

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; {{Config::get('app.system_name')}}. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
@section('js')
<script src="{{APP_PUBLIC_PATH}}/js/jquery.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.ui.custom.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/bootstrap.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/bootstrap-colorpicker.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/bootstrap-datepicker.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.plugin.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.sparkline.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.timeentry.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.toggle.buttons.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/masked.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.uniform.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/select2.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/matrix.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/matrix.form_common.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/wysihtml5-0.3.0.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.peity.min.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/bootstrap-wysihtml5.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/jquery.uploadify.js"></script>
<script src="{{APP_PUBLIC_PATH}}/js/common.js"></script>
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }//test
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
@show
</body>
</html>
