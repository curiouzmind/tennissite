@extends('master')
@section('title', 'Player Profile')
@section('content')
<!-- page banner -->
<div class="row">
    <div class="col-md-12">
        <div class="overlay">
            <div class="profile-pic">
                <img class="img-responsive img-circle center-block" src="{{asset('img/player-pics/andyMurray.gif')}}" alt="Player Image">
                <h1 class="text-center text-capitalize player1">Andy Murray</h1>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs -->
<div class="row">
	<div class="col-md-12">
		<div class="breadcrumb">
			<a href="#"><i class="fa fa-home"></i></a>&nbsp; > &nbsp;<span><a href="#">Players</a></span>&nbsp; > &nbsp;<span>Andy Murray</span>
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
                            <span>Profile Summary</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                    <!-- tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation"><a href="#stats" aria-controls="stats" role="tab" data-toggle="tab">Stats</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in table-responsive" id="profile">
                            <table class="table table-striped table-responsive">
                                <caption class="text-uppercase">Overview</caption>
                                <tbody class="text-uppercase">
                                    <tr>
                                        <td>YEAR TURNED PRO</td>
                                        <td>2005</td>
                                    </tr>
                                    <tr>
                                        <td>CAREER MATCHES WON</td>
                                        <td>574</td>
                                    </tr>
                                    <tr>
                                        <td>CAREER MATCHES LOST</td>
                                        <td>170</td>
                                    </tr>
                                    <tr>
                                        <td>YEAR TO DATE MATCHES WON</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>YEAR TO DATE MATCHES Lost</td>
                                        <td>5</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-responsive">
                                <caption class="text-uppercase">Tournament Info</caption>
                                <tbody class="text-uppercase">
                                    <tr>
                                        <td>FRENCH OPENS PLAYED</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>EVENTS ENTERED</td>
                                        <td>Men's Singles</td>
                                    </tr>
                                    <tr>
                                        <td>BEST SINGLES PERFORMANCE</td>
                                        <td>Semi Finalist (2011, 2014, 2015)</td>
                                    </tr>
                                    <tr>
                                        <td>BEST DOUBLES PERFORMANCE</td>
                                        <td>2nd Round (2006)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-compact text-uppercase">
                                <caption>Tournament Single Results</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td>Austrialian Open</td>
                                        <td>WIMBLEDON</td>
                                        <td>US OPEN</td>
                                    </tr>
                                </thead>
                                <tbody class="text-uppercase">
                                    <tr>
                                        <td>2016</td>
                                        <td>1st</td>
                                        <td>4th</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-compact text-uppercase">
                                <caption class="">Tournament Doubles Results</caption>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td>Austrialian Open</td>
                                        <td>WIMBLEDON</td>
                                        <td>US OPEN</td>
                                    </tr>
                                </thead>
                                <tbody class="text-uppercase">
                                    <tr>
                                        <td>2016</td>
                                        <td>2nd</td>
                                        <td>1st</td>
                                        <td>3rd</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in table-responsive" id="stats">
                            <table class="table table-striped table-compact text-uppercase">
                                <thead>
                                    <tr>
                                        <th>round</th>
                                        <th>r1</th>
                                        <th>r2</th>
                                        <th>r3</th>
                                        <th>r4</th>
                                        <th>qf</th>
                                        <th>sf</th>
                                        <th>f</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>sets played</th>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>TIE BREAKS PLAYED</th>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
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
            <div class="player1"></div>
			<span class="placeholder">
				sidebar
			</span>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection