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
        <h2 class="title">أدخل جميع البيانات الشخصية</h2>
        <form action="{{url('upload_std')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <div class="card1">
                    <div>
                        <label for="prenom_fr">الإسم بالفرنسية :</label>
                        <input type="text" name="prenom_fr" required>
                    </div>
                    <div>
                        <label for="nom_fr"> النسب بالفرنسية :</label>
                        <input type="text" name="nom_fr" required>
                    </div>
                    <div>
                        <label for="prenom_ar">الإسم بالعربية :</label>
                        <input type="text" name="prenom_ar" required>
                    </div>
                    <div>
                        <label for="nom_ar">النسب بالعربية :</label>
                        <input type="text" name="nom_ar" required>
                    </div>
                    <div>
                        <label for="cin">رقم البطاقة الوطنية :</label>
                        <input type="text" name="cin" required>
                    </div>
                    <div>
                        <label for="cne">رقم المسار :</label>
                        <input type="text" name="cne" required>
                    </div>
                    <div>
                        <label for="adresse"> العنوان :</label>
                        <input type="text" name="adresse" required>
                    </div>
                    <div>
                        <label for="email">البريد الإلكتروني :</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">رقم الهاتف :</label>
                        <input type="number" name="telephone" required>
                    </div>
                    <div>
                        <label for="id_fil">الشعبة : </label>
                        <select name="id_fil" id="id_fil">
                            <option selected>اختيار شعبة</option>
                            @foreach ($filiere as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->nom_ar}}</option>
                            @endforeach
                        </select>
                    </div>
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

            <div class="button">
                <button class="btn btn-primary" type="submit">تأكيد</button>
                <a href="{{url('prendre_rdv')}}" class="btn btn-primary">التالي</a>
            </div>
        </form>
    </section>

    @include('user.script')
</body>
</html>