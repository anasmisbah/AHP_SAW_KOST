<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    @include('templates.partials._headSide')
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        @include('templates.partials._sideNav')
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
            @include('templates.partials._headerUser')
        <!-- /header -->
        <!-- Header-->

        
        @yield('breadcumbs')

        <div class="content mt-3">
            @yield('content')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    @include('templates.partials._scriptSide')
</body>

</html>
