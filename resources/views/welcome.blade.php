<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Four Buttons</title>

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>

    <body>


        <div class="h-screen flex items-center justify-center">
            @if (session('success'))
                <div class="absolute top-[20%] text-center text-4xl text-green-700">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="absolute top-[20%] text-center text-4xl text-red-700">
                    {{ session('error') }}
                </div>
            @endif
                <form action="{{ route('email.send') }}" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Send E-mail
                    </button>
                </form>
                <form action="{{ route('send.notification') }}" method="GET">
                    @csrf
                    <button
                        type="submit"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        Send Notification
                    </button>
                </form>
                <form action="{{ route('start.job') }}" method="GET">
                    @csrf
                    <button
                        type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        Start Job
                    </button>
                </form>
                <form action="{{ route('trigger.event') }}" method="GET">
                    @csrf
                    <button type="submit"
                            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Start Event
                    </button>
                </form>

        </div>

    </body>

</html>
