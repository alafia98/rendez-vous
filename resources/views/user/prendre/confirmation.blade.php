<!DOCTYPE html>
<html lang="en">
@include('user.css')
<body>
    <section class="sexion">
        <div class="header">
            <div class="fr">
                <h5>Votre rendez-vous a bien été enregistré</h5><br>
                <p>Veuillez apporter tous les documents nécessaires le jour du rendez-vous.</p>
            </div>
            <img src="{{asset('user/img/facultélogo.png')}}" width="20%" alt="logo">
            <div class="ar">
                <h5>تم حفظ موعدك</h5><br>
                <h5>يرجى إحضار جميع المستندات اللازمة في يوم الموعد.</h5>
            </div>
        </div>
        <div class="contenu">
            <div class="form">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos de RDV</h1>
                    <ul>
                        <li><strong>Code RDV :      {{$rendezvous->code_rdv}}</strong></li>
                        <li>Filière :</li>
                        <li>Lieu :</li>
                        <li>Jour : </li>
                        <li>Heure : {{$rendezvous->time->time}}</li>
                    </ul>
                </div>
                <div class="col-sm-6 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">معلومات الموعد</h1>
                    <ul>
                        <li><strong>رقم الموعد :</strong></li>
                        <li>الشعبة:</li>
                        <li>المكان :</li>
                        <li>اليوم :</li>
                        <li>الساعة :</li>
                    </ul>
                </div>
            </div>
            <div class="form">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos personnelle</h1>
                    <ul>
                        <li><strong>CIN :</strong></li>
                        <li>CNE :</li>
                        <li>Nom :</li>
                        <li>Prénom :</li>
                        <li>Téléphone :</li>
                        <li>E-mail :</li>
                    </ul>
                </div>
                <div class="col-sm-7 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                    <ul>
                        <li><strong>رقم البطاقة الوطنية :</strong></li>
                        <li>رقم المسار :</li>
                        <li>الاسم العائلي :</li>
                        <li>الاسم الشخصي :</li>
                        <li>الهاتف :</li>
                        <li>البريد الالكتروني :</li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <a class="btn btn-primary" href="{{url('/')}}">عودة</a>
            <button class="btn btn-primary" onclick="imprimerPage()">طباعة</button>
        </div>
    </section>
    
<script>
    function imprimerPage() {
        window.print();
    }
</script>

</body>
</html>