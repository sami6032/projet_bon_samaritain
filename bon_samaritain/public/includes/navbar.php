<!-- 
<header class="mia">
    <nav class="navbar navbar-expand-lg " style="background-color: white;";>
      <div class="container">
        <a class="navbar-brand" href="#"><img width="100px" src="images/world mission logo - Fait avec PosterMyWall.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           z
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="viewQuestion.php">
                <div >
                  <button class="btn btn-secondary " type="button" 
                    aria-expanded="false" style="background-color: white;color: #0200C3";>
                    <strong>Questions</strong>
                  </button>

                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="publish_question.php">
                <div>
                  <button class="btn btn-secondary " type="button"style="background-color: white;color: #0200C3"; >
                    <strong>Publier une question</strong>
                  </button>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="my_questions.php">
                <div>
                  <button class="btn btn-secondary " type="button" style="background-color: white;color: #0200C3";>
                    <strong>Mes questions</strong>
                  </button>

                </div>
              </a>
            </li>
          </ul>
          <a class="nav-link active me-2" aria-current="page" href="login.php">
                <div>
                  <button class="btn btn-secondary " type="button"style="background-color: white;color: #0200C3"; >
                    <strong>Connexion</strong>
                  </button>
                </div>
              </a>
              <a class="nav-link active" aria-current="page" href="signup.php">
                <div>
                  <button class="btn btn-secondary " type="button"style="background-color: white;color: #0200C3"; >
                    <strong>Inscription</strong>
                  </button>
                </div>
              </a>
          
        </div>
      </div>
    </nav>
  </header> -->




  <header class="mia">
    <nav class="navbar navbar-expand-lg" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img width="100px" src="images/world mission logo - Fait avec PosterMyWall.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="viewQuestion.php">
                            <div>
                                <button class="btn btn-secondary" type="button" aria-expanded="false"
                                        style="background-color: white;color: #0200C3;">
                                    <strong>Questions</strong>
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="publish_question.php">
                            <div>
                                <button class="btn btn-secondary" type="button" style="background-color: white;color: #0200C3;">
                                    <strong>Publier une question</strong>
                                </button>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="my_questions.php">
                            <div>
                                <button class="btn btn-secondary" type="button" style="background-color: white;color: #0200C3;">
                                    <strong>Mes questions</strong>
                                </button>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">
                            <div>
                                <button class="btn btn-secondary" type="button" style="background-color: white;color: #0200C3;">
                                    <strong>Mon profil</strong>
                                </button>
                            </div>
                        </a>
                    </li> -->
                </ul>
                <?php
                 // Démarrer la session (assurez-vous de l'appeler avant toute sortie HTML)

                // Vérifier si l'utilisateur est connecté
                if (isset($_SESSION['auth'])) {
                    // Utilisateur connecté, afficher les liens pertinents pour l'utilisateur connecté
                    echo '<a class="nav-link active me-2" aria-current="page" href="actions/users/logoutAction.php">
                            <div>
                              <button class="btn btn-secondary" type="button" style="background-color: white;color: red;">
                                <strong>Déconnexion</strong>
                              </button>
                            </div>
                          </a>';
                } else {
                    // Utilisateur non connecté, afficher les liens d'inscription et de connexion
                    echo '<a class="nav-link active me-2" aria-current="page" href="login.php">
                            <div>
                              <button class="btn btn-secondary" type="button" style="background-color: white;color: #0200C3;">
                                <strong>Connexion</strong>
                              </button>
                            </div>
                          </a>
                          <a class="nav-link active" aria-current="page" href="signup.php">
                            <div>
                              <button class="btn btn-secondary" type="button" style="background-color: white;color: #0200C3;">
                                <strong>Inscription</strong>
                              </button>
                            </div>
                          </a>';
                }
                ?>
            </div>
        </div>
    </nav>
</header>

