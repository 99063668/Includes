<div class="container">
    <div class="pagecontainer">

<?php
    $Title = ["Call of Duty", "God of War", "Beat Saber", "Tekken 7"];
    $Description = [
    "Call of Duty is een serie van computerspellen ontwikkeld door Infinity Ward, Treyarch en Sledgehammer Games. Na het succes van het eerste spel, volgden er nog meerdere spellen. Qua gameplay lijkt de Call of Duty-serie op de Medal of Honor-serie, maar in tegenstelling tot Medal of Honor speelt de speler als soldaat van verschillende landen, zoals de Verenigde Staten, het Verenigd Koninkrijk en de Sovjet-Unie.<br> <br> Call of Duty 4: Modern Warfare was het eerste spel in de serie dat niet meer tijdens de Tweede Wereldoorlog afspeelt, maar in het heden. Call of Duty: WWII (2017) was het laatste spel dat zich tijdens de Tweede Wereldoorlog afspeelde. <br> <br> Het spel bevat een singleplayer- en multiplayermodus.[3] Het spel ondersteunt voor het eerst in de serie cross-platform multiplayer, wat ervoor zorgt dat spelers van zowel de pc- als de consoleversies met elkaar op dezelfde servers kunnen spelen. Hierbij kan gefilterd worden op besturingsapparaat, zodat spelers met een gamepad niet tegen spelers met een muis en toetsenbord hoeven te spelen.", 
    "Het spel wordt vanuit een 'over-de-schouder'-gezichtsveld gespeeld, en gepresenteerd als een continue doorlopend spel zonder onderbrekingen, videofragmenten of laadschermen. De spelwereld is open, maar is geen openwereldspel. <br> <br> De speler bestuurt Kratos die middels combo's vijanden moet verslaan. Het spel bevat daarbij ook enkele puzzelelementen om verder te komen. De gameplay verschilt met die van vorige titels. Zo gebruikt Kratos niet langer zijn messen met dubbele ketting (Blades of Chaos), maar heeft hij nu een magische strijdbijl (Leviathan Axe). De bijl kan worden gegooid naar vijanden en keert dan terug naar zijn hand, vergelijkbaar met Mjölnir, de krijgshamer van Thor. Kratos heeft ook het Wachterschild (Guardian Shield) als nieuw wapen. Het kan worden opgevouwen aan zijn linkerarm, en het zowel defensief als offensief gebruiken.<br> <br> In het spel kan de speler Hacksilver verzamelen, een munteenheid waarmee nieuwe voorwerpen gekocht kunnen worden. Ervaringspunten (XP) worden gebruikt om nieuwe gevechtstechnieken te leren. Ook zijn er schatkisten in het spel te vinden met willekeurige voorwerpen.",
    "Beat Saber is een rhythmgame in virtual reality, ontwikkeld en uitgegeven door Beat Games. Het speelt zich af in een surrealistische neonomgeving en laat de speler blokken snijden die muzikale beats voorstellen met een paar contrasterend gekleurde sabers.<br> <br> De game bevat verschillende nummers met maximaal vijf moeilijkheidsgraden, van Easy tot Expert +. De speler gebruikt VR-bewegingscontrollers om een paar gloeiende sabers te hanteren, die standaard rood en blauw zijn voor respectievelijk links en rechts. In elk nummer presenteert het spel de speler een stroom van naderende blokken, gesynchroniseerd met de beats en noten van het nummer, gelegen in een van de 12 mogelijke posities van een 4x3 raster.",
    "Tekken is een van de succesvolste reeks van computerspellen van het Japanse bedrijf Namco met wereldwijd ruim 40 miljoen verkochte exemplaren. In deze serie vechtspellen is het de bedoeling om de tegenstander met behulp van onder andere combo's en worpen te verslaan. <br> <br> Tekken 7 heeft als doel gekregen om een breder publiek aan te trekken. Naast het versimpelen van de gameplay worden er ook een aantal opmerkelijke nieuwe personages aangekondigd. "
    ];
    $Image = ["images/COD.jpg", "images/GodOfWar.jpg", "images/BeatSaber.jpg", "images/Tekken7.jpg"];

    if(isset($_GET["pages"])){

        $Page = str_replace("_"," ",$_GET["pages"]);
        for ($i=0; $i < count($Title); $i++) { 
            if ($Page == $Title[$i]) {
                $Index = $i;
            }
        }         
    }
    echo "<h1>" . $Title[$Index] . "</h1>";
    echo "<br>";
    echo "<p>" . $Description[$Index] . "</p>";
    echo "<br>";
    echo "<img class='images' src=". $Image[$Index] ." alt='PageImage'>";
    echo "<br>";
?>

    </div>
</div>