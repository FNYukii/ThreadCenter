<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $thread->title }} - Thread Center</title>
  <link rel="stylesheet" href="../styles/Style.css">
  <link rel="stylesheet" href="../styles/ThreadPage.css">
</head>
<body>
  
  <x-header/>

  <main>
    <div class="large-container">

      <!-- Add Comment Modal -->
      <div class="modal-shadow" id="modalShadow"></div>
      <div class="modal" id="modal">
        <h3>New comment</h3>
        <form action="{{ route('createComment') }}" method="post">
          @csrf
          <input type="hidden" name="threadId" value="{{ $thread->id }}"/>
          <input placeholder="Display name" name="displayName" id="displayNameInput"/>
          <textarea placeholder="Text" name="text" rows="5" id="textInput"></textarea>

          <div class="button-container">
            <button type="submit" disabled>Add</button>
          </div>
        </form>
      </div>

      <!-- Title Bar -->
      <div class="title-bar">
        <h2>{{ $thread->title }}</h2>

        <button id="openButton">New Comment</button>
      </div>

      <!-- Comments Section -->
      <div class="comment-container">
        @foreach($comments as $comment)
          <div class="comment">
            <p>
              <span class="display-name">{{ $comment->displayName}}</span>
              <span class="created-at">{{ $comment->created_at}}</span>
            </p>
            <p>{{ $comment->text }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </main>

  <x-footer/>

  <script src="../scripts/Script.js"></script>
</body>
</html>