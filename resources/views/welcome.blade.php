<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latvian University</title>
    <link rel="stylesheet" href="css/app.css"/>
</head>

<body>
@auth
    Welcome {{(auth()->user()['name'])}}   <a class="auth-links" href="/logout">logout</a><br>
@endauth
@guest
    <a class="auth-links" href="/register">Register</a>
    <a class="auth-links" href="/login">Login</a>
@endguest
@auth
    <div class="create-news">
        <form class="create-news" method="POST" action="/createNews">
            @csrf
            <div>
                <h1>Create New</h1>
                <br>
                <span>Name</span><br>
                <input type="text" name="name"/>
            </div>
            <div>
                <span>Content</span><br>
                <input type="text" name="content"/>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
@endauth

@foreach($news as $new)
    <div class="news">
        <button type="button" class="collapsible">{{ $new->name}}</button>
        <div class="content">
            <p>{{ $new->content}}</p>
        </div>
        <button type="button" class="collapsible">Comments({{ $new->number_of_comments}})</button>
        <div class="content">

            <form method="POST" action="/addComment">
                @csrf
                <div>
                    <div>Create your comment</div>
                    <br>
                    <input type="hidden" value="{{$new->id}}" name="new_id">
                    <input type="hidden" value="{{ $new->number_of_comments}}" name="number_of_comments">
                    <div>
                        <div>
                            <input type="text" name="comment"/>
                        </div>

                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        <button type="submit">create</button>
                    </div>
                </div>
            </form>

            @foreach($comments as  $comment)
                @if($comment->commentable_id == $new->id)
                    <div class="comment">
                        @if($comment->owner == 0)
                            Comment from: Anonim
                            : {{$comment->body}}
                            <div class="date"> {{$comment->created_at}}</div>
                        @endif
                        <div class="comment">
                            <div class="comment-main">
                                Comment from {{DB::table('users')->where('id', $comment->owner)->first()->username}}
                                : {{$comment->body}}
                            </div>
                            <div class="date"> {{$comment->created_at}}</div>
                        </div>
                        <form method="POST" class="delete-new-section" action="/deleteComment">

                            @csrf
                            <div>
                                <input type="hidden" value="{{$new->id}}" name="new_id">
                                <input type="hidden" value="{{$comment->id}} " name="id"/>
                                <input type="hidden" value="{{ $new->number_of_comments}}" name="number_of_comments">
                            </div>
                            <button class="delete-new-button" type="submit">Delete Comment</button>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="date">Post created:{{$new->created_at}}</div>
        @auth
            <form method="POST" class="delete-new-section" action="/deleteNew">
                @csrf
                <div>
                    <input type="hidden" value="{{$new->id}} " name="id"/>
                </div>
                <button class="delete-new-button" type="submit">Delete</button>
            </form>
        @endauth
    </div>

@endforeach

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
</body>
</html>
