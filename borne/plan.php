<!DOCTYPE html>
<html lang="fr">
    
  <head>

    <title>Plan</title>
      
    <!-- Définition des meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Chargement du CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
  </head>
    
  <body>
    <div class="text-center"> <!-- Création du corps de la page -->
        <div class="row menu">
            <div class="col-xl-3 col-md-3 "><img src="image/Convention-BLANC.png" class="logo"></div>
            <div class="col-xl-3 col-md-3 d-flex align-items-center justify-content-center"><a class="lienbouton" href="index.html"><button type="button" class="btn btn-primary bouton">ACTUS</button></a></div>
            <div class="col-xl-3 col-md-3 d-flex align-items-center justify-content-center"><a class="lienbouton" href="#"><button type="button" class="btn btn-primary bouton">PLAN</button></a></div>
            <div class="col-xl-3 col-md-3 heure d-flex align-items-center"><p id="div_horloge"></p></div>
            
        
        
        
        
        </div>
        <div class="row liste">
            <div class="col-xl-7 col-xs-7 col-md-7">
                <!--<svg id="Carte" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 544.5 800.5">
                    <defs>
                        <style>.cls-1{fill:#224191;}.cls-1,.cls-2{stroke:blue;stroke-width:4px;}.cls-1,.cls-2,.cls-5{stroke-miterlimit:10;}.cls-2,.cls-5{fill:none;}.cls-3{font-size:19.13px;font-family:Roboto-Medium, Roboto;}.cls-4{letter-spacing:-0.01em;}.cls-5{stroke:blue;stroke-width:0px;}
                        </style>
                        <image id="image" width="50" height="50" xlink:href="image/icons8-escalator-50.png"/>
                        <image id="image-2" width="50" height="50" xlink:href="image/icons8-toilettes-50.png"/>
                        <image id="image-3" width="50" height="50" xlink:href="image/icons8-nourriture-50.png"/>
                        <image id="image-4" width="50" height="50" xlink:href="image/icons8-montée-d&apos;escaliers-50.png"/>
                    </defs>
                    <g id="Stands">
                        <rect id="Indispo" class="cls-1" x="1" y="682.5" width="130" height="43"/>
                        <rect id="Stand_1" class="cls-2" x="12" y="555" width="174.5" height="90.5"/>
                        <rect id="Stand_2" class="cls-2" x="155" y="652.29" width="63.5" height="64.21"/>
                        <rect id="Stand_3" class="cls-2" x="260" y="555" width="57" height="40.5"/>
                        <rect id="Stand_4" class="cls-2" x="327.5" y="555" width="34.5" height="40.5"/>
                        <rect id="Stand_5" class="cls-2" x="260" y="603.5" width="57" height="57"/>
                        <rect id="Stand_6" class="cls-2" x="327.5" y="603.5" width="34.5" height="57"/>
                        <rect id="Stand_7" class="cls-2" x="260" y="668.5" width="102" height="48"/>
                        <rect id="Stand_8" class="cls-2" x="405" y="555" width="48.5" height="24.5"/>
                        <rect id="Stand_8-2" data-name="Stand_8" class="cls-2" x="462" y="555" width="71" height="24.5"/>
                        <rect id="Stand_9" class="cls-2" x="405" y="587" width="48.5" height="71.5"/>
                        <rect id="Stand_10" class="cls-2" x="461.5" y="587" width="71" height="71"/>
                        <rect id="Stand_11" class="cls-2" x="405" y="668.5" width="48.5" height="21"/>
                        <rect id="Stand_12" class="cls-2" x="462" y="664" width="32" height="51.5"/>
                        <rect id="Stand_13" class="cls-2" x="501" y="664" width="32" height="51.5"/>
                        <rect id="Stand_14" class="cls-2" x="405" y="695.5" width="48.5" height="21"/>
                        <rect id="Stand_15" class="cls-2" x="12" y="425.5" width="42" height="92"/>
                        <rect id="Stand_16" class="cls-2" x="61.5" y="425.5" width="74.5" height="92"/>
                        <rect id="Stand_17" class="cls-2" x="144.5" y="425.5" width="73" height="92"/>
                        <rect id="Stand_18" class="cls-2" x="260" y="425" width="102" height="15.5"/>
                        <rect id="Stand_19" class="cls-2" x="259.5" y="447" width="48" height="49.5"/>
                        <rect id="Stand_20" class="cls-2" x="313.5" y="447" width="48" height="49.5"/>
                        <rect id="Stand_21" class="cls-2" x="260" y="502" width="102" height="15.5"/>
                        <rect id="Stand_22" class="cls-2" x="405" y="425.5" width="76.5" height="92"/>
                        <rect id="Stand_23" class="cls-2" x="490" y="425.5" width="42" height="92"/>
                        <polyline id="Stand_24" class="cls-2" points="12 388.5 103.5 388.5 103.5 323.5 12 323.5 12 388.5"/>
                        <polyline id="Stand_25" class="cls-2" points="147 388.5 111.5 388.5 111.5 323.5 147 323.5 147 388.5"/>
                        <polyline id="Toilettes" class="cls-2" points="154.5 388 217.5 388 217.5 324 154.5 324 154.5 388"/>
                        <rect id="Stand_26" class="cls-2" x="260" y="324" width="102" height="20"/>
                        <rect id="Stand_27" class="cls-2" x="260" y="351" width="102" height="36.5"/>
                        <polyline id="Toilettes-2" data-name="Toilettes" class="cls-2" points="404.5 388 467.5 388 467.5 324 404.5 324 404.5 388"/>
                        <polyline id="Stand_28" class="cls-2" points="477.5 388 532.5 388 532.5 324 477.5 324 477.5 388"/>
                        <polygon id="Stand_29" class="cls-2" points="82 202.5 217 202.5 218 112.5 154 112.5 154 137.5 82 137.5 82 202.5"/>
                        <polyline id="Stand_30" class="cls-2" points="11.5 287 217.5 287 217.5 218 11.5 218 11.5 287"/>
                        <rect id="Escalator" class="cls-2" x="190" y="3.5" width="27.5" height="99.5"/>
                        <rect id="Escalator-2" data-name="Escalator" class="cls-2" x="410" y="3.5" width="27.5" height="99.5"/>
                        <polyline id="Stand_31" class="cls-2" points="259.5 209 362.5 209 362.5 112 259.5 112 259.5 209"/>
                        <rect id="Stand_32" class="cls-2" x="259.5" y="218" width="63" height="68.5"/>
                        <rect id="Stand_33" class="cls-2" x="331.5" y="218" width="31" height="67.5"/>
                        <rect id="Stand_34" class="cls-2" x="404.5" y="112.5" width="60.5" height="54.5"/>
                        <rect id="Stand_35" class="cls-2" x="431" y="178" width="102" height="74.5"/>
                        <rect id="Stand_36" class="cls-2" x="404.5" y="261" width="128.5" height="25.5"/>
                        <polyline id="Stand_37" class="cls-2" points="233.5 98 388.5 98 388.5 4 233.5 4 233.5 98"/>
                        <use id="Logo_escalator" transform="translate(193.5 41) scale(0.42)" xlink:href="#image"/>
                        <use id="Logo_escalator-2" data-name="Logo_escalator" transform="translate(439 67) scale(0.42)" xlink:href="#image"/>
                        <use id="Logo_escalator-3" data-name="Logo_escalator" transform="translate(264 800) scale(0.42)" xlink:href="#image"/>
                        <use id="Logo_escalator-4" data-name="Logo_escalator" transform="translate(413 800) scale(0.42)" xlink:href="#image"/>
                        <image id="Logo_infirmerie" width="50" height="50" transform="translate(479.5 605) scale(0.7)" xlink:href="image/icons8-hôpital-50.png"/>
                        <image id="Logo_information" width="50" height="50" transform="translate(465.5 676) scale(0.54)" xlink:href="image/icons8-information-50.png"/>
                        <use id="Logo_toilettes" transform="translate(181.5 432) scale(0.48)" xlink:href="#image-2"/>
                        <use id="Logo_escalator-5" data-name="Logo_escalator" transform="translate(180 492) scale(0.42)" xlink:href="#image"/>
                        <use id="Logo_escalator-6" data-name="Logo_escalator" transform="translate(436 490) scale(0.42)" xlink:href="#image"/>
                        <use id="Logo_toilettes-2" data-name="Logo_toilettes" transform="translate(475 458) scale(0.48)" xlink:href="#image-2"/>
                        <use id="Logo_restauration" transform="translate(295.5 30) scale(0.72)" xlink:href="#image-3"/>
                        <use id="Logo_restauration-2" data-name="Logo_restauration" transform="translate(476 511) scale(0.46)" xlink:href="#image-3"/>
                        <image id="Logo_flèche" width="50" height="50" transform="translate(223.5 716) scale(0.6)" xlink:href="image/icons8-flèche-haut-50.png"/>
                        <use id="Logo_escaliers" transform="translate(218.5 773) scale(0.4)" xlink:href="#image-4"/>
                        <use id="Logo_escaliers-2" data-name="Logo_escaliers" transform="translate(393 799) scale(0.4)" xlink:href="#image-4"/>
                        <text class="cls-3" transform="translate(283.5 738.84)">Ent<tspan class="cls-4" x="27.98" y="0">r</tspan><tspan x="34.51" y="0">ée</tspan></text>
                    </g>
                    <polygon id="Contour" class="cls-5" points="544 167.5 472.01 167.5 472.5 101 440.71 101 440 99.5 440 0.5 187.5 1 187.5 100 140.5 100 140.5 125.5 68 125.5 68 210.5 0.5 211 0.5 727 179.5 727 179.5 800 491.5 800 491 726.5 544 726.5 544 167.5"/>
                </svg>-->
                
                <svg id="Carte" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 595.28 841.89">
                    <defs>
                        <style>.cls-1{fill:#070606;}.cls-1,.cls-2{stroke-miterlimit:10;}.cls-2{fill:none;stroke:#0000e7;}.cls-3{font-size:19.13px;fill:#fff;font-family:Roboto-Medium, Roboto;}.cls-4{letter-spacing:-0.01em;}.cls-5{fill:#febc35;}
                        </style>
                        <image id="image" width="50" height="50" xlink:href="image/icons8-escalator-50.png"/>
                        <image id="image-2" width="50" height="50" xlink:href="image/icons8-toilettes-50.png"/>
                        <image id="image-3" width="50" height="50" xlink:href="image/icons8-flèche-haut-50.png"/>
                        <image id="image-4" width="50" height="50" xlink:href="image/icons8-montée-d&apos;escaliers-50.png"/>
                        <image id="image-5" width="50" height="50" xlink:href="image/icons8-nourriture-filled-50.png"/>
                        <image id="image-6" width="542" height="571" xlink:href="image/pacman2.png"/>
                        <image id="image-7" width="240" height="240" xlink:href="image/fantomes_pacman.png"/>
                    </defs>
                    
                    <rect class="cls-1" x="1.5" y="-0.5" width="594" height="849"/>
                    <g id="Calque_47" data-name="Calque 47">
                        <polygon class="cls-2" points="515.5 178.5 515.5 110.5 480.5 110.5 480.5 8.5 203.5 8.5 203.5 110.5 152.5 110.5 152.5 136.5 76.5 136.5 76.5 223.5 3.5 224.5 3.5 760.5 193.5 760.5 193.5 836.5 537.5 836.5 537.5 760.5 591.5 760.5 592.5 178.5 515.5 178.5"/>
                    </g>
                    <polygon id="Contour" class="cls-2" points="587 183.07 510.31 183.07 510.83 114.95 476.96 114.95 476.21 113.42 476.21 12 207.21 12.51 207.21 113.93 157.14 113.93 157.14 140.05 79.91 140.05 79.91 227.12 8 227.63 8 756.22 198.69 756.22 198.69 831 531.07 831 530.54 755.71 587 755.71 587 183.07"/>
                    <g id="Stands">
                        <rect id="Stand_1" class="cls-2" x="37.5" y="574.5" width="174" height="91" rx="12" ry="12"/>
                        <rect id="Stand_2" class="cls-2" x="180.5" y="672.5" width="63" height="64" rx="12" ry="12"/>
                        <rect id="Stand_3" class="cls-2" x="285.5" y="574.5" width="57" height="41" rx="12" ry="12"/>
                        <rect id="Stand_4" class="cls-2" x="352.5" y="574.5" width="35" height="41" rx="12" ry="12"/>
                        <rect id="Stand_5" class="cls-2" x="285.5" y="623.5" width="57" height="57" rx="12" ry="12"/>
                        <rect id="Stand_6" class="cls-2" x="352.5" y="623.5" width="35" height="57" rx="12" ry="12"/>
                        <rect id="Stand_7" class="cls-2" x="285.5" y="688.5" width="101" height="47" rx="12" ry="12"/>
                        <rect id="Stand_8" class="cls-2" x="430.5" y="574.5" width="48" height="25" rx="12" ry="12"/>
                        <rect id="Stand_8-2" data-name="Stand_8" class="cls-2" x="487.5" y="574.5" width="71" height="25" rx="12" ry="12"/>
                        <rect id="Stand_9" class="cls-2" x="430.5" y="606.5" width="48" height="72" rx="12" ry="12"/>
                        <rect id="Stand_10" class="cls-2" x="486.5" y="606.5" width="72" height="71" rx="12" ry="12"/>
                        <rect id="Stand_11" class="cls-2" x="430.5" y="688.5" width="48" height="21" rx="10.5" ry="10.5"/>
                        <rect id="Stand_12" class="cls-2" x="487.5" y="683.5" width="32" height="52" rx="12" ry="12"/>
                        <rect id="Stand_13" class="cls-2" x="526.5" y="683.5" width="32" height="52" rx="12" ry="12"/>
                        <rect id="Stand_14" class="cls-2" x="430.5" y="715.5" width="48" height="21" rx="10.5" ry="10.5"/>
                        <rect id="Stand_15" class="cls-2" x="37.5" y="445.5" width="42" height="92" rx="12" ry="12"/>
                        <rect id="Stand_16" class="cls-2" x="86.5" y="445.5" width="75" height="92" rx="12" ry="12"/>
                        <rect id="Stand_17" class="cls-2" x="169.5" y="445.5" width="73" height="92" rx="12" ry="12"/>
                        <rect id="Stand_18" class="cls-2" x="285.5" y="444.5" width="102" height="16" rx="8" ry="8"/>
                        <rect id="Stand_19" class="cls-2" x="284.5" y="466.5" width="48" height="50" rx="12" ry="12"/>
                        <rect id="Stand_20" class="cls-2" x="338.5" y="466.5" width="48" height="50" rx="12" ry="12"/>
                        <rect id="Stand_21" class="cls-2" x="285.5" y="521.5" width="102" height="16" rx="8" ry="8"/>
                        <rect id="Stand_22" class="cls-2" x="430.5" y="445.5" width="76" height="92" rx="12" ry="12"/>
                        <rect id="Stand_23" class="cls-2" x="515.5" y="445.5" width="42" height="92" rx="12" ry="12"/>
                        <rect id="Stand_24" class="cls-2" x="37.5" y="343.5" width="91" height="65" rx="12" ry="12"/>
                        <rect id="Stand_25" class="cls-2" x="136.5" y="343.5" width="36" height="65" rx="12" ry="12"/>
                        <rect id="Toilettes" class="cls-2" x="179.5" y="343.5" width="63" height="65" rx="12" ry="12"/>
                        <rect id="Stand_27" class="cls-2" x="285.5" y="370.5" width="102" height="37" rx="12" ry="12"/>
                        <rect id="Stand_26" class="cls-2" x="285.5" y="343.5" width="102" height="20" rx="10" ry="10"/>
                        <rect id="Toilettes-2" data-name="Toilettes" class="cls-2" x="429.5" y="343.5" width="63" height="64" rx="12" ry="12"/>
                        <rect id="Stand_28" class="cls-2" x="502.5" y="343.5" width="55" height="64" rx="12" ry="12"/>
                        <path id="Stand_29" class="cls-2" d="M230.5,132.5h-39a12,12,0,0,0-12,12v13h-60a12,12,0,0,0-12,12v41a12,12,0,0,0,12,12h70c.34,0,.67,0,1-.05s.66.05,1,.05h39a12,12,0,0,0,12-12v-66A12,12,0,0,0,230.5,132.5Z"/>
                        <rect id="Stand_30" class="cls-2" x="36.5" y="237.5" width="206" height="69" rx="12" ry="12"/>
                        <rect id="Stand_31" class="cls-2" x="284.5" y="131.5" width="103" height="97" rx="12" ry="12"/>
                        <rect id="Stand_32" class="cls-2" x="284.5" y="237.5" width="63" height="69" rx="12" ry="12"/>
                        <rect id="Stand_33" class="cls-2" x="356.5" y="237.5" width="31" height="68" rx="12" ry="12"/>
                        <rect id="Stand_34" class="cls-2" x="429.5" y="132.5" width="61" height="54" rx="12" ry="12"/>
                        <rect id="Stand_35" class="cls-2" x="456.5" y="197.5" width="102" height="75" rx="12" ry="12"/>
                        <rect id="Stand_36" class="cls-2" x="429.5" y="280.5" width="129" height="26" rx="12" ry="12"/>
                        <rect id="Escalator" class="cls-2" x="435.5" y="23.5" width="27" height="99" rx="12" ry="12"/>
                        <rect id="Stand_37" class="cls-2" x="258.5" y="23.5" width="155" height="94" rx="12" ry="12"/>
                        <rect id="Escalator-2" data-name="Escalator" class="cls-2" x="215.5" y="23.5" width="27" height="99" rx="12" ry="12"/>
                        <use id="Escalator-3" data-name="Escalator" transform="translate(219 61) scale(0.42)" xlink:href="#image"/>
                        <use id="Escalator-4" data-name="Escalator" transform="translate(439 61) scale(0.42)" xlink:href="#image"/>
                        <use id="Escalator-5" data-name="Escalator" transform="translate(264 794) scale(0.42)" xlink:href="#image"/>
                        <use id="Escalator-6" data-name="Escalator" transform="translate(413 794) scale(0.42)" xlink:href="#image"/>
                        <image id="Infirmerie" width="50" height="50" transform="translate(505 625) scale(0.7)" xlink:href="image/icons8-hôpital-50.png"/>
                        <image id="Information" width="50" height="50" transform="translate(491 696) scale(0.54)" xlink:href="image/icons8-information-50.png"/>
                        <use id="Toilettes-3" data-name="Toilettes" transform="translate(215 351) scale(0.42)" xlink:href="#image-2"/>
                        <use id="Escalator-7" data-name="Escalator" transform="translate(442 366) scale(0.38)" xlink:href="#image"/>
                        <use id="Escalator-8" data-name="Escalator" transform="translate(189 372) scale(0.38)" xlink:href="#image"/>
                        <use id="Toilettes-4" data-name="Toilettes" transform="translate(465 351) scale(0.4)" xlink:href="#image-2"/>
                        <use id="Flèche" transform="translate(398 736) scale(0.6)" xlink:href="#image-3"/>
                        <use id="Flèche-2" data-name="Flèche" transform="translate(249 736) scale(0.6)" xlink:href="#image-3"/>
                        <use id="Escaliers" transform="translate(244 793) scale(0.4)" xlink:href="#image-4"/>
                        <use id="Escaliers-2" data-name="Escaliers" transform="translate(393 793) scale(0.4)" xlink:href="#image-4"/>
                        <text class="cls-3" transform="translate(309 777.84)">Ent<tspan class="cls-4" x="27.98" y="0">r</tspan><tspan x="34.51" y="0">ée</tspan></text>
                        <use id="Restauration" transform="translate(318 51) scale(0.7)" xlink:href="#image-5"/>
                        <use id="Restauration-2" data-name="Restauration" transform="translate(466 382) scale(0.36)" xlink:href="#image-5"/>
                    </g>
                    <g id="Effet_clique">
                        <g id="Stand_1-2" data-name="Stand_1">
                            <g id="Rond_31"><circle class="cls-5" cx="220" cy="621" r="2"/></g>
                            <g id="Rond_31-2" data-name="Rond_31"><circle class="cls-5" cx="212" cy="621" r="2"/></g>
                            <g id="Rond_31-3" data-name="Rond_31"><circle class="cls-5" cx="204" cy="621" r="2"/></g>
                            <use id="Pacman_1" transform="matrix(-0.03, 0, 0, 0.03, 235, 614)" xlink:href="#image-6"/>
                            <use id="Fantomes_1" transform="translate(99 595) scale(0.21)" xlink:href="#image-7"/>
                        </g>
                        <g id="Stand_2-2" data-name="Stand_2">
                            <g id="Rond_31-4" data-name="Rond_31"><circle class="cls-5" cx="252" cy="703" r="2"/></g>
                            <g id="Rond_31-5" data-name="Rond_31"><circle class="cls-5" cx="244" cy="703" r="2"/></g>
                            <g id="Rond_31-6" data-name="Rond_31"><circle class="cls-5" cx="236" cy="703" r="2"/></g>
                            <use id="Pacman_2" transform="matrix(-0.03, 0, 0, 0.03, 267, 696)" xlink:href="#image-6"/>
                            <use id="Fantomes_2" transform="translate(196 689) scale(0.13)" xlink:href="#image-7"/>
                        </g>
                        <g id="Stand_3-2" data-name="Stand_3">
                            <g id="Rond_5"><circle class="cls-5" cx="293" cy="595" r="2"/></g>
                            <g id="Rond_5-2" data-name="Rond_5"><circle class="cls-5" cx="285" cy="595" r="2"/></g>
                            <g id="Rond_5-3" data-name="Rond_5"><circle class="cls-5" cx="277" cy="595" r="2"/></g>
                            <use id="Pacman_3" transform="translate(262 588) scale(0.03)" xlink:href="#image-6"/>
                            <use id="Fantomes_3" transform="translate(303 582) scale(0.11)" xlink:href="#image-7"/>
                        </g>
                        <g id="Stand_4-2" data-name="Stand_4">
                            <use id="Fantomes_4" transform="translate(353 583) scale(0.1)" xlink:href="#image-7"/><g id="Rond_6"><circle class="cls-5" cx="395" cy="594" r="2"/></g><g id="Rond_6-2" data-name="Rond_6"><circle class="cls-5" cx="387" cy="594" r="2"/></g><g id="Rond_6-3" data-name="Rond_6"><circle class="cls-5" cx="379" cy="594" r="2"/></g><use id="Pacman_4" transform="matrix(-0.03, 0, 0, 0.03, 410, 587)" xlink:href="#image-6"/>
                        </g><g id="Stand_5-2" data-name="Stand_5"><g id="Rond_35"><circle class="cls-5" cx="293" cy="652" r="2"/></g><g id="Rond_35-2" data-name="Rond_35"><circle class="cls-5" cx="285" cy="652" r="2"/></g><g id="Rond_35-3" data-name="Rond_35"><circle class="cls-5" cx="277" cy="652" r="2"/></g><use id="Pacman_5" transform="translate(262 645) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_5" transform="translate(301 637) scale(0.12)" xlink:href="#image-7"/>
                        </g><g id="Stand_6-2" data-name="Stand_6"><use id="Fantomes_6" transform="translate(321 697) scale(0.13)" xlink:href="#image-7"/><g id="Rond_7"><circle class="cls-5" cx="395" cy="712" r="2"/></g><g id="Rond_7-2" data-name="Rond_7"><circle class="cls-5" cx="387" cy="712" r="2"/></g><g id="Rond_7-3" data-name="Rond_7"><circle class="cls-5" cx="379" cy="712" r="2"/></g><use id="Pacman_6" transform="matrix(-0.03, 0, 0, 0.03, 410, 705)" xlink:href="#image-6"/>
                        </g><g id="Stand_7-2" data-name="Stand_7"><use id="Fantomes_7" transform="translate(354 638) scale(0.1)" xlink:href="#image-7"/><g id="Rond_31-7" data-name="Rond_31"><circle class="cls-5" cx="395" cy="652" r="2"/></g><g id="Rond_31-8" data-name="Rond_31"><circle class="cls-5" cx="387" cy="652" r="2"/></g><g id="Rond_31-9" data-name="Rond_31"><circle class="cls-5" cx="379" cy="652" r="2"/></g><use id="Pacman_7" transform="matrix(-0.03, 0, 0, 0.03, 410, 645)" xlink:href="#image-6"/>
                        </g><g id="Stand_8-3" data-name="Stand_8"><g id="Rond_3"><circle class="cls-5" cx="438" cy="587" r="2"/></g><g id="Rond_3-2" data-name="Rond_3"><circle class="cls-5" cx="430" cy="587" r="2"/></g><g id="Rond_3-3" data-name="Rond_3"><circle class="cls-5" cx="422" cy="587" r="2"/></g><use id="Pacman_8" transform="translate(407 580) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_8" transform="translate(447 578) scale(0.07)" xlink:href="#image-7"/>
                        </g><g id="Stand_8-4" data-name="Stand_8"><use id="Fantomes_8-2" data-name="Fantomes_8" transform="translate(513 578) scale(0.08)" xlink:href="#image-7"/><g id="Rond_7-4" data-name="Rond_7"><circle class="cls-5" cx="566" cy="587" r="2"/></g><g id="Rond_7-5" data-name="Rond_7"><circle class="cls-5" cx="558" cy="587" r="2"/></g><g id="Rond_7-6" data-name="Rond_7"><circle class="cls-5" cx="550" cy="587" r="2"/></g><use id="Pacman_8-2" data-name="Pacman_8" transform="matrix(-0.03, 0, 0, 0.03, 581, 580)" xlink:href="#image-6"/>
                        </g><g id="Stand_9-2" data-name="Stand_9"><g id="Rond_8"><circle class="cls-5" cx="438" cy="642" r="2"/></g><g id="Rond_8-2" data-name="Rond_8"><circle class="cls-5" cx="430" cy="642" r="2"/></g><g id="Rond_8-3" data-name="Rond_8"><circle class="cls-5" cx="422" cy="642" r="2"/></g><use id="Pacman_9" transform="translate(407 635) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_9" transform="translate(442 630) scale(0.1)" xlink:href="#image-7"/>
                        </g><g id="Stand_10-2" data-name="Stand_10"><g id="Rond_8-4" data-name="Rond_8"><circle class="cls-5" cx="566" cy="642" r="2"/></g><g id="Rond_8-5" data-name="Rond_8"><circle class="cls-5" cx="558" cy="642" r="2"/></g><g id="Rond_8-6" data-name="Rond_8"><circle class="cls-5" cx="550" cy="642" r="2"/></g><use id="Pacman_10" transform="matrix(-0.03, 0, 0, 0.03, 581, 635)" xlink:href="#image-6"/>
                        </g><g id="Stand_11-2" data-name="Stand_11"><g id="Rond_9"><circle class="cls-5" cx="438" cy="699" r="2"/></g><g id="Rond_9-2" data-name="Rond_9"><circle class="cls-5" cx="430" cy="699" r="2"/></g><g id="Rond_9-3" data-name="Rond_9"><circle class="cls-5" cx="422" cy="699" r="2"/></g><use id="Pacman_11" transform="translate(407 692) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_11" transform="translate(447 691) scale(0.07)" xlink:href="#image-7"/>
                        </g><g id="Stand_12-2" data-name="Stand_12"><g id="Rond_10"><circle class="cls-5" cx="503.9" cy="744.87" r="2"/></g><g id="Rond_10-2" data-name="Rond_10"><circle class="cls-5" cx="503.75" cy="736.87" r="2"/></g><g id="Rond_10-3" data-name="Rond_10"><circle class="cls-5" cx="503.6" cy="728.87" r="2"/></g><use id="Pacman_12" transform="matrix(0, -0.03, -0.03, 0, 511.19, 759.73)" xlink:href="#image-6"/>
                        </g><g id="Stand_13-2" data-name="Stand_13"><use id="Fantomes_13" transform="translate(528 701) scale(0.07)" xlink:href="#image-7"/><g id="Rond_8-7" data-name="Rond_8"><circle class="cls-5" cx="566" cy="709" r="2"/></g><g id="Rond_8-8" data-name="Rond_8"><circle class="cls-5" cx="558" cy="709" r="2"/></g><g id="Rond_8-9" data-name="Rond_8"><circle class="cls-5" cx="550" cy="709" r="2"/></g><use id="Pacman_13" transform="matrix(-0.03, 0, 0, 0.03, 581, 702)" xlink:href="#image-6"/>
                        </g><g id="Stand_14-2" data-name="Stand_14"><g id="Rond_11"><circle class="cls-5" cx="438" cy="726" r="2"/></g><g id="Rond_11-2" data-name="Rond_11"><circle class="cls-5" cx="430" cy="726" r="2"/></g><g id="Rond_11-3" data-name="Rond_11"><circle class="cls-5" cx="422" cy="726" r="2"/></g><use id="Pacman_14" transform="translate(407 719) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_14" transform="translate(447 718) scale(0.07)" xlink:href="#image-7"/>
                        </g><g id="Stand_15-2" data-name="Stand_15"><g id="Rond_5-4" data-name="Rond_5"><circle class="cls-5" cx="45" cy="491" r="2"/></g><g id="Rond_5-5" data-name="Rond_5"><circle class="cls-5" cx="37" cy="491" r="2"/></g><g id="Rond_5-6" data-name="Rond_5"><circle class="cls-5" cx="29" cy="491" r="2"/></g><use id="Pacman_15" transform="translate(14 484) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_15" transform="translate(50 479) scale(0.11)" xlink:href="#image-7"/>
                        </g><g id="Stand_16-2" data-name="Stand_16"><g id="Rond_12"><circle class="cls-5" cx="123.9" cy="545.87" r="2"/></g><g id="Rond_12-2" data-name="Rond_12"><circle class="cls-5" cx="123.75" cy="537.87" r="2"/></g><g id="Rond_12-3" data-name="Rond_12"><circle class="cls-5" cx="123.6" cy="529.87" r="2"/></g><use id="Pacman_16" transform="matrix(0, -0.03, -0.03, 0, 131.19, 560.73)" xlink:href="#image-6"/><use id="Fantomes_16" transform="translate(109 474) scale(0.14)" xlink:href="#image-7"/>
                        </g><g id="Stand_17-2" data-name="Stand_17"><g id="Rond_16"><circle class="cls-5" cx="205.9" cy="545.87" r="2"/></g><g id="Rond_16-2" data-name="Rond_16"><circle class="cls-5" cx="205.75" cy="537.87" r="2"/></g><g id="Rond_16-3" data-name="Rond_16"><circle class="cls-5" cx="205.6" cy="529.87" r="2"/></g><use id="Pacman_17" transform="matrix(0, -0.03, -0.03, 0, 213.19, 560.73)" xlink:href="#image-6"/><use id="Fantomes_17" transform="translate(191 474) scale(0.14)" xlink:href="#image-7"/>
                        </g><g id="Stand_18-2" data-name="Stand_18"><g id="Rond_18"><circle class="cls-5" cx="380" cy="453" r="2"/></g><g id="Rond_18-2" data-name="Rond_18"><circle class="cls-5" cx="388" cy="453" r="2"/></g><g id="Rond_18-3" data-name="Rond_18"><circle class="cls-5" cx="396" cy="453" r="2"/></g><use id="Pacman_18" transform="matrix(-0.03, 0, 0, 0.03, 411, 446)" xlink:href="#image-6"/><use id="Fantomes_18" transform="translate(329 446) scale(0.06)" xlink:href="#image-7"/>
                        </g><g id="Stand_19-2" data-name="Stand_19"><g id="Rond_5-7" data-name="Rond_5"><circle class="cls-5" cx="293" cy="491" r="2"/></g><g id="Rond_5-8" data-name="Rond_5"><circle class="cls-5" cx="285" cy="491" r="2"/></g><g id="Rond_5-9" data-name="Rond_5"><circle class="cls-5" cx="277" cy="491" r="2"/></g><use id="Pacman_19" transform="translate(262 484) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_19" transform="translate(299 478) scale(0.11)" xlink:href="#image-7"/>
                        </g><g id="Stand_20-2" data-name="Stand_20"><g id="Rond_19"><circle class="cls-5" cx="379" cy="491" r="2"/></g><g id="Rond_19-2" data-name="Rond_19"><circle class="cls-5" cx="387" cy="491" r="2"/></g><g id="Rond_19-3" data-name="Rond_19"><circle class="cls-5" cx="395" cy="491" r="2"/></g><use id="Pacman_19-2" data-name="Pacman_19" transform="matrix(-0.03, 0, 0, 0.03, 410, 484)" xlink:href="#image-6"/><use id="Fantomes_19-2" data-name="Fantomes_19" transform="matrix(-0.11, 0, 0, 0.11, 373, 478)" xlink:href="#image-7"/>
                        </g><g id="Stand_21-2" data-name="Stand_21"><g id="Rond_18-4" data-name="Rond_18"><circle class="cls-5" cx="294" cy="530" r="2"/></g><g id="Rond_18-5" data-name="Rond_18"><circle class="cls-5" cx="286" cy="530" r="2"/></g><g id="Rond_18-6" data-name="Rond_18"><circle class="cls-5" cx="278" cy="530" r="2"/></g><use id="Pacman_21" transform="translate(263 523) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_21" transform="translate(329 523) scale(0.06)" xlink:href="#image-7"/>
                        </g><g id="Stand_22-2" data-name="Stand_22"><g id="Rond_5-10" data-name="Rond_5"><circle class="cls-5" cx="439" cy="491" r="2"/></g><g id="Rond_5-11" data-name="Rond_5"><circle class="cls-5" cx="431" cy="491" r="2"/></g><g id="Rond_5-12" data-name="Rond_5"><circle class="cls-5" cx="423" cy="491" r="2"/></g><use id="Pacman_22" transform="translate(408 484) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_22" transform="translate(450 472) scale(0.16)" xlink:href="#image-7"/>
                        </g><g id="Stand_23-2" data-name="Stand_23"><use id="Fantomes_23" transform="translate(519 473) scale(0.13)" xlink:href="#image-7"/><g id="Rond_13"><circle class="cls-5" cx="566" cy="491" r="2"/></g><g id="Rond_13-2" data-name="Rond_13"><circle class="cls-5" cx="558" cy="491" r="2"/></g><g id="Rond_13-3" data-name="Rond_13"><circle class="cls-5" cx="550" cy="491" r="2"/></g><use id="Pacman_23" transform="matrix(-0.03, 0, 0, 0.03, 581, 484)" xlink:href="#image-6"/>
                        </g><g id="Stand_24-2" data-name="Stand_24"><g id="Rond_15"><circle class="cls-5" cx="45" cy="376" r="2"/></g><g id="Rond_15-2" data-name="Rond_15"><circle class="cls-5" cx="37" cy="376" r="2"/></g><g id="Rond_15-3" data-name="Rond_15"><circle class="cls-5" cx="29" cy="376" r="2"/></g><use id="Pacman_24" transform="translate(14 369) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_24" transform="translate(67 359) scale(0.14)" xlink:href="#image-7"/>
                        </g><g id="Stand_25-2" data-name="Stand_25"><g id="Rond_16-4" data-name="Rond_16"><circle class="cls-5" cx="154.9" cy="416.87" r="2"/></g><g id="Rond_16-5" data-name="Rond_16"><circle class="cls-5" cx="154.75" cy="408.87" r="2"/></g><g id="Rond_16-6" data-name="Rond_16"><circle class="cls-5" cx="154.6" cy="400.87" r="2"/></g><use id="Pacman_25" transform="matrix(0, -0.03, -0.03, 0, 162.19, 431.73)" xlink:href="#image-6"/><use id="Fantomes_25" transform="translate(141 362) scale(0.12)" xlink:href="#image-7"/>
                        </g><g id="Toilettes-5" data-name="Toilettes"><g id="Rond_25"><circle class="cls-5" cx="210.9" cy="416.87" r="2"/></g><g id="Rond_25-2" data-name="Rond_25"><circle class="cls-5" cx="210.75" cy="408.87" r="2"/></g><g id="Rond_25-3" data-name="Rond_25"><circle class="cls-5" cx="210.6" cy="400.87" r="2"/></g><use id="Pacman_toilettes" transform="matrix(0, -0.03, -0.03, 0, 218.19, 431.73)" xlink:href="#image-6"/>
                        </g><g id="Stand_26-2" data-name="Stand_26"><g id="Rond_19-4" data-name="Rond_19"><circle class="cls-5" cx="379" cy="354" r="2"/></g><g id="Rond_19-5" data-name="Rond_19"><circle class="cls-5" cx="387" cy="354" r="2"/></g><g id="Rond_19-6" data-name="Rond_19"><circle class="cls-5" cx="395" cy="354" r="2"/></g><use id="Pacman_26" transform="matrix(-0.03, 0, 0, 0.03, 410, 347)" xlink:href="#image-6"/><use id="Fantomes_26" transform="matrix(-0.07, 0, 0, 0.07, 346, 346)" xlink:href="#image-7"/>
                        </g><g id="Stand_27-2" data-name="Stand_27"><g id="Rond_19-7" data-name="Rond_19"><circle class="cls-5" cx="293" cy="389" r="2"/></g><g id="Rond_19-8" data-name="Rond_19"><circle class="cls-5" cx="285" cy="389" r="2"/></g><g id="Rond_19-9" data-name="Rond_19"><circle class="cls-5" cx="277" cy="389" r="2"/></g><use id="Pacman_27" transform="translate(262 382) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_27" transform="translate(324 375) scale(0.12)" xlink:href="#image-7"/>
                        </g><g id="Toilettes-6" data-name="Toilettes"><g id="Rond_22"><circle class="cls-5" cx="437" cy="375" r="2"/></g><g id="Rond_22-2" data-name="Rond_22"><circle class="cls-5" cx="429" cy="375" r="2"/></g><g id="Rond_22-3" data-name="Rond_22"><circle class="cls-5" cx="421" cy="375" r="2"/></g><use id="Pacman_toilettes-2" data-name="Pacman_toilettes" transform="translate(406 368) scale(0.03)" xlink:href="#image-6"/>
                        </g><g id="Stand_28-2" data-name="Stand_28"><g id="Rond_28"><circle class="cls-5" cx="529.9" cy="415.87" r="2"/></g><g id="Rond_28-2" data-name="Rond_28"><circle class="cls-5" cx="529.75" cy="407.87" r="2"/></g><g id="Rond_28-3" data-name="Rond_28"><circle class="cls-5" cx="529.6" cy="399.87" r="2"/></g><use id="Pacman_28" transform="matrix(0, -0.03, -0.03, 0, 537.19, 430.73)" xlink:href="#image-6"/><use id="Fantomes_28" transform="translate(514 358) scale(0.14)" xlink:href="#image-7"/>
                        </g><g id="Stand_29-2" data-name="Stand_29"><use id="Fantomes_29" transform="translate(156 170) scale(0.18)" xlink:href="#image-7"/><g id="Rond_23"><circle class="cls-5" cx="251" cy="194" r="2"/></g><g id="Rond_23-2" data-name="Rond_23"><circle class="cls-5" cx="243" cy="194" r="2"/></g><g id="Rond_23-3" data-name="Rond_23"><circle class="cls-5" cx="235" cy="194" r="2"/></g><use id="Pacman_29" transform="matrix(-0.03, 0, 0, 0.03, 266, 187)" xlink:href="#image-6"/>
                        </g><g id="Stand_30-2" data-name="Stand_30"><g id="Rond_25-4" data-name="Rond_25"><circle class="cls-5" cx="139.9" cy="314.87" r="2"/></g><g id="Rond_25-5" data-name="Rond_25"><circle class="cls-5" cx="139.75" cy="306.87" r="2"/></g><g id="Rond_25-6" data-name="Rond_25"><circle class="cls-5" cx="139.6" cy="298.87" r="2"/></g><use id="Pacman_30" transform="matrix(0, -0.03, -0.03, 0, 147.19, 329.73)" xlink:href="#image-6"/><use id="Fantomes_30" transform="translate(116 248) scale(0.2)" xlink:href="#image-7"/>
                        </g><g id="Stand_31-2" data-name="Stand_31"><g id="Rond_32"><circle class="cls-5" cx="293" cy="181" r="2"/></g><g id="Rond_32-2" data-name="Rond_32"><circle class="cls-5" cx="285" cy="181" r="2"/></g><g id="Rond_32-3" data-name="Rond_32"><circle class="cls-5" cx="277" cy="181" r="2"/></g><use id="Pacman_31" transform="translate(262 174) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_31" transform="translate(312 157) scale(0.2)" xlink:href="#image-7"/>
                        </g><g id="Stand_32-2" data-name="Stand_32"><g id="Rond_27"><circle class="cls-5" cx="292" cy="272" r="2"/></g><g id="Rond_27-2" data-name="Rond_27"><circle class="cls-5" cx="284" cy="272" r="2"/></g><g id="Rond_27-3" data-name="Rond_27"><circle class="cls-5" cx="276" cy="272" r="2"/></g><use id="Pacman_32" transform="translate(261 265) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_32" transform="translate(299 253) scale(0.15)" xlink:href="#image-7"/>
                        </g><g id="Stand_33-2" data-name="Stand_33"><use id="Fantomes_33" transform="translate(358 261) scale(0.08)" xlink:href="#image-7"/><g id="Rond_23-4" data-name="Rond_23"><circle class="cls-5" cx="396" cy="272" r="2"/></g><g id="Rond_23-5" data-name="Rond_23"><circle class="cls-5" cx="388" cy="272" r="2"/></g><g id="Rond_23-6" data-name="Rond_23"><circle class="cls-5" cx="380" cy="272" r="2"/></g><use id="Pacman_33" transform="matrix(-0.03, 0, 0, 0.03, 411, 265)" xlink:href="#image-6"/>
                        </g><g id="Stand_34-2" data-name="Stand_34"><g id="Rond_32-4" data-name="Rond_32"><circle class="cls-5" cx="437" cy="160" r="2"/></g><g id="Rond_32-5" data-name="Rond_32"><circle class="cls-5" cx="429" cy="160" r="2"/></g><g id="Rond_32-6" data-name="Rond_32"><circle class="cls-5" cx="421" cy="160" r="2"/></g><use id="Pacman_34" transform="translate(406 153) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_34" transform="translate(446 145) scale(0.12)" xlink:href="#image-7"/>
                        </g><g id="Stand_35-2" data-name="Stand_35"><g id="Rond_31-10" data-name="Rond_31"><circle class="cls-5" cx="464" cy="234" r="2"/></g><g id="Rond_31-11" data-name="Rond_31"><circle class="cls-5" cx="456" cy="234" r="2"/></g><g id="Rond_31-12" data-name="Rond_31"><circle class="cls-5" cx="448" cy="234" r="2"/></g><use id="Pacman_35" transform="translate(433 227) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_35" transform="translate(488 214) scale(0.17)" xlink:href="#image-7"/>
                        </g><g id="Stand_36-2" data-name="Stand_36"><g id="Rond_32-7" data-name="Rond_32"><circle class="cls-5" cx="437" cy="294" r="2"/></g><g id="Rond_32-8" data-name="Rond_32"><circle class="cls-5" cx="429" cy="294" r="2"/></g><g id="Rond_32-9" data-name="Rond_32"><circle class="cls-5" cx="421" cy="294" r="2"/></g><use id="Pacman_36" transform="translate(406 287) scale(0.03)" xlink:href="#image-6"/><use id="Fantomes_36" transform="translate(483 282) scale(0.1)" xlink:href="#image-7"/>
                        </g><g id="Restauration-3" data-name="Restauration"><g id="Rond_12-4" data-name="Rond_12"><circle class="cls-5" cx="273.9" cy="126.87" r="2"/></g><g id="Rond_12-5" data-name="Rond_12"><circle class="cls-5" cx="273.75" cy="118.87" r="2"/></g><g id="Rond_12-6" data-name="Rond_12"><circle class="cls-5" cx="273.6" cy="110.87" r="2"/></g><use id="Pacman_Resto" transform="matrix(0, -0.03, -0.03, 0, 281.19, 141.73)" xlink:href="#image-6"/><g id="Rond_12-7" data-name="Rond_12"><circle class="cls-5" cx="397.9" cy="125.87" r="2"/></g><g id="Rond_12-8" data-name="Rond_12"><circle class="cls-5" cx="397.75" cy="117.87" r="2"/></g><g id="Rond_12-9" data-name="Rond_12"><circle class="cls-5" cx="397.6" cy="109.87" r="2"/></g><use id="Pacman_Resto-2" data-name="Pacman_Resto" transform="matrix(0, -0.03, -0.03, 0, 405.19, 140.73)" xlink:href="#image-6"/>
                        </g></g></svg>
                
            </div>
            
            <div class="col-xl-5 col-xs-5 col-md-5 conteneurcartes">
                        <div id="tab" class="btn-group" data-toggle="buttons-radio">
                            <a id="bouton-1" class="selection filter-button  btn-large boutonliste btn active" data-filter="tout" data-toggle="tab" onclick="monalerte(this.id);">Tout</a>
                            <a id="bouton-2" class="selection filter-button  btn-large boutonliste btn" data-filter="vente" data-toggle="tab" onclick="monalerte(this.id);">Vente</a>
                            <a id="bouton-3" class="selection filter-button  btn-large boutonliste btn" data-filter="console" data-toggle="tab" onclick="monalerte(this.id);">Console</a>
                            <a id="bouton-4" class="selection filter-button btn-large boutonliste btn" data-filter="services" data-toggle="tab" onclick="monalerte(this.id);">Services</a>
                            <a id="bouton-5" class="selection filter-button btn-large boutonliste btn" data-filter="partenaire" data-toggle="tab" onclick="monalerte(this.id);">Partenaire</a>
                        </div>
                
                <div class="carte">
                        
                    <?php
                    $exposants = file_get_contents('exposants.json');
                    $exposants = json_decode($exposants, true); 
                    for($i=0;$i<count($exposants['exposants']);$i++) : ?>
                    <div class="card w-100 <?php echo $exposants['exposants'][$i]['filtre']; ?> filter">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $exposants['exposants'][$i]['nom']; ?></h5>
                        <p class="card-text"><?php echo $exposants['exposants'][$i]['description']; ?></p>
                      </div>
                    </div>    

                <?php endfor; ?>
                </div>
            </div>
        
        
        
        
        </div>
    </div> 
    
      
    <!-- Javascript optionnel -->
    <script src="js/script.js"></script>
    <script src="js/heure.js"></script>

    <!-- jQuery, puis Popper.js, puis Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
    
</html>