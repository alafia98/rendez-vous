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
                            <div class="col-sm-4 invoice-col">
                                <h1 class="h5 mb-3">Infos personnelle</h1>
                                <address >
                                    <strong>CIN : </strong><br>
                                    <strong>CNE : </strong><br>
                                    Nom : {{$rendezvous->nom_fr}}<br>
                                    Prénom :{{$rendezvous->prenom_fr}} <br>
                                    Numéro de téléphone : <br>
                                    E-mail : <br>
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <br>
                                <address align="center">
                                    <strong>{{$rendezvous->cin}}</strong><br>
                                    <strong>{{$rendezvous->cne}}</strong><br>
                                    <br>
                                    <br>
                                    {{$rendezvous->telephone}}<br>
                                    {{$rendezvous->email}}<br>
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col" style="direction: rtl">
                                <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                                <address>
                                    <strong>رقم البطاقة الوطنية : </strong><br>
                                    <strong>رقم المسار : </strong><br>
                                    الاسم العائلي : {{$rendezvous->nom_ar}}<br>
                                    الاسم الشخصي : {{$rendezvous->prenom_ar}}<br>
                                    رقم الهاتف : <br>
                                    البريد الالكتروني : <br>
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
                                    <div class="col-sm-4 invoice-col">
                                        <h1 class="h5 mb-3">Infos du rendez-vous</h1>
                                        <b>code RDV :</b><br>
                                        Filière : Sociologie<br>
                                        Lieu : Salle 2<br>
                                        Jour : <br>
                                        Heure : <br>
                                    </div>

                                    <div class="col-sm-4 invoice-col" align="center">
                                        <br>
                                        <b>RDV-{{$rendezvous->code_rdv}}</b><br>
                                        <br>
                                        <br>
                                        {{$rendezvous->time->date->date}}<br>
                                        {{$rendezvous->time->time}}<br>
                                    </div>
                                    
                                    <div class="col-sm-4 invoice-col" style="direction: rtl">
                                        <h1 class="h5 mb-3">معلومات الموعد</h1>
                                        <b>رقم الموعد :</b><br>
                                        الشعبة : علم الإجتماع<br>
                                        المكان : قاعة 2<br>
                                        اليوم :<br>
                                        الساعة :<br>
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
                    <button class="btn btn-primary" style="padding:10px; border-radius:50px; width:150px;" onclick="imprimerPage()">Imprimer</button>
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