<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Thread Center</title>
    <link rel="stylesheet" href="styles/Style.css">
</head>
<body>

    <div class="root">
        <x-header />

        <main>
            <div class="large-container">
                <!-- Title Bar -->
                <x-title-bar :title="'Account'" :buttonText="'hello'"/>

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();">Log out</button>
                </form>

            </div>

        </main>

        <x-footer />

    </div>
    
</body>
</html>