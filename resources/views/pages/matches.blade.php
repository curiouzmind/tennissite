@extends('master')
@section('title', 'Matches')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1 class="text-center text-capitalize">Matches</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<i class="fa fa-home"></i>&nbsp; > &nbsp;<span>Matches</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!-- tabs -->
			<ul class="nav nav-tabs" role="tablist">
	            <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Scores & Stats</a></li>
	            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Draws</a></li>
	            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Schedules</a></li>
	        </ul>
	        <!-- Tab panes -->
	        <div class="tab-content">
	        	<!-- scores & stats -->
	            <div role="tabpanel" class="tab-pane fade" id="home">
	            	<!-- filters -->
            		<ul class="list-inline">
            			<li>
            				<select>
            					<option>Men's Singles</option>
            					<option>Men's Doubles</option>
            					<option>Women's Singles</option>
            					<option>Women's Doubles</option>
            				</select>
            			</li>
            			<li class="btn btn-default "> Apply filter</li>
            		</ul>
            		<!-- content -->
            		<div id="scores"><!-- Default panel contents --></div>
	            </div>
	            <div role="tabpanel" class="tab-pane active" id="profile">
	            	<!-- filters -->
            		<ul class="list-inline">
            			<li>
            				<select class="text-uppercase">
            					<option>Men's Singles</option>
            					<option>Men's Doubles</option>
            					<option>Women's Singles</option>
            					<option>Women's Doubles</option>
            				</select>
        				</li>
        				<li>
            				<select class="text-uppercase">
            					<option>Round 1</option>
            					<option>Round 2</option>
            					<option>Round 3</option>
            					<option>Round 4</option>
            					<option>QuarterFinals</option>
            					<option>SemiFinals</option>
            					<option>Finals</option>
            				</select>
            			</li>
            			<li class="btn btn-default"> Apply filter</li>
            		</ul>
            		<!-- content -->
	            	<div id="draws"></div>
	            </div>
	            <div role="tabpanel" class="tab-pane fade" id="messages">Lorem Ipsum is simply dummy text of the printing.</div>
	        </div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
@endsection
@section('scripts')
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js async defer"></script> -->
	<!-- json data -->
	<script type="text/javascript">
		var xmlhttp = new XMLHttpRequest();
		var src = "/data/tennisdata.txt";

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myData = JSON.parse(this.responseText);
				myFunction(myData);
			}
		};
		xmlhttp.open("GET", src, true);
		xmlhttp.send();

		function myFunction(arr) {
			var draws = "";
			var scores = "";
			var i;
			for(i = 0; i < arr.length; i++) {
				draws += arr[i].player + " " + arr[i].country + '<br>';
				scores += 	'<div class="panel panel-primary">' +
							'<div class="panel-heading text-uppercase">' 
								+ '<span>' + arr[i].location + '</span>' + '&nbsp;' + " > " + '&nbsp;' + 
								'<span>' + arr[i].tournament + '</span>' + '&nbsp;' + " > " + '&nbsp;' + '<span>' 
								+ arr[i].stage + '</span>' + 
							'</div>' +
							'<div class="panel-body text-capitalize">' 
							+ 	'<table class="table table-bordered m0-down">'
								+	'<thead>' + '<tr>' + '<th>' + ' ' + '</th>' + '<th>' + 'Pts' + '</th>' + '<th>' + '1' + '</th>' + '<th>' + '2' +
									'</th>' + '<th>' + 3 + '</th>' + '<th>' + 4 + '</th>' + '<th>' + 5 + '</th>' + '</tr>' + '</thead>' + 
									'<tfoot>' + '<tr>' + '<td>' + '<button class="btn btn-primary">' + 'view stats' + '</button>' + '</td>' + '</tr>' + '</tfoot>' + 
									'<tbody>' +
										'<tr>' + '<td>' + arr[i].player + ' ' + '(' + arr[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>'+
										'<tr>' + '<td>' + arr[i].player + ' ' + '(' + arr[i].country + ')' + '<span class="pull-right">' + '<i class="fa fa-check"></i>' + '</span>' + '</td>' + '<td></td>' + '<td>' + 6 + '</td>' + '<td>' + 7 + '</td>' + '<td>' + 3 + '</td>' + '<td>' + 6 + '</td>' + '<td>' + '</td>' + '</tr>' + '</tbody>'
							+	'</table>' + 
							'</div>' +
							'</div>';
			}
			document.getElementById("draws").innerHTML = draws;
			document.getElementById("scores").innerHTML = scores;
			// document.getElementById("scores").innerHTML = scores;
		}
	</script>
@endsection