<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jurse2025
    </title>
    <!-- Ajoutez vos liens CSS, scripts, etc. ici si nécessaire -->
</head>
<body>

    <header>
        <h1>jurse2025</h1>
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