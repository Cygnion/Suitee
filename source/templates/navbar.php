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
                <li><a class="Logo"><img src="assets/images/Logo.png" alt="Logo"></a></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="recipe.php">Nos Recettes</a></li>
                <li class="NavBarLiHasChildren">
                    <a>Filtres<span>▼</span></a>
                    <ul class="SubMenu">
                        <li><a class="triggerCategory" href="#">Catégories</a></li>
                        <li><a class="triggerTitle" href="#">Titre</a></li>
                        <li><a class="triggerIngredient" href="#">Ingrédients</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>