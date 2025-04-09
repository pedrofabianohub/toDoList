<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageName ?? 'ToDoList'}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <img src="{{'../assets/images/logo.png'}}" alt="Logo">
        </aside>

        <!-- Main Content -->
        <main class="content">
            <!-- Navigation -->
            <nav class="navigation">

                {{$btn ?? null}}

            </nav>

            <!-- Main Section -->
            <section class="main">
                {{$slot}}
            </section>
        </main>
    </div>
</body>

</html>
