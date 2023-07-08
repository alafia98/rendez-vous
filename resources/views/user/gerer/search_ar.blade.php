<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('user.css')
<body>
    @include('user.navbar_ar')
    @if (Session::has('message'))
        <script>
            swal('Message', '{{Session::get('message')}}', 'success', {
                button:true,
                button:"ok",
            })
        </script>
    @endif
    <h1 class="h1">الرجاء إدخال المعلومات التالية</h1>
    <section>
        <form class="search" action="{{url('search')}}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="main">
                <div>
                    <label for="code_rdv">رمز الموعد :</label>
                    <input type="text" name="code_rdv" id="code_rdv">
                </div>
                <div>
                    <label for="cin">رقم البطاقة الوطنية :</label>
                    <input type="text"  name="cin" id="cin">
                </div>
            </div>
            <div class="button">
                <button class="btn btn-primary" type="submit">ابحث</button>
            </div>
        </form>
    </section>

    @include('user.script')
</body>
</html>