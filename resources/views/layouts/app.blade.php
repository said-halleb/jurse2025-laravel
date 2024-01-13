<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Name</title>
    <!-- Ajoutez vos liens CSS, scripts, etc. ici si nécessaire -->
</head>
<body>

    <header>
        <h1>Your App Name</h1>
        <!-- Ajoutez le contenu du haut de page ici si nécessaire -->
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <!-- Ajoutez d'autres liens de navigation ici selon votre besoin -->
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Ajoutez le contenu du pied de page ici si nécessaire -->
    </footer>

    <!-- Ajoutez vos scripts JS ici si nécessaire -->

</body>
</html>