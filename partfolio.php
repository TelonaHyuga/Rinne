<?php
session_start();

include 'assets/php/lang.php';

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Change language based on user selection
if (isset($_POST['language'])) {
    $_SESSION['lang'] = $_POST['language'];
}

$currentLang = $_SESSION['lang'];
?>

<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
    <head>
        <meta charset="utf-8">
        <title>Rinne</title>
        <meta name="keywords" content="rinne, ринне, minecraft, майнкрафт, design, дизайн, designer, дизайнерша, skin, скин"/>
        <meta name="description" content="Rinne - художница, дизайнерша, контент мейкер по игре minecraft"/>

        <link rel="icon" type="image/webp" href="./assets/image/RinneSiteLogo.webp">

        <!--CSS Styles-->
        <link rel="stylesheet" href="./assets/css/base.css">
        <link rel="stylesheet" href="./assets/css/dark.css">
        <link rel="stylesheet" href="./assets/css/banner.css">
        <link rel="stylesheet" href="./assets/css/dropdown.css">
        <link rel="stylesheet" href="./assets/css/team.css">
        <link rel="stylesheet" href="./assets/css/portfolio.css">
        <link rel="stylesheet" href="./assets/css/partners.css">
        <link rel="stylesheet" href="./assets/css/media.css">
        <link rel="stylesheet" href="./assets/css/animation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div>
            <div>
                <!--Banner start-->
                <!--Banner gradiet-->
                <div class="BackGradient"> 
                    <!--Switch start-->
                    <div style="float: right;"> <!--Right align-->
                        <ul class="row" style="margin: 0.5em; font-size: 3rem;">
                            <!--Text-->
                            <li><p class="TTT"><?php echo $translations[$currentLang]['theme']; ?></p></li>
                            <li> <!--Switch-->
                                <label class="switch">
                                    <input type="checkbox" id="chk" class="themeToggle">
                                    <span class="slider"></span>
                                </label>
                            </li>
                        <ul>
                    </div>
                    <!--Switch end-->
                    <div>
                        <ul class="row" style="margin: 0.5em; font-size: 3rem; margin-top: 0;">
                            <li>
                                <form method="post">
                                    <select class="lang" name="language" onchange="this.form.submit()">

                                        <!--1 lang-->
                                        <option value="ru" <?php if ($currentLang == 'ru') echo 'selected'; ?>>
                                            <h3>RU</h3>
                                        </option>

                                        <!--2 lang-->
                                        <option value="en" <?php if ($currentLang == 'en') echo 'selected'; ?>>
                                            <h3>EN</h3>
                                        </option>

                                        <!--3 lang-->
                                        <option value="fr" <?php if ($currentLang == 'fr') echo 'selected'; ?>>
                                            <h3>FR</h3>
                                        </option>

                                    </select>
                                </form>
                            </li>
                            <li><p class="TTT langMark"><?php echo $translations[$currentLang]['lang']; ?></p></li>
                        </ul>
                    </div>
                    
                    <!--Deco start-->
                    <div style="padding-top: 15vw;">
                        <ul class="row">
                            <li class="tabelbanner">
                                <div class="THRTitel">
                                    <img src="./assets/image/info.webp" class="img_16_9">
                                </div>
                            </li>
                            <li class="TabelHeadLeft">
                                <div class="THRHead">
                                    <img src="./assets/image/thrmodel.webp" class="img_1_1">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--Deco end-->
                </div>
                <!--Banner end-->

                <!--Panel start-->
                <div>
                    <div class="Panel" style="margin-top: 3vw;">
                        <ul class="row PanelP">

                            <!--Panel List Start-->
                            <li class="PE">
                                <div style="cursor: pointer;" class="dropdown">
                                    <img src="./assets/image/list.svg" class="img_1_1 PSVG">
                                    <div class="dropdown-content">
                                        <a href="/Rinne" style="width: 13vw;">
                                            <ul class="row">
                                                <li class="PE">
                                                    <img src="./assets/image/THRLogo.svg" class="img_1_1 PSVGOFF" style="width: 2vw;">
                                                </li>
                                                <li class="PE">
                                                    <h3><?php echo $translations[$currentLang]['home']; ?></h3>
                                                </li>
                                            </ul>
                                        </a>
                                        <a href="info.php" style="width: 13vw;">
                                            <ul class="row">
                                                <li class="PE">
                                                    <img src="./assets/image/list.svg" class="img_1_1 PSVGOFF" style="width: 2vw;">
                                                </li>
                                                <li class="PE">
                                                    <h3><?php echo $translations[$currentLang]['info']; ?></h3>
                                                </li>
                                            </ul>
                                        </a>
                                        <a href="partners.php">
                                            <ul class="row">
                                                <li class="PE">
                                                    <img src="./assets/image/user.svg" class="img_1_1 PSVGOFF" style="width: 2vw;">
                                                </li>
                                                <li class="PE">
                                                    <h3><?php echo $translations[$currentLang]['partner']; ?></h3>
                                                </li>
                                            </ul>
                                        </a>
                                        <a href="links.php">
                                            <ul class="row">
                                                <li class="PE">
                                                    <img src="./assets/image/link.svg" class="img_1_1 PSVGOFF" style="width: 2vw;">
                                                </li>
                                                <li class="PE">
                                                    <h3><?php echo $translations[$currentLang]['links']; ?></h3>
                                                </li>
                                            </ul>
                                        </a>
                                      </div>
                                </div>
                            </li>
                            <!--Panel List End-->

                            <li class="PE">
                                <div style="cursor: pointer;" class="dropdown">
                                    <img src="./assets/image/TG.svg" class="img_1_1 PSVG dropbtn">
                                    <div class="dropdown-content">
                                        <a href="https://t.me/channel_thr"><h3>Channel RU</h3></a>
                                        <a href="https://t.me/channel_thr_en"><h3>Channel EN</h3></a>
                                        <a href="https://t.me/TelonaHyuga"><h3>THR</h3></a>
                                      </div>
                                </div>
                            </li>
                            <li class="PE">
                                <a href="https://www.twitch.tv/telonahyuga" style="cursor: pointer;">
                                    <img src="./assets/image/twitch.svg" class="img_1_1 PSVG">
                                </a>
                            </li>
                            <li class="PE">
                                <a href="https://discord.gg/ReXtPfsZ" style="cursor: pointer;">
                                    <img src="./assets/image/discord.svg" class="img_1_1 PSVG">
                                </a>
                            </li>
                            <li class="PE">
                                <a href="https://namemc.com/profile/_THR_.3" style="cursor: pointer;">
                                    <img src="./assets/image/Namemc.svg" class="img_1_1 PSVG">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Panel end-->

                <!--Portfolio start-->
                <!--Panel start-->
                <div>
                    <div class="Panel" style="margin-top: 3vw; margin-bottom: 3vw;">
                        <ul class="row PanelP">
                        
                            <!--Portfolio page start-->
                                <!--Skins start-->
                                <details style="cursor: pointer;" class="dropdown2">
                                    <summary role="button">
                                        <img src="./assets/image/user.svg" class="img_1_1 PSVG PE">
                                    </summary>
                                    <ul class="dropdown-content2 RLCP" style="margin-top: 2vw; border-radius: 3vw; z-index: 2;">
                                        <!--Work page start-->
                                        <ul class="TBB column">

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        _THR_
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin1.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        _THR_
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin2.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        Alex_Kristons
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin3.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        BrookLyn_May
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin4.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        <?php echo $translations[$currentLang]['hua-chen']; ?>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin5.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        <?php echo $translations[$currentLang]['bay-usen']; ?>
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin6.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        Skin
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin7.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->
                                            
                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        _THR_
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/skins/skin8.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                        </ul>
                                        <!--Work page end-->
                                    </ul>
                                </details>
                            <!--Skins end-->
                            <!--Portfolio page end-->

                            <!--Portfolio page start-->
                            <!--OBJ start-->
                                <details style="cursor: pointer;" class="dropdown2">
                                    <summary role="button">
                                        <img src="./assets/image/obj.svg" class="img_1_1 PSVG PE ret">
                                    </summary>
                                    <ul class="dropdown-content2 RLCP" style="margin-top: 2vw; border-radius: 3vw; z-index: 2;">
                                        <!--Work page start-->
                                        <ul class="TBB column">

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        GSMP
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/models/GSMP1.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        Mask - _THR_
                                                    </h1><br>
                                                    <h3 class="TTBT">
                                                        <?php echo $translations[$currentLang]['THR-Mask']; ?>
                                                    </h3>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <div>
                                                    <img src="./assets/image/models/THRMask.webp" class="PortI Port">
                                                </div>
                                            </li>
                                            <!--Work end-->
                                            
                                        </ul>
                                        <!--Work page end-->
                                    </ul>
                                </details>
                            <!--OBJ end-->
                            <!--Portfolio page end-->

                            <!--Portfolio page start-->
                            <!--Web start-->
                                <details style="cursor: pointer;" class="dropdown2">
                                    <summary role="button">
                                        <img src="./assets/image/website.svg" class="img_1_1 PSVG PE">
                                    </summary>
                                    <ul class="dropdown-content2 RLCP" style="margin-top: 2vw; border-radius: 3vw; z-index: 2;">
                                        <!--Work page start-->
                                        <ul class="TBB column">

                                            <!--Work start-->
                                            <li class="TTB" style="margin: 2vw; margin-top: 2vw;">
                                                <div>
                                                    <h1 class="TTBT">
                                                        GSMP
                                                    </h1>
                                                </div>
                                            </li>
                                            <li class="PortBG">
                                                <iframe src="https://gatheringssmp.github.io/Gatherings/" class="WebPort" loading="lazy"></iframe>
                                            </li>
                                            <!--Work end-->
                                            
                                        </ul>
                                        <!--Work page end-->
                                    </ul>
                                </details>
                            <!--Web end-->
                            <!--Portfolio page end-->
                            
                        </ul>
                    </div>
                </div>
                <!--Panel end-->
                <!--Portfolio end-->

                <div>

                </div>
            <div>
                
            </div>
        </div>
        
        <script src="./assets/js/theme.js"></script>
        <script src="./assets/js/memory.js"></script>
    </body>
</html>
