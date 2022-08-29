<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Thread Center</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/account_page.css">
</head>
<body>

    <div class="root">
        <x-header />

        <main>
            <div class="large-container">
                <!-- Title Bar -->
                <div class="title-bar">
                    <h2>Account</h2>

                    <div>
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button onclick="event.preventDefault(); this.closest('form').submit();">Log out</button>
                        </form>
                    </div>
                </div>

                <div class="detail-container">
                    <p><span>Name</span> {{ Auth::user()->name }}</p>
                    <p><span>Email</span> {{ Auth::user()->email }}</p>
                </div>
            </div>

        </main>

        <x-footer />

    </div>
    
</body>
</html>