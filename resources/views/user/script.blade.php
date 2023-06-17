<footer>
    <div>
        <a href="#">téléphone: 05123456789</a>
        <a href="#">email: faculte@gmail.com</a>
        <a href="#">addresse: faculté martil</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
                        $('#lieu').append('<option value="">اختر مكان</option>');
                        $.each(data, function (key, value) {
                            $('#lieu').append('<option value="' + value.id + '">' + value.nom_fr + '</option>');
                        });
                    }
                });
            } else {
                $('#lieu').empty();
                $('#date').empty();
                $('#time').empty();
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
                        $('#date').append('<option value="">اختر اليوم</option>');
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
                        $('#time').append('<option value="">اختر الساعة</option>');
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
