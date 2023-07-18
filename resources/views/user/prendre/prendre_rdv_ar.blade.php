<!DOCTYPE html>
<html lang="ar" dir="rtl">
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
    <section>
        <form action="{{url('create_rdv')}}" method="post" enctype="multipart/form-data">
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
                        <label for="email">البريد الإلكتروني :</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">رقم الهاتف :</label>
                        <input type="number" name="telephone" required>
                    </div>
                    <div>
                        <label>الشعبة : </label>
                        <select name="id_fil" id="filiere">
                            <option value=''>اختيار شعبة</option>
                            @foreach ($filieres as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->nom_ar}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>المكان : </label>
                        <select name="id_lieu" id="lieu">
                            <option value=''>اختيار مكان</option>
                        </select>
                    </div>
                    <div>
                        <label>اليوم : </label>
                        <select name="id_date" id="date">
                            <option value=''>اختيار اليوم</option>
                        </select>
                    </div>
                    <div>
                        <label>الساعة : </label>
                        <select name="id_time" id="time">
                            <option value=''>اختيار ساعة</option>
                        </select>
                    </div>
                </div>

                <div class="card2">
                    <h4>الوثائق المطلوبة للتسجيل</h4>
                    <ul>
                        <li>إيصال استلام الموعد</li>
                        <li>إيصال التسجيل المسبق</li>
                        <li>شهادة البكالوريا الأصلية</li>
                        <li>نسختان من البكالوريا </li>
                        <li>نسختان من بطاقة التعريف الوطنية</li>
                         <li>صورتان </li>
                        <li>ظرفان متنبران</li>
                    </ul>
                </div>
            </div>

            <div class="button">
                <button class="btn btn-primary" type="submit">تأكيد</button>
            </div>
        </form>
    </section>

    @include('user.script_ar')
</body>
</html>