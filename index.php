<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"> 
    <meta name="description" content="Persoonlijke website van Klaas Hielke">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klaas Hielke</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- TODO: favicon -->
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="grid-container">
        <div class="grid-item">
            <div class="card">
                <div class="circular-frame">
                    <img src="assets/images/profielfoto.jpg" alt="Mijn profielfoto"/>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card">
                <h2>Vind mij op:</h2>
                <div class="link-buttons">
                    <a href="https://www.linkedin.com/in/klaas-hielke-dijkgraaf-2a736479/" target="_blank" title="Mijn LinkedIn-pagina">
                        <img class="icon-link" src="assets/icons/linkedin.svg" alt="LinkedIn icon" />
                    </a>
                    <a href="https://github.com/klaashielke" target="_blank" title="Mijn GitHub-pagina">
                        <img class="icon-link" src="assets/icons/github.svg" alt="GitHub icon"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?> 
</body>
</html>
