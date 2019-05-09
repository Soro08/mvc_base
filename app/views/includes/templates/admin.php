<!doctype html>
<html lang="en">
<head>

    <title>Iso NaN MVC!</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">

    <!-- Material Design Bootstrap -->
    <link href="static/css/mdb.min.css" rel="stylesheet">

    <style>
        .double-nav .breadcrumb-dn {
            color: #fff;
        }
        .side-nav.wide.slim .sn-ad-avatar-wrapper a span {
            display: none;
        }
    </style>
</head>

<body class="fixed-sn mdb-skin">

<?php include_once APP.'views/includes/templates/header.php'; ?>

<!--Main Layout-->
<main>
    <div class="container-fluid mt-5">
        <?= $contents ; ?>
    </div>
</main>
<!--Main Layout-->




<!-- Footer -->
<?php include_once APP.'views/includes/templates/footer.php'; ?>
<!-- Footer -->
<!-- SCRIPTS -->

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<!-- Tooltips -->
<!-- <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/popper.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
<!-- MDB core JavaScript -->
<!-- <script type="text/javascript" src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script> -->
<script type="text/javascript" src="static/js/mdb.min.js"></script>

<script>
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(sideNavScrollbar);
</script>
</body>
</html>