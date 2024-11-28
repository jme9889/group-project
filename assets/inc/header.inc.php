<?php
    $title = "The CRAPsite | " . $pageTitle;

    $bodyID = '';

    $assetPath = "";
    if (strpos($_SERVER['REQUEST_URI'], '/alignment/') !== false || strpos($_SERVER['REQUEST_URI'], '/contrast/') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/proximity/') !== false || strpos($_SERVER['REQUEST_URI'], '/quiz/') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/references/') !== false || strpos($_SERVER['REQUEST_URI'], '/repetition/') !== false) {
        $assetPath = "../";

        if (strpos($_SERVER['REQUEST_URI'], '/alignment/') !== false || strpos($_SERVER['REQUEST_URI'], '/contrast/') !== false ||
        strpos($_SERVER['REQUEST_URI'], '/proximity/') !== false || strpos($_SERVER['REQUEST_URI'], '/repetition/') !== false) {
            $bodyID = ' id="contrast-body"';
        }
        else if(strpos($_SERVER['REQUEST_URI'], '/quiz/') !== false) {
            $bodyID = ' id="quiz-body"';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $assetPath; ?>assets/style.css" rel="stylesheet">
    <title>The CRAPsite | <?php echo $title; ?></title>
    <link rel="icon" href="<?php echo $assetPath; ?>assets/images/logo.png" type="image/png">
</head>

<body<?php echo $bodyID; ?>>
    <header>
        <div class="logo">
            <a href="<?php echo $assetPath; ?>index.php">
                <img src="<?php echo $assetPath; ?>assets/images/logo.png" alt="CRAP Logo" id="logo-img">
            </a>
            <h1 id="head-title">The
                <div id="C">C</div>
                <div id="R">R</div>
                <div id="A">A</div>
                <div id="P">P</div>
                site
            </h1>
        </div>
        <nav>
            <div class="nav-items">
                <a href="<?php echo $assetPath; ?>contrast/index.php">
                    <h2 class="nav-button">
                        <div class="short-button" id="C">C</div>
                        <div class="full-button">ontrast</div>
                    </h2>
                </a>
                <a href="<?php echo $assetPath; ?>repetition/index.php">
                    <h2 class="nav-button">
                        <div class="short-button" id="R">R</div>
                        <div class="full-button">epetition</div>
                    </h2>
                </a>
                <a href="<?php echo $assetPath; ?>alignment/index.php">
                    <h2 class="nav-button">
                        <div class="short-button" id="A">A</div>
                        <div class="full-button">lignment</div>
                    </h2>
                </a>
                <a href="<?php echo $assetPath; ?>proximity/index.php">
                    <h2 class="nav-button">
                        <div class="short-button" id="P">P</div>
                        <div class="full-button">roximity</div>
                    </h2>
                </a>
                <a href="<?php echo $assetPath; ?>quiz/index.php" id="quiz-button">
                    <img src="<?php echo $assetPath; ?>assets/images/quiz.png" alt="Quiz" id="quiz-img">
                    <h2 class="nav-button">
                        <div class="short-button" id="Q">Q</div>
                        <div class="full-button">uiz</div>
                    </h2>
                </a>
            </div>
        </nav>
    </header>