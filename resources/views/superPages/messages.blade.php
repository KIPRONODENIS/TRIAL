@extends('layouts.super')

@section ('content')


@if(session()->has('message'))

      <p class="alert alert-success">{{session()->get('message')}}</p>

      @endif

   <h4 class="mt-4 mb-2">Direct Chat</h4>
        <div class="row">
        <p style="width: 200px;background-color: white;">         </p>

          <div class="col-md-6">
            <!-- DIRECT CHAT SUCCESS -->
            <div class="card card-success card-outline direct-chat direct-chat-success">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success"></span>
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                          data-widget="chat-pane-toggle">
                    <i class="fa fa-comments"></i></button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                 @if(session()->has('users'))
                 @foreach(session('users') as $user)

                   @if(!$user->message=="")
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-left">{{$user->name}}</span>
                      <span class="direct-chat-timestamp float-right">{{$user->created_at}}</span>
                    </div>
                    
                    <div class="direct-chat-text">
                    {{$user->message}}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  @endif
                
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  @if(!$user->reply=="")
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                      <span class="direct-chat-name float-right">Admin</span>
                      <span class="direct-chat-timestamp float-left"></span>
                    </div>
                    <!-- /.direct-chat-info -->
                    
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                {{$user->reply}}
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  @endif

                  <div id="phone"  style="display: none;"> {{$user->phone}}</div>


                  @if($loop->last)

                <div id="user_id"  style="display: none;"> {{$user->id}}</div>

                  @endif


                @endforeach
                
                    @endif

              
                  <!-- /.direct-chat-msg -->
                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="/reply" method="post">
                  {{csrf_field()}}

                    

                    <div class="input-group">
                   <input type="hidden" name="id" id="userm" value="">
                      <input type="hidden" name="phone" id="number" value="">
                    <input type="text" name="reply" placeholder="Type Message ..."  class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-success">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->

         

          
        </div>



@endsection

@section('messages')

 <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">{{session('count')}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
@if(isset(session('data')))
          @foreach(session('data') as $data)

          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$data->name}}
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">{{$data->message}}</p>
                <p class="pull-right text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>{{$data->created_at}}</p>
              </div>
            </div>


            <!-- Message End -->
            <form method="post" action="messages">
              {{csrf_field()}}


              <input type="hidden" name="id" value="{{$data->phone}}">
            
            <input type="submit" name="message" class=" btn btn-success" id="view" value="view">
          </form>
          </a>

         <div class="dropdown-divider"></div>


          
         @endforeach

@endif
         
           
            <!-- Message End -->
          
         
        
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>






@endsection

@section('script')
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){


  var phone=$("#phone").text();
    var id=$("#user_id").text();

$('#number').val(phone);
$('#userm').val(id);
});


</script>
@endsection

