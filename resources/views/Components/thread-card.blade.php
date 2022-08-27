<div class="thread-card">
  <a href="/threads/{{ $thread->id }}"> </a>
  <p class="title">{{ $thread->title}}</p>
  <p class="created-at">{{ $thread->created_at }}</p>

  @if($firstComment != null)
    <p>{{ $firstComment->text }}</p>
  @endif
</div>