<?php
include "../dbs/db.php";
session_start();
if (!isset($_SESSION['username']))
    header("Location: index");

?>









<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="../style/styleee.css" media="all">

    <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <h2 class="text-center" style="margin-top: 20px;">
            <?php echo "Welcome Mr " . strtoupper($_SESSION['username']) . ""; ?>
        </h2>
        <br>

        <a href="home" class="fa fa-home" aria-hidden="true"> &nbsp; HOME</a>
        <a href="ajouter" class="fa fa-user-plus" aria-hidden="true" style="margin-top: 380px;"> AJOUTER UN EMPLOYEE</a>

        <a href="profile" class="fa fa-user" aria-hidden="true"> &nbsp;&nbsp;PROFILE</a>
        <a href="../login/logout" class="fa fa-power-off" aria-hidden="true"> &nbsp; SE DECONNECTER</a>

    </div>


    <nav>




        <a class="navbar-brand "></a>
        <button class="openbtn" onclick="openNav()">&#9776; </button>




    </nav>

    <div id="main">
        <h3>I. PR??SENTATION DE L???ORGANISME D'ACCUEIL</h3>

        <p>La Compagnie des phosphates de Gafsa ou CPG est une entreprise tunisienne d'exploitation des phosphates bas??e ?? Gafsa. La CPG figure parmi les plus importants producteurs de phosphates, occupant la cinqui??me place mondiale.</p>
        <p>L'activit?? de l'entreprise se d??finit en 4 grands groupes :</p>
        <p>- La pr??paration du terrain</p>
        <p>- Extraction</p>
        <p>- Production</p>
        <p> - La commercialisation des phosphates.</p>


        <h3>II. HISTORIQUE</h3>

        <p> En 1885, un g??ologue amateur fran??ais, Philippe Thomas, d??couvre d'importantes couches de phosphates de calcium dans la r??gion de Metlaoui.</p>
        <p>?? la suite de prospections et d'explorations identifiant les gisements, la Compagnie des phosphates et des chemins de fer de Gafsa est fond??e en 18972. Elle obtient la concession des gisements de la vall??e de l'oued Selja sous conditions de les relier par une voie ferr??e au port de Sfax.</p>
        <p>Des mines voient successivement le jour ?? M??tlaoui (1899), Kal??at Khasba et Redeyef (1903), Moular??s (1904), Shib et Mrata (1970) ; des carri??res sont ??galement ouvertes ?? Moular??s (1975), Kef Shfaier (1978), Oum Lakhcheb (1980), Oued El Khasfa et Kef Eddour (1986), Redeyef (1989) et Jellabia (1991)2. Les cadres fran??ais encadrent une main d'??uvre d'origine vari??e : Kabylie, Tripolitaine, Maroc, Corse et Italie.</p>
        <p>Pendant des d??cennies, la compagnie prend en charge les besoins de la population locale (distribution d'eau, de gaz et d'??lectricit??, couverture m??dicale et sanitaire, ??ducation, loisirs).</p>
        <p>En janvier 1976, apr??s avoir absorb?? la Compagnie des phosphates de Jebel M'dhilla (1969) et la Soci??t?? tunisienne d'exploitation phosphati??re (1976), elle devient une entreprise d'??tat. Elle change de d??nomination apr??s la reprise de ses activit??s de transport ferroviaire par la soci??t?? nationale des chemins de fer tunisiens, le 1er janvier 1967, ?? l'expiration de sa concession.</p>
        <p>En 1994, les directions g??n??rales de la CPG et du Groupe chimique tunisien sont regroup??es avec un m??me PDG, suivies deux ans plus tard par les structures commerciales. La baisse des cours du phosphate conduit l'entreprise ?? r??duire ses effectifs, passant de 15 000 ?? 5 000 employ??s.</p>







    </div>

</body>

</html>