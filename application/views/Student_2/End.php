<script>
function myFunction2() {

    var txt;
    var person = prompt("กรุณากรอกเหตุผลการยกเลิก");
    if (person == null || person == "") {
        txt = "ไม่มีเหตุผล";
    } else {
        txt = person;
    }
    document.getElementById("demo").innerHTML = txt;

    return txt;
}

</script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
