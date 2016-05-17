@extends('master')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-md-12">
        {{--page banner--}}
        <div class="row">
            <div class="col-md-12 home-banner">
                <div class="page-banner">
                    <img src="http://placehold.it/1600x400" class="img-responsive center-block" alt="Tennis Site HomePage Banner">
                </div>
            </div>
        </div>
        {{--main content--}}
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <section class="row">
                        {{--featured--}}
                        <div class="col-md-6">
                            <h3 class="text-uppercase">Featured</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <img src="" alt="">
                                    </a>
                                </li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                        {{--latest resutls table --}}
                        <div class="col-md-6">
                            <h3 class="text-uppercase">Latest</h3>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#scores" aria-controls="home" role="tab" data-toggle="tab">Scores</a></li>
                                <li role="presentation"><a href="#schedule" aria-controls="profile" role="tab" data-toggle="tab">Schedule</a></li>
                                <li role="presentation"><a href="#ranking" aria-controls="messages" role="tab" data-toggle="tab">Ranking</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="scores">...</div>
                                <div role="tabpanel" class="tab-pane" id="schedule">...</div>
                                <div role="tabpanel" class="tab-pane" id="ranking">...</div>
                            </div>
                        </div>
                    </section>
                </div>
                {{--adbar 1--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="adbar adbar-1">
                            <img src="http://placehold.it/1600x50?text=Advertisement" class="img-responsive center-block" alt="Advert banner 1">
                        </div>
                    </div>
                </div>
                {{--recent updates--}}
                <div class="container">
                    <section>
                        <h3 class="text-uppercase">Recent Updates</h3>
                        <div class="row">
                            {{--news--}}
                            <div class="col-md-4"></div>
                            {{--videos--}}
                            <div class="col-md-4"></div>
                            {{--photos--}}
                            <div class="col-md-4"></div>
                        </div>
                    </section>
                </div>
                {{--subscription--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <form action="#" class="form-inline text-center">
                                <label for="newsletter">
                                    Join our newsletter for latest updates on tournaments, players and more.
                                </label> <br>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="newsletter" placeholder="you@yourdomain.com">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{--adbar 2--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="adbar adbar-2">
                            <img src="http://placehold.it/1600x50?text=Advertisement" class="img-responsive center-block" alt="Advert banner 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection