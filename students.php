<!DOCTYPE html>
    <!-- Header and navbar -->
    <?php 
        $selected = "students"; 
        require('includes/main/header.php'); 
    ?>
    <!-- MAIN PAGE -->
    <section id="page" class="projects">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 students">
                    <h3>Office hours:</h3>
                    <ul>
                        <li>room 503, building A-1</li>
                        <li>13:00 - 14:00, Mondays</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 students">
                    <h3>Summer semester 2021/2022</h3>
                    <ul>
                        <li>Fizyka układów złożonych</li>
                        <li>Fizyka 1.1A</li>
                    </ul>
                    <h3>Summer semester 2020/2021</h3>
                    <ul>
                        <li>Introduction to Complex Systems</li>
                    </ul>
                    <h3>Winter semester 2020/2021</h3>
                    <ul>
                        <li>Complex Systems Theory and Practice</li>
                    </ul>
                    <h3>Winter semester 2019/2020</h3>
                    <ul>
                        <li>Agent-based modelling of complex systems</li>
                        <li>Complex Systems Theory and Practice</li>
                    </ul>
                    <h3>Summer semester 2018/2019</h3>
                    <ul>
                        <li>Introduction to Complex Systems</li>
                    </ul>
                    <h3>Winter semester 2018/2019</h3>
                    <ul>
                        <li>Agent-based modelling of complex systems</li>
                    </ul>
                    <h3>Summer semester 2017/2018</h3>
                    <ul>
                        <li>Programowanie</li>
                    </ul>
                    <h3>Winter semester 2017/2018</h3>
                    <ul>
                        <li>Wstęp do informatyki i programowania</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY -->
    <?php require('includes/main/company.php'); ?>
    <!-- FOOTER -->
    <?php require('includes/main/footer.php'); ?>
    <a href="#main-header" id="to-top-button" class="button-scroll"></a>
</body>
</html>