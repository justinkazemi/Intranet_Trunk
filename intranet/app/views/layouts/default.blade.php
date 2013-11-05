<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>HBI Intranet</title>
{{ HTML::style('css/layout.css')}}
{{HTML::script('http://code.jquery.com/jquery-1.10.2.min.js')}}
@yield('head')
</head>

<body>

	<div id="search">
        </div>
	<div id="all">
		
         <div id="header1">
        	<div class="header1mid">
        		<div class="logo"></div>
				<div class="search"></div>
                
                <h3>You are logged in as, tpugh &nbsp; &nbsp; &nbsp;Logout</h3> 
        	</div>
         
		</div>
        
        <div id="navibar">
        	<div class="navibarmid">
        		<div class="menu">
                
                	<ul>

                        <li>
                        	<a href="#" class="borders">Home</a>
                        </li>
                        
                        <li>
                        	<a href="#" class="borders">Company Info</a>
                        </li>
                        
                        <li>
                        	<a href="#" class="borders">Policies & Procedures</a>
                        </li>
                                                
                        <li>
                        	<a href="#" class="borders">Forms</a>
                        </li>
                        
                     
                                                
                    </ul>
                
                
                </div>
            </div>
        </div>

        <div id='main_container'>
            @yield('content')
        </div>

        </body>
</html>