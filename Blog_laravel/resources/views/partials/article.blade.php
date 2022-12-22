<article class="include_article" >
    <p><a href="/articles/{{$article->id}}">Article {{$article->id}}</a></p>
    <p>Subject: {{ $article['title'] }}</p>
    <div>
        <p style="width: 40%; text-overflow: ellipsis; overflow: hidden; white-space:nowrap">{{ $article['body']}}</p>
    </div>
    <p>{{ $article['created_at']}}</p>
    <p>By {{ $article->user->name}}</p>
    <p ><a class="buttn" href="/articles/{{$article->id}}">Voir plus...</a></p>
</article>
