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
      <h2>Threads</h2>

      <div class="thread-card-container">
        @foreach($threads as $thread)
          <div class="thread-card">
            <a href="/threads/{{ $thread->id }}"> </a>
            <p class="title">{{ $thread->title}}</p>
            <p class="created-at">{{ $thread->created_at }}</p>
          </div>
        @endforeach

      </div>
      
    </div>

  </main>

</body>
</html>