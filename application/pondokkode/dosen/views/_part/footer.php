        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">

                </nav>
                <p class="copyright pull-left">
                    Copyright &copy; 2016 <a href="http://unwaha.ac.id/">Universitas KH. A. Wahab Hasbullah. </a>All Rights Reserved.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php print base_url() ?>assets/dashboard/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php print base_url() ?>assets/dashboard/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php print base_url() ?>assets/dashboard/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php print base_url() ?>assets/dashboard/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php print base_url() ?>assets/dashboard/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php print base_url() ?>assets/dashboard/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php print base_url() ?>assets/dashboard/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Dashboard E-learning</b> universitas KH. A. Wahab Hasbullah."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>