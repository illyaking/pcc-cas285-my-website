<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Websites by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Links &bull; IllyaKing.com</title>
    <link rel="icon" href="../img/kingLogoBlack.png" type="image/png" sizes="24x24">

    <!--CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
    <?php include '../includes/header.inc.php'; ?>
    <?php include '../includes/nav.inc.php'; ?>
    <main>

        <div class="album py-5 bg-light">
            <div class="container-fluid">

                <div class="row">

                    <?php 
                        $list = [
                            ["<a rel='external' href='https://mythosimprint.com' target='_blank'><img src='../img/boxMythosImprint.jpg' height='300' alt='Icon for Mythos Imprint'></a>", "Mythos Imprint: Online E-Commerce and Multi-network WordPress install"],
                            ["<a rel='external' href='https://thecomixscene.com' target='_blank'><img src='../img/boxTheComixScene.jpg' height='300' alt='Icon for The ComiX Scene'></a>", "The ComiX Scene: BuddyPress Social Network and WP Multisite install"],
                            ["<a rel='external' href='https://zetaman.reallifesuperheroes.info' target='_blank'><img src='../img/boxZetamanTV.jpg' height='300' alt='Icon for ZetamanTV'></a>", "Zetaman.TV: Mobile Responsive HTML/CSS Website"],
                            ["<a rel='external' href='https://pics.illyaking.com' target='_blank'><img src='../img/boxPiwgo.jpg' height='300' alt='Icon for Image Archive'></a>", "Piwigo Image Archive<br>&nbsp;"],
                            ["<a rel='external' href='https://king-web.net'><img src='../img/boxKingWebNet.jpg' height='300' alt='Icon for Code Archive'></a>", "Site map and homework archive<br>&nbsp;"]
                            ];
                        foreach($list as $lists) {
                                echo "<div class='col-md-3'><div class='card mb-4 shadow-sm'>" . $lists[0] . 
                                     "<div class='card-body'><p class='card-text'>" . $lists[1] .
                                "</p></div></div></div>" ;
                            }
                    ?>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.album -->

    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
