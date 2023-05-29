<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
       <div class="container-fluid page-body-wrapper content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
<section class="content-header">					
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid" style="margin-left:10%;">
        <div class="row" style="margin-top:5%;">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header pt-3">
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <h1 style="font-style:italic; color:green;">Votre rendez-vous a bien été enregistré</h1>
                                <p style="color:orange">Veuillez apporter tous les documents nécessaires le jour du rendez-vous.</p>
                                <p style="color: red">Si vous avez une heure de retard, votre rendez-vous sera annulé.</p>
                            </div>
                            <div class="col-sm-4 invoice-col" align="center">
                                <img src="{{asset('user/img/facultélogo.png')}}" alt="logo" width="40%">
                            </div>
                            <div class="col-sm-4 invoice-col" style="direction:rtl">
                                <h1 style="font-style:italic; color:green;">تم حفظ موعدك</h1><br>
                                <p style="color:orange">يرجى إحضار جميع المستندات اللازمة في يوم الموعد.</p><br>
                                <p style="color: red">إذا تأخرت ساعة واحدة ، فسيتم إلغاء موعدك.</p>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-left:10%;">
        <div class="row" style="margin-top:3%;">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header pt-3">
                        <div class="row invoice-info">
                            <div class="col-sm-6 invoice-col">
                                <h1 class="h5 mb-3">Infos personnelle</h1>
                                <address>
                                    <strong>CIN : {{$rendezvous->etudiant->cin}}</strong><br>
                                    <strong>CNE : {{$rendezvous->etudiant->cne}}</strong><br>
                                    Nom : {{$rendezvous->etudiant->nom_fr}}<br>
                                    Prénom : {{$rendezvous->etudiant->prenom_fr}}<br>
                                    Adresse : {{$rendezvous->etudiant->adresse}}<br>
                                    Téléphone : {{$rendezvous->etudiant->telephone}}<br>
                                    E-mail : {{$rendezvous->etudiant->email}}<br>
                                </address>
                            </div>

                            <div class="col-sm-6 invoice-col" style="direction: rtl">
                                <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                                <address>
                                    <strong>رقم البطاقة الوطنية : {{$rendezvous->etudiant->cin}}</strong><br>
                                    <strong>رقم المسار : {{$rendezvous->etudiant->cne}}</strong><br>
                                    الاسم العائلي : {{$rendezvous->etudiant->nom_ar}}<br>
                                    الاسم الشخصي : {{$rendezvous->etudiant->prenom_ar}}<br>
                                    العنوان : {{$rendezvous->etudiant->adresse}}<br>
                                    الهاتف : {{$rendezvous->etudiant->telephone}}<br>
                                    البريد الالكتروني : {{$rendezvous->etudiant->email}}<br>
                                </address>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-left:10%;">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header pt-3">
                        <div class="row invoice-info">
                            <div class="card-header pt-3">
                                <div class="row invoice-info">
                                    <div class="col-sm-6 invoice-col">
                                        <h1 class="h5 mb-3">Infos du rendez-vous</h1>
                                        <b>code RDV : {{$rendezvous->code_rdv}}</b><br>
                                        Filière : {{$rendezvous->etudiant->filiere->nom_fr}}<br>
                                        Lieu : {{$rendezvous->etudiant->filiere->lieu->nom_fr}}<br>
                                        Horaires : Le {{$rendezvous->calendrier->date}} à {{$rendezvous->calendrier->heure_debut}}<br>
                                    </div>
                                    
                                    <div class="col-sm-6 invoice-col" style="direction: rtl">
                                        <h1 class="h5 mb-3">معلومات الموعد</h1>
                                        <b>رقم الموعد : {{$rendezvous->code_rdv}}</b><br>
                                        الشعبة : {{$rendezvous->etudiant->filiere->nom_ar}}<br>
                                        المكان : {{$rendezvous->etudiant->filiere->lieu->nom_ar}}<br>
                                        التوقيت : يوم {{$rendezvous->calendrier->date}} على الساعة {{$rendezvous->calendrier->heure_debut}}<br>
                                    </div>
                                </div>
                            </div>                             
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div> 

    <div class="container-fluid" style="margin-left:10%;">
        <div class="row" style="margin-top:3%;">
            <div class="col-md-9" style="display: flex; justify-content:space-around;">
                <div>
                    <button class="btn btn-primary" style="padding:10px; border-radius:50px; width:150px;">Imprimer</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
            </div>
       </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>