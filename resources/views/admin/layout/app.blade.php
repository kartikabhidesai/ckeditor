<!DOCTYPE html>
<html lang="en">
    <head>
         @include('admin.includes.header')
    </head>
    <body class="full_width">
             @include('admin.includes.leftpanel')
            
               <div id="maincontainer" class="clearfix">
                @include('admin.includes.bodyheader')
                    @yield('content')
                @include('admin.includes.bodyfooter')
                </div>
        @include('admin.includes.footer')
    </body>
</html>