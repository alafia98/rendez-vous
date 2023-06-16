<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('user.css')
<body>
    @include('user.navbar')
    @if (Session::has('message'))
        <script>
            swal('Message', '{{Session::get('message')}}', 'success', {
                button:true,
                button:"ok",
            })
        </script>
    @endif
    <section>
        <h2 class="title">اختيار موعد</h2>
        <form action="{{url('create_rdv')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="body" style="align-items: center;">
                <div class="card1">
                    <div>
                        <label for="id_lieu">المكان : </label>
                        <select name="id_lieu" id="id_lieu">
                            <option selected>اختيار مكان</option>
                            @foreach ($lieu as $lieu)
                                <option value="{{$lieu->id}}">{{$lieu->nom_ar}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="id_cal">الزمان : </label>
                        <select name="id_cal" id="id_cal">
                            <option selected>اختيار الوقت</option>
                            @foreach ($calendrier as $calendrier)
                                <option value="{{$calendrier->id}}">يوم {{$calendrier->date}} على الساعة {{$calendrier->heure_debut}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="button">
                        <button class="btn btn-primary" type="submit">تأكيد</button>
                        <a href="{{url('confirmation')}}" class="btn btn-primary">التالي</a>
                    </div>

                </div>

                <div class="card2">
                    <h4>الوثائق المطلوبة للتسجيل</h4>
                    <ol>
                        <li>مطبوع التسجيل.</li>
                        <li>شهادة البكالوريا الأصلية.</li>
                        <li>نسخة مـن شهادة البكالوريا.</li>
                        <li>نسخـة من عقد الازدياد.</li>
                        <li>نسخـة من بطاقة التعريف الوطنية.</li>
                        <li>أربعة صــور للتعـريف.</li>
                        <li>ظرف يحمل طابعا بريديا واسـم الطالب وعـنوانه.</li>
                        <li>كشف النقط لسنة البكالوريا الأصلي مع نسخة منه.</li>
                        <li>الوصل الذي يثبت التسجيل القبلي.</li>
                        <li>الوصل الذي يثبت أخذ الموعد.</li>
                    </ol>
                </div>
            </div>
            
        </form>
    </section>

    @include('user.script')
</body>
</html>