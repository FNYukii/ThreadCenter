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

      <!-- Title Bar -->
      <div class="title-bar">
        <h2>{{ $thread->title }}</h2>

        <button>New Comment</button>
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

</body>
</html>