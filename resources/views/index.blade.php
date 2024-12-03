<!doctype html>
<html class="no-js" lang="sk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mythopedia</title>
    @vite('resources/css/my.css')
    <meta name="description" content="">

    <!--
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">
    -->

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body class="index">

<header>
    <div class="header-top">
        <h1>Mythopedia</h1>
        <p>Mýty všetkých kútov sveta.</p>
    </div>
    <nav>
        <ul>
            <li><a href="/">Domov</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Mytológie &#9662;</a>
                <div class="dropdown-content">
                    <a href="./Mythology/Greek/greek.blade.php">Grécka mytológia</a>
                    <a href="Norse%20Mythology/Severská_Mytológia.html">Severská mytológia</a>
                    <a href="#" class="non-clickable">Egyptská mytológia</a>
                    <a href="#" class="non-clickable">Keltská mytológia</a>
                    <a href="#" class="non-clickable">Slovanská mytológia</a>
                    <a href="other/Zoznam_Mytológii.html">Dalšie...</a>
                </div>
            </li>
            <li>
                <a href="Creepypasty/Creepypasta.html" class="creepy">Creepypasty</a>
            </li>
            <li>
                <a href="#" class="non-clickable">O mne</a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Čo je to mytológia?</h2>
        <p>Súbor mýtov alebo mýtus (aj v zmysle súbor príbehov, ktoré sa rozprávajú, no netvrdí sa o nich, že sú pravdivé)</p>
    </section>

    <section>
        <h2>Populárne mytológie</h2>
        <ul>
            <li><strong>Grécka mytológia:</strong> Príbehy o bohoch ako Zeus, Héra, Poseidón a hrdinoch ako Herkules a Achiles.</li>
            <li><strong>Severská mytológia:</strong> Príbehy o bohoch ako Odin, Thor, Loki a o apokalypse Ragnarök.</li>
            <li><strong>Egyptská mytológia:</strong> Bohovia ako Ra, Anubis, Osiris a príbehy o stvorení sveta.</li>
            <li><strong>Keltská mytológia:</strong> Legendy o druidoch, bohoch ako Dagda a hrdinoch ako Cúchulainn.</li>
        </ul>
    </section>

    <!-- Zatial nepotrebné
     <section>
      <h2>Aktuality</h2>
      <p>Tu nájdete najnovšie články a aktualizácie z našej stránky.</p>
      <ul>
        <li>Pridaný nový článok o gréckom hrdinovi Herkulovi.</li>
        <li>Severská mytológia: Príbeh o Ragnaröku bol aktualizovaný.</li>
      </ul>
    </section>
    -->

    <section>
        <h2>Mýtické bytosti</h2>
        <p>Mytológia z rôznych kútov sveta je plná fascinujúcich bytostí. Medzi najznámejšie patria:</p>
        <ul>
            <li><strong>Draci</strong> - obrovské, ohnivé stvorenia známe z čínskej, európskej a iných mytológií.</li>
            <li><strong>Jednorožce</strong> - krásne, magické kone so špirálovitým rohom, symbol čistoty a sily.</li>
            <li><strong>Upíri</strong> - nesmrteľné bytosti žijúce z krvi, pochádzajúce zo slovanskej a európskej mytológie.</li>
        </ul>
    </section>

    <section>
        <h2>Citát týždňa</h2>
        <p>"Odvaha nie je absenciou strachu, ale skôr rozhodnutím, že niečo iné je dôležitejšie než strach." - Príslovie zo severskej mytológie</p>
    </section>

    <section>
        <h2>Prečo sú tu, teda tu budú Creepypasty?</h2>
        <p>Lebo ich tu chcem.</p>
    </section>

    <section>
        <h2>O Mythopedii</h2>
        <p>Mythopedia je venovaná skúmaniu a zdieľaniu príbehov z najrôznejších mytológií po celom svete. Naším cieľom je uchovať bohatstvo kultúrnych príbehov, ktoré pretrvávajú celé stáročia, a ponúknuť priestor pre diskusiu a objavovanie.</p>
    </section>
</main>

<footer>
    <p>&copy; 2024 Mythopedia</p>
</footer>

</body>

</html>
