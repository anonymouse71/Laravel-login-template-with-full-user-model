
@extends('layouts.default')
@section('content')
<div class="container">

    {{--first look--}}
    <div class="span3 well">
        <center>
            <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
            <h3>{{$users->name}}</h3>
            <em>click my face for more</em>
            <span aria-hidden="true" class="li_timer fs1"></span>
		</center>
    </div>


    {{--end of first look--}}

    {{--pop up screen--}}

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

                    <h4 class="modal-title" id="myModalLabel">More About {{$users->name}}</h4>

                    </div>

                 <div class="modal-body">

                    <center>
                 <a>  <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><small> {{$users->full_name}} </small></h3>
                        <span><strong>Skills: </strong></span>
                        <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                        <span class="label label-success">Windows XP, Vista, 7</span>
                    </center>

                    <hr>

                    <center>
                       <p class="text"><strong>Email: </strong>{{$users->email}}</p>
                    <br>
                        <p class="text"><strong>Phone: </strong>{{$users->phone}}</p>
                    <br>
                        <p class="text"><strong>Registration No.: </strong>{{$users->reg}}</p>
                        <br>
                        <p class="text"><strong>Session: </strong>{{$users->session}}</p>   </center>
                </div>



                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-info" data-dismiss="modal">I've heard enough about {{$users->name}}</button>
                    </center>
              </div>
                {{-- end of pop up screen--}}


        </div>
    </div>
</div>

    @stop