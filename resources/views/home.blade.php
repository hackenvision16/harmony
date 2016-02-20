@extends('layouts.app')

@section('content')
<div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">
                    <div class="side side-left">
                        <header class="codropsheader clearfix">
                            <span>Harmony <span class="bp-icon bp-icon-about" data-content="It is a querry resolver that lets you resolve your querries either through chat or calling facility."></span></span>
                            <h1>Querry Resolver</h1>
                            </header>
                        <div class="intro-content">
                            <i class="fa fa-3x fa-comment"></i>
                            <h1><span>Chat</span></h1>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="side side-right">
                        <div class="intro-content">
                            <i class="fa fa-3x fa-play"></i>
                            <h1><span>Call</span></h1>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                <div class="page page-right">
                    <div class="page-inner">
                        <section class="container-fluid well">
                            <h2 class="text-center">Every client is valuable.</h2>
                            <center>
                            <p><i class="fa fa-5x fa-phone"></i></p>
                            </center>
                            <br/>
                        <p><h3 style="margin-left:318px"><b>Feedback</b></h3>
                            <form id="ratingsForm">
    <div class="stars">
        <input type="radio" name="star" class="star-1" id="star-1" />
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="star" class="star-2" id="star-2" />
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="star" class="star-3" id="star-3" />
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="star" class="star-4" id="star-4" />
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="star" class="star-5" id="star-5" />
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
  </form>
  </p>
</section>
                        
                    </div><!-- /page-inner -->
                </div><!-- /page-right -->
                <div class="page page-left">
                    <div class="page-inner">
                        <section>
                        <center>
                            <h2>Welcome to the chat portal.</h2>
                            <p>Click here to enter the chat query resolution window.</p>
                            <p>You will be re directed to one to one chat window with one of our executives.</p>
                            <hr/>
                            <button class="btn btn-lg btn-success" onclick="func1()">Enter chat window</button>
                            </center>
                        </section>
                        
                    </div><!-- /page-inner -->
                </div><!-- /page-left -->
                <h1><a href="#" class="back back-right" title="back to intro">&rarr;</a></h1>
                <a href="#" class="back back-left" title="back to intro">&larr;</a>
            </div><!-- /splitlayout -->
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/cbpSplitLayout.js"></script>
        <script type="text/javascript">
        function func1(){
            window.location.assign("http://localhost:3000");

        }
        </script>
@endsection
