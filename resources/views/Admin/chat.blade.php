<html>
<head>
<link rel="stylesheet" href="{{asset('front/css/chat.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<div class="container">
    <div class="msg-header">
        <div class="msg-header-img">
           <img src="" alt=""> 
        </div>
        <div class="active">
            <h4>{{Auth::user()->name}}</h4>
            <h6>3 hours ago...</h6>
        </div>
         <div class="header-icons">
             <i class="fa fa-phone"></i>
             <i class="fa fa-video-camera"></i>
             <i class="fa fa-info-circle"></i>
         </div>

    </div>
    <div class="chat-page">
        <div class="msg-inbox">
            <div class="chats">
                <div class="msg-page">
                    @foreach($cl_chat as $cl_chat)
                    <div class="received-chats">
                        <div class="received-chats-img">
                            <img src="" alt="">
                        </div>
                        <div class="received-msg">
                            <div class="received-msg-inbox">
                                <p>{{$cl_chat->message}}</p>
                                <span class="time"> {{$cl_chat->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($vt_chat as $vt_chat)
                    <div class="outgoing-chats">
                        
                        <div class="outgoing-chats-msg">
                            <div class="outgoing-msg-inbox">
                                <p>{{$vt_chat->message}}</p>
                                <span class="time">{{$vt_chat->created_at}}</span>
                            </div>
                        </div>
                        <div class="outgoing-chats-img">
                            <img src="" alt="">
                        </div>
                    </div>
                    @endforeach

                   


                </div>
            </div>
        </div>

        <div class="msg-bottom">
            <div class="bottom-icons">
                <i class="fa fa-plus-circle"></i>
                <i class="fa fa-camera"></i>
                <i class="fa fa-microphone"></i>
            </div>
            <form action="{{route('vt_chat',$book->id)}}" method="POST">@csrf
            <div class="input-group">
                <input type="text" name="message" class="form-control" placeholder="Write a message">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                </div>
            </div>
            <button class="btn btn-success" type="submit" hidden>Send</button>
            <form>
        </div>
    </div>
</div>
    

</body>
</head>
</html>