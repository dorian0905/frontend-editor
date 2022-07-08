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
    <link rel="shortcut icon" type="image/png" href="/ressources/img/icon.png">
    <title>NepeDoc</title>
</head>
<body>
    
    <div class="notification" id="notification">
        <p class="notification__text">Copied to the clipboard</p>
    </div>
    <header class="header">
        <h1 class="header__title">NepeDoc</h1>
    </header>
    <form id="codes-container" class="codes-container" action="/" method="post">
        <div class="codes-container__element">
            <div class="codes-container__element__header">
                <h2 class="codes-container__element__header__title codes-container__element__header__title--html">HTML</h2>
            </div>
            <textarea class="codes-container__element__area" name="html-area" id="html-area" cols="30" rows="10" oninput=modifyHtml() maxlength="200" spellcheck="false"><?= conservation('html-area'); ?></textarea>
            <div class="codes-container__element__buttons">
                <div>
                    <input class="codes-container__element__buttons__check" type="checkbox" id="add-class">
                    <label class="codes-container__element__buttons__label" for="add-class"> add Class</label>
                    <input class="codes-container__element__buttons__check" type="checkbox" id="add-id">
                    <label class="codes-container__element__buttons__label" for="add-id"> add Id</label>
                </div>
                <div class="flex">
                    <div class="codes-container__element__buttons__button" onclick="copyTag('div')">DIV</div>
                    <div class="codes-container__element__buttons__button" onclick="copyTag('p')">P</div>
                    <div class="codes-container__element__buttons__button" onclick="copyTag('header')">HEADER</div>
                    <div class="codes-container__element__buttons__button" onclick="copyTag('section')">SECTION</div>
                    <div class="codes-container__element__buttons__button" onclick="copyTag('footer')">FOOTER</div>
                </div>
            </div>
        </div>
        <div class="codes-container__element">
            <div class="codes-container__element__header">
                <h2 class="codes-container__element__header__title codes-container__element__header__title--css">CSS</h2>
            </div>
            <textarea class="codes-container__element__area" name="css-area" id="css-area" cols="30" rows="10" oninput=modifyCss() spellcheck="false"><?= conservation('css-area'); ?></textarea>
            <div class="codes-container__element__buttons codes-container__element__buttons--center">
                <input type="color" id="input-color">
                <div class="codes-container__element__buttons__button" onclick="copyColor('')">Copy Color</div>
            </div>
        </div>
        <div class="codes-container__element">
            <div class="codes-container__element__header">
                <h2 class="codes-container__element__header__title codes-container__element__header__title--js">JS</h2>
            </div>
            <textarea class="codes-container__element__area" name="js-area" id="js-area" cols="30" rows="10" spellcheck="false"><?= conservation('js-area'); ?></textarea>
        </div>
    </form>
    <div id="y-resizer"></div>
    <div class="progress">
        <div class="progress__bar" id="progress-bar"></div>
        <div class="progress__max">
            <p class="progress__max__label" for="max-length">Nombre de caractères : <span id="current-length">0</span> / </p>
            <input class="progress__max__input" name="max-length" id="max-length" type="text" value="200" onchange="modifyHtml()">
        </div>
    </div>
    <style id="style-container">
        <?= conservation('css-area'); ?>

    </style>
    <div class="displayer" id="displayer">
        <?= conservation('html-area'); ?>
        
    </div>
    <script type="text/javascript" src="ressources/script/script.js"></script>
    <script id="script-container">
<?= conservation('js-area'); ?>
    </script>
</body>
</html>