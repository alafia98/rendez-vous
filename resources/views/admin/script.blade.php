</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- plugins:js -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#filiere').change(function () {
            var idFil = $(this).val();
            if (idFil) {
                $.ajax({
                    url: '/get-lieus/' + idFil,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#lieu').empty();
                        $('#lieu').append('<option value="">séléctionner</option>');
                        $.each(data, function (key, value) {
                            $('#lieu').append('<option value="' + value.id + '">' + value.nom_fr + '</option>');
                        });
                    }
                });
            } else {
                $('#lieu').empty();
            }
        });
        
        $('#lieu').change(function () {
            var idLieu = $(this).val();
            if (idLieu) {
                $.ajax({
                    url: '/get-dates/' + idLieu,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#date').empty();
                        $('#date').append('<option value="">séléctionner</option>');
                        $.each(data, function (key, value) {
                            $('#date').append('<option value="' + value.id + '">' + value.date + '</option>');
                        });
                    }
                });
            } else {
                $('#date').empty();
                $('#time').empty();
            }
        });
        
        $('#date').change(function () {
            var idDate = $(this).val();
            if (idDate) {
                $.ajax({
                    url: '/get-times/' + idDate,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#time').empty();
                        $('#time').append('<option value="">séléctionner</option>');
                        $.each(data, function (key, value) {
                            $('#time').append('<option value="' + value.id + '">' + value.time + '</option>');
                        });
                    }
                });
            } else {
                $('#time').empty();
            }
        });
    });
</script>

<script>
    function imprimerPage() {
        window.print();
    }
</script>