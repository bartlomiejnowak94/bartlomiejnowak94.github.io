<!DOCTYPE html>
    <!-- Header and navbar -->
    <?php 
        $selected = "index"; 
        require('includes/main/header.php'); 
    ?>
    <!-- MAIN PAGE -->
    <section id="page" class="projects">
        <div class="container">
            <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h2>Dr inż. Bartłomiej Nowak</h2>
                    <img class="img-fluid" src="images/profiles/Bartlomiej-Nowak.jpg" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main-define">
                    <p>I'm PhD in Physics. I am a scientist who combines theoretical physics with social sciences in his work. I use methods from non-linear dynamics, non-equilibrium processes and phase transitions to study complex systems. In research on socio-economic phenomena, I also use broadly understood numerical analysis. I would like to further develop myself in programming and data analysis. But I would most like to solve interesting problems.</p>
                    <h4>Research Interest</h4>
                    <ul>
                        <li>Agent-based modeling</li>
                        <li>Complex Systems</li>
                        <li>Phase Transitions</li>
                        <li>Statistical Physics</li>
                    </ul>
                    <p>Interested in collaboration? Want to ask about some research details? Fell free to mail me <a href="mailto:bartlomiej.nowak@pwr.edu.pl">bartlomiej.nowak@pwr.edu.pl</a></p>
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