

<header>

        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top nav-orange">
            <div class="container">

                <div class="row w-100 d-flex justify-content-between align-items-center">

                    <div class="col-lg-3">
                        <div class="logo">
                            <h1 class="title"><a class="titleLink" href="index.php">DWWM</a></h1>
                        </div>
                    </div>

                    <div class="col-lg-6 collapse navbar-collapse justify-content-end" id="burger">
                        <ul class="navbar-nav nav-list-item">
                            <li class="nav-list-item"><a href="index.php" class="nav-link <?php if(isset($page) && $page === 'home') {echo 'active';} ?>">accueil</a></li>
                            <li class="nav-list-item"><a href="formation.php" class="nav-link <?php if(isset($page) && $page === 'formation') {echo 'active';} ?>">la formation</a></li>
                            <li class="nav-list-item"><a href="etudiant.php" class="nav-link <?php if(isset($page) && $page === 'etudiant') {echo 'active';} ?>">les étudiants</a></li>
                            <li class="nav-list-item"><a href="actualite.php" class="nav-link <?php if(isset($page) && $page === 'actualite') {echo 'active';} ?>">actualités</a></li>
                            <li class="nav-list-item"><a href="contact.php" class="nav-link <?php if(isset($page) && $page === 'contact') {echo 'active';} ?>">nous contacter</a></li>
                        </ul>
                    </div>

                </div>

                <div class="btn-burger">
        
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#burger" aria-controls="burger" aria-expanded="false" aria-label="Basculer la navigation">
                        <span class="bi bi-list"></span>
                    </button>
        
                </div>

            </div>
        </nav>



    </header>

