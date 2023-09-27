<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 & Vue.js app</title>
</head>
<body>

@auth

<p>Witaj, zostałeś poprawnie zalogowany.</p>
<form action="/logout" method="POST">
    @csrf
<button>Wyloguj</button>
   

<div class="newPost">
<h2 class="post-title">Opublikuj</h2>
<form action="/create-post" method="POST">
    @csrf
<input type="text" name="title" placeholder="post title">
<textarea name="content" placeholder="post content..."></textarea>
<button>Zapisz post</button>

</form>
</div>

<div class="allPosts">
    <h2>Nowe Posty</h2>
    @foreach($posts as $post)

<div class="singlePost">
    <h3>
        {{$post['title']}}
        {{$post['contetnt']}}
    </h3>
</div>

    @endforeach
</div>

@else

<div class="regist">
<h2 class="title">Zarejstruj się</h2>
<form action="/register" method="POST">
    @csrf
    <input name="name" type="text" placeholder="name">
    <input name="email" type="text" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <button>Zarejstruj</button>
</form>
    </div>

    <div class="login">
<h2 class="title">Zaloguj się</h2>
<form action="/login" method="POST">
    @csrf
    <input name="loginname" type="text" placeholder="name">
    <input name="loginpassword" type="password" placeholder="password">
    <button>Zaloguj</button>
</form>
    </div>


@endauth


   
</body>
</html>