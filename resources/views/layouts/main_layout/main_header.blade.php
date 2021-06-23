<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="eSjXru9GV0gyCsGri0vx1iFFqozxuRufRYXFyrvs">
    
    <title>Laravel</title>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet" media="all">
    
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Start of Tawk.to Script-->
    <script async="" src="https://static-v.tawk.to/709/app.js" charset="UTF-8" crossorigin="*"></script><script async="" src="https://embed.tawk.to/5f3fc1b51e7ade5df442cde7/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f3fc1b51e7ade5df442cde7/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <style>
        .card-1 .card-heading{
            background-image: url({{url('assets/nrb.jpg')}});
            /* padding-top:210px; */
        }
        .card-1 .card-heading{
            padding-top: 210px ;
        }
        .card-1 .card-body{
            padding: 0 90px;
            padding-top: 55px;
            padding-bottom: 65px;
        }
        .input-group {
            position: relative;
            margin-bottom: 30px;
            border-bottom: 2px solid #ccc;
        }
        
    </style>
</head>

<body>
    
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-1">
                        <div class="card-heading"></div>
                        
                        <div class="card-body">
                            
                            @yield('content')
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>
    
    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
    <div class="daterangepicker dropdown-menu ltr single opensright">
        <div class="calendar left single" style="display: block;">
            <div class="daterangepicker_input">
                <input class="input-mini form-control" type="text" name="daterangepicker_start" value="" style="display: none;">
                <i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
                <div class="calendar-time" style="display: none;">
                    <div></div>
                    <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
                </div>
            </div>
            <div class="calendar-table">
                </div>
            </div>
            <div class="calendar right" style="display: none;">
                <div class="daterangepicker_input">
                    <input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;">
                    <i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
                    <div class="calendar-time" style="display: none;">
                        <div></div>
                        <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
                    </div>
                </div>
                <div class="calendar-table"></div>
            </div>
            <div class="ranges" style="display: none;">
                <div class="range_inputs">
                    <button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> 
                    <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
                </div>
            </div>
        </div>
    
    
    
    
</body>
</html>
