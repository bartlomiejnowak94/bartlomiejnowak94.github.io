<!DOCTYPE html>
    <!-- Header and navbar -->
    <?php 
        $selected = "research"; 
        require('includes/main/header.php'); 
    ?>
    <!-- MAIN PAGE -->
    <section id="page" class="projects">
        <div class="container">
            <a id="button-to-top"></a>
            <!-- LINKS -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 links">
                <a href="#PUBS" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Publications</nobr></b></a>
                <a href="#CERT" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Certificates</nobr></b></a>
                <a href="#CONFS" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Presentations</nobr></b></a>
                <a href="#SCHOOLS" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Schools</nobr></b></a>
                <a href="#SEMIS" class="button-scroll"> <nobr><i class="fas fa-arrow-alt-circle-down"></i> <b>Seminars</nobr></b></a>
            </div>
            <hr>
            <?php require('includes/research/publications.php'); ?>
            <?php require('includes/research/certifications.php'); ?>
            <?php require('includes/research/presentations.php'); ?>
            <?php require('includes/research/schools.php'); ?>
            <?php require('includes/research/seminars.php'); ?>
    </section>
    <!-- COMPANY -->
    <?php require('includes/main/company.php'); ?>
    <!-- FOOTER -->
    <?php require('includes/main/footer.php'); ?>
    <a href="#main-header" id="to-top-button" class="button-scroll"></a>
</body>
</html>