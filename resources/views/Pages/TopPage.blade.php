<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread Center</title>
  <link rel="stylesheet" href="styles/Style.css">
  <link rel="stylesheet" href="styles/TopPage.css">
</head>
<body>
  
  <x-header/>

  <main>
    <div class="large-container">

      <!-- Add Thread Modal -->
      <div class="modal-shadow" id="modalShadow"></div>
      <div class="modal" id="modal">
        <h3>New thread</h3>
        <form action="{{ route('createThread') }}" method="post">
          @csrf
          <input placeholder="Title" name="title" id="threadTitleInput"/>

          <div class="button-container">
            <button type="submit" id="submitButton" disabled>Create</button>
          </div>
        </form>
      </div>

      <!-- Title Bar -->
      <div class="title-bar">
        <h2>Threads</h2>

        <button id="openButton">New Thread</button>
      </div>

      <!-- Thread Card Container -->
      <div class="thread-card-container">
        @foreach($threads as $thread)
          <div class="thread-card">
            <a href="/threads/{{ $thread->id }}"> </a>
            <p class="title">{{ $thread->title}}</p>
            <p class="created-at">{{ $thread->created_at }}</p>
          </div>
        @endforeach

        <div class="thread-card invisible"></div>
      </div>
      
    </div>

  </main>

  <x-footer/>

  <script src="scripts/Script.js"></script>
</body>
</html>