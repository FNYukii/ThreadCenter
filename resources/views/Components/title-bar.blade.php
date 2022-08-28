<div class="title-bar">
    <h2>{{ $title }}</h2>

    <div>
        @auth
        <button id="openButton">{{ $buttonText }}</button>
        @endauth
    </div>
</div>