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
            <div class="form form1">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos de RDV</h1>
                    <ul>
                        <li><strong>Code RDV :</strong></li>
                        <li>Filière: {{$rendezvous->time->date->lieu->filiere->nom_fr}}</li>
                        <li>Lieu: {{$rendezvous->time->date->lieu->nom_fr}}</li>
                        <li>Jour:</li>
                        <li>Heure:</li>
                    </ul>
                </div>
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3" style="padding-bottom:25px"></h1>
                    <ul class="center">
                        <li><strong>RDV-{{$rendezvous->code_rdv}}</strong></li><br>
                        <li></li><br>
                        <li></li>
                        <li>{{$rendezvous->time->date->date}}</li>
                        <li>{{$rendezvous->time->time}}</li>
                    </ul>
                </div>
                <div class="col-sm-6 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">معلومات الموعد</h1>
                    <ul>
                        <li><strong>رقم الموعد:</strong></li>
                        <li>الشعبة: {{$rendezvous->time->date->lieu->filiere->nom_ar}}</li>
                        <li>المكان : {{$rendezvous->time->date->lieu->nom_ar}}</li>
                        <li>اليوم :</li>
                        <li>الساعة :</li>
                    </ul>
                </div>
            </div>
            <div class="form form2">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos prsnl</h1>
                    <ul>
                        <li><strong>CIN :</strong></li>
                        <li>CNE :</li>
                        <li>Nom : {{$rendezvous->nom_fr}}</li>
                        <li>Prénom : {{$rendezvous->prenom_fr}}</li>
                        <li>Téléphone :</li>
                        <li>E-mail :</li>
                    </ul>
                </div>
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3" style="padding-bottom:25px"></h1>
                    <ul class="center">
                        <li><strong>{{$rendezvous->cin}}</strong></li>
                        <li>{{$rendezvous->cne}}</li><br>
                        <li></li><br>
                        <li></li>
                        <li>{{$rendezvous->telephone}}</li>
                        <li>{{$rendezvous->email}}</li>
                    </ul>
                </div>
                <div class="col-sm-7 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                    <ul>
                        <li><strong>البطاقة الوطنية:</strong></li>
                        <li>رقم المسار:</li>
                        <li>النسب: {{$rendezvous->nom_ar}}</li>
                        <li>الاسم: {{$rendezvous->prenom_ar}}</li>
                        <li>الهاتف:</li>
                        <li>الإيميل:</li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" onclick="imprimerPage()">Imprimer</button>
            <a class="btn btn-primary" href="{{url('/')}}">Retourne</a>
        </div>
    </section>
    
<script>
    function imprimerPage() {
        window.print();
    }
</script>

</body>
</html>