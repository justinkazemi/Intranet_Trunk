@extends('layouts.default')
@section('head')
{{HTML::script('js/jquery-ical.js')}}
{{ HTML::style('css/cal.css')}}
@stop

@section('content')
	<div id="statusbar">
        	<div class="webstatus">
  				<h1>HBI Website Status:</h1>     
            </div>
            <div class="date">
           		<h1>October 28, 2013</h1>
            </div>
        </div>
        <div id="main">
        
        <!-- Left Column Content -->
        	<div id="main-left">
                <div class="imagebox">
                </div>
                
                <div class="rssfeed">
                <p>RSS FEED<P>
                </div>
                <div class="rssfeed">
                <p>RSS FEED<P>
                </div>
                <div class="rssfeed">
                <p>RSS FEED<P>
                </div>
                <div class="rssfeed">
                <p>RSS FEED<P>
                </div>
            </div>

        <!-- Right Column Content -->
            <div id="main-right">
                <div class="iconbox">
                    <a href="#" div class="icon1"></a>
                    <a href="#" div class="icon2"></a>
                    <a href="http://supportnet.hbinsights.com/hbisupport/upload" div class="icon3"></a>
                </div>
                
                <div class="widgetrow1">
                    <div class="weather">
                    	<div class="weatherbar">
                        	<h2>Weather</h2>
                        </div>
                        <div class="weatherwidget">
                        
                        	
                            <iframe src="http://apps.nollr.com/weather/" width="180px" height="161px" frameborder="0" scrolling="no" seamless="seamless">
                              <p>Your browser does not support iframes.</p>
                            </iframe>
                            
                        </div>
                    </div>
                    <div class="minicalendar">
                    	<div class="minicalendarbar">
                        	<h2>Calendar</h2>
                        </div>
                        <div id="container">
								<div id="ical"></div>
							</div>
                    </div>
                </div>
                
                <div class="widgetrow2">
                    <div class="personallinks">
                    	<div class="personallinksbar">
                        	<h2>Personal Links</h2>
                    	</div>
                        <div class="personallinkswidget">
                        </div>
                    </div>
                    <div class="quicklink">
                    	<div class="quicklinkbar">
                        	<h2>Company Quick Links</h2>
                    	</div>
                        <div class="quicklinkwidget">
                        </div>
                    </div>
                </div>
                
                <div class="widgetrow3">
                    <div class="birthdays">
                    	<div class="birthdaysbar">
                        	<h2>Upcoming Birthdays</h2>
                    	</div>
                        <div class="birthdayswidget">
                        </div>
                    </div>
                    <div class="eventss">
                    	<div class="eventssbar">
                        	<h2>Upcoming Events</h2>
                    	</div>
                        <div class="eventsswidget">
                        </div>
                    </div>
                </div>
                
                <div class="widgetrow4">
                	<div class="newdocsbar">
                    	<h2>Company Documents</h2>
                    </div>
                    <div class="newdocs">
                    </div>
                </div>
                
        	</div>
        </div>
     </div>
     <script type="text/javascript">
			$(document).ready(function()
			{	
				$("#ical").ical({
					/*beforeMonth:function(date)
					{
						$.ajax({
							type: "GET",
							url: "action.php",
							dataType: "json",
							data: "date="+date,
							async: false,
							success: function(json){
							    $.fn.ical.changeEventDates(json); 
							}   
						})
					},*/
					//daynames: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					startOnSunday: true,
					eventdates: [{"date": "2012-03-21", "title": "My birthday", "desc": "Its my birthday!"},
								 {"date": "yyyy-01-01", "title": "New Year", "desc": "Its a new year!"},
								 {"date": "2012-mm-01", "title": "New Month", "desc": "First day of the new month!"},
								 {"date": "2012-mm-01", "title": "New Month", "desc": "First day of the new month!"},
								 {"date": "2012-09-01", "title": "Convention", "desc": "September convention."}, 
								 {"date": "2012-09-02", "title": "Convention", "desc": "September convention day two."}, 
								 {"date": "2012-mm-01", "title": "Towl", "desc": "Dont forget to bring a towl."}	
								]
				});

			});
		</script>
@stop