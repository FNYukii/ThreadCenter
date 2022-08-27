<div class="thread-card">
    <a href="/threads/{{ $thread->id }}"> </a>
    <p class="title">{{ $thread->title}}</p>

    @if($firstComment != null)
    <p class="text">{!! nl2br(e($firstComment->text)) !!}</p>
    @endif

    <p class="secondary">{{ $commentCount }} Comments</p>
</div>