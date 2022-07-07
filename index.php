<?php
function conservation($name) {
    if(isset($_POST[$name])) {
        return $_POST[$name];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ressources/css/style.css">
    <script type="text/javascript" src="ressources/script/script.js" defer></script>
    <!-- <script src="ressources/lib/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="ressources/lib/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="ressources/lib/codemirror/theme/material.css">
    <script src="ressources/lib/codemirror/mode/javascript/javascript.js"></script> -->
    <title>NepeDoc</title>
</head>
<body>
    <header>
        <h1 class="title">NepeDoc</h1>
    </header>
    <form id="codes-container" class="codes-container" action="/" method="post">
        <div class="codes-container__element">
            <h2 class="codes-container__element__title">HTML</h2>
            <textarea class="codes-container__element__area" name="html-area" id="html-area" cols="30" rows="10" oninput=modifyHtml() maxlength="200"><?= conservation('html-area'); ?></textarea>
        </div>
        <div class="codes-container__element">
            <h2 class="codes-container__element__title">CSS</h2>
            <textarea class="codes-container__element__area" name="css-area" id="css-area" cols="30" rows="10" oninput=modifyCss()><?= conservation('css-area'); ?></textarea>
        </div>
        <div class="codes-container__element">
            <h2 class="codes-container__element__title">JS</h2>
            <textarea class="codes-container__element__area" name="js-area" id="js-area" cols="30" rows="10"><?= conservation('js-area'); ?></textarea>
        </div>
    </form>
    <div class="progress">
        <div class="progress__bar" id="progress-bar"></div>
        <div class="progress__max">
            <label class="progress__max__label" for="max-length">Maximum :</label>
            <input class="progress__max__input" name="max-length" id="max-length" type="text" value="200" onchange="modifyHtml()">
        </div>
    </div>
    <div>
        <p id="current-length">0</p>
    </div>
    <style id="style-container">
        <?= conservation('css-area'); ?>
    </style>
    <div class="displayer" id="displayer">
        <?= conservation('html-area'); ?>
    </div>
    <script id="script-container">
        <?= conservation('js-area'); ?>
    </script>
</body>
</html>