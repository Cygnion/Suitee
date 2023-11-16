<body>
    <header class="site-header">
        <button class="menu-btn" type="button" id="ShowNav">
            <span class="menu-btn__line"></span>
            <span class="menu-btn__line"></span>
            <span class="menu-btn__line"></span>
            <span class="menu-btn__line"></span>
            <span class="menu-btn__close"></span>
        </button>
        <nav class="NavBar" id="NavBar" style="border-bottom: 1px solid white;">
            <ul id="UlMenu">
                <li><a class="Logo displayFex directionColumn">
                    <img src="assets/images/Logo.png" alt="Logo">
                </a></li>
                <li><a class="displayFex directionColumn" href="index.php">
                    Accueil
                    <hr>
                </a></li>
                <li><a class="displayFex directionColumn" href="recipe.php">
                    Nos Recettes
                    <hr>
                </a></li>
                <li class="NavBarLiHasChildren">
                    <a>Filtres<span>▼</span></a>
                    <hr>
                    <ul class="SubMenu">
                        <li><a class="triggerCategory displayFex directionColumn" href="#">Catégories<hr></a></li>
                        <li><a class="triggerTitle displayFex directionColumn" href="#">Titre<hr></a></li>
                        <li><a class="triggerIngredient displayFex directionColumn" href="#">Ingrédients<hr></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>