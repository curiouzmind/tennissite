@extends('master')
@section('title', 'Single Match')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <h1 class="text-center text-capitalize">Match Statistics</h1>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span><a href="#">Matches</a></span>&nbsp; > &nbsp;<span>Single Match</span>
		</div>
	</div>
</div>
<!-- main content -->
<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span>abuja</span><span>interstate championships</span><span>Round 2</span>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="p1-scores">

                                        <!-- <td class="p1-scores"></td> -->
                                    </tr>
                                    <tr id="p2-scores"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
		</div>
		<div class="col-md-4 sidebar">
			<span class="placeholder">
				sidebar
			</span>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js async defer"></script> -->
	<!-- json data -->
    <script type="text/javascript">
        var playerScores = {
            "player1": ["Player 1",6,5,6,6,""],
            "player2": ["Player 2",4,7,4,4,""]
        }
        var p1 = "";
        var p2 = "";
        var set1,set2;

        for (set1=0;set1<playerScores.player1.length;set1++) {
            console.log("<td>" + playerScores.player1[set1] + "</td>");
            p1 += "<td>" + playerScores.player1[set1] + "</td>";
        }
        for (set2=0;set2<playerScores.player2.length;set2++) {
            console.log("<td>" + playerScores.player2[set2] + "</td>");
            p2 += "<td>" + playerScores.player2[set2] + "</td>";
        }
        document.getElementById("p1-scores").innerHTML = p1;
        document.getElementById("p2-scores").innerHTML = p2;
        
    </script>
@endsection