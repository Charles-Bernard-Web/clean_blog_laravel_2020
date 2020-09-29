
<!-- ADD A POST -->
<div class="clearfix">
  <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
</div>


<ul>
  @foreach ($posts as $post)
    <li class="nav-item">
      <div class="post-preview">
        <a href="{{route('posts.show', [
          'post' => $post->id,
          'slug' => Str::slug($post->titre, '-')
        ]) }}">
          <h2 class="post-title">
            {{$post->titre}}
          </h2>
          <h3 class="post-subtitle">
            {{$post->sousTitre}}
          </h3>
        </a>
        <p class="post-meta">{{$post->datePublication}}</p>
        <p>Author : {{$post->author->lastname}} {{$post->author->firstname}}</p>
      </div>

      <hr>
    </li>
  @endforeach
</ul>


<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
</div>
