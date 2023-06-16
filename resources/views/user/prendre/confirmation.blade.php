<!DOCTYPE html>
<html lang="en">
@include('user.css')
<body>
    @include('user.navbar')

    <section style="width:80vw; margin-left: 10vw;">
        <h1 class="title">Imprimez la page</h1>
        <div style="height:15vh; width:80vw; margin-bottom:5vh; display:flex; justify-content:space-evenly; background-image:linear-gradient(to right,#92ccff,white,#92ccff); border-radius:50px;padding:5%;padding-left:5%;padding-top:1%;padding-bottom:1%;">
            <div style="width:50%;">
                <h5 style="font-style:italic; color:green;">Votre rendez-vous a bien été enregistré</h5>
                <p style="color:rgb(223, 146, 3); font-weight:bold;">Veuillez apporter tous les documents nécessaires le jour du rendez-vous.</p>
                <p style="color: red; font-weight:bold;">Si vous avez une heure de retard, votre rendez-vous sera annulé.</p>
            </div>
            <img src="{{asset('user/img/facultélogo.png')}}" alt="logo" width="10%">
            <div style="direction:rtl; width:50%;">
                <h5 style="font-style:italic; color:green;">تم حفظ موعدك</h5>
                <h5 style="color:rgb(223, 146, 3)">يرجى إحضار جميع المستندات اللازمة في يوم الموعد.</h5>
                <h5 style="color: red">إذا تأخرت ساعة واحدة ، فسيتم إلغاء موعدك.</h5>
            </div>
        </div>
        <div style="height:40vh; width:80vw;margin-bottom:5vh; display:flex;justify-content:space-evenly; background-image:linear-gradient(to right,#92ccff,white,#92ccff); border-radius:50px;padding:5%;padding-left:5%;padding-top:1%;padding-bottom:1%">
            <div style="margin-right:5vw; height:40vh; width:80vw;margin-bottom:5vh; display:flex;justify-content:space-evenly; border-radius:50px;padding:5%;padding-left:5%;padding-top:1%;padding-bottom:1%">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos personnelle</h1>
                    <address>
                        <strong>CIN : </strong><br>
                        CNE : <br>
                        Nom : <br>
                        Prénom : <br>
                        Adresse : <br>
                        Téléphone : <br>
                        E-mail : <br>
                    </address>
                </div>
                <div class="col-sm-6 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                    <address>
                        <strong>رقم البطاقة الوطنية : </strong><br>
                        <strong>رقم المسار : </strong><br>
                        الاسم العائلي : <br>
                        الاسم الشخصي : <br>
                        العنوان : <br>
                        الهاتف : <br>
                        البريد الالكتروني : <br>
                    </address>
                </div>
            </div>
            <div style="height:40vh; width:80vw;margin-bottom:5vh; display:flex;justify-content:space-evenly; border-radius:50px;padding:5%;padding-left:5%;padding-top:1%;padding-bottom:1%">
                <div class="col-sm-6 invoice-col">
                    <h1 class="h5 mb-3">Infos personnelle</h1>
                    <address>
                        <strong>CIN : </strong><br>
                        CNE : <br>
                        Nom : <br>
                        Prénom : <br>
                        Adresse : <br>
                        Téléphone : <br>
                        E-mail : <br>
                    </address>
                </div>
                <div class="col-sm-6 invoice-col" style="direction: rtl">
                    <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                    <address>
                        <strong>رقم البطاقة الوطنية : </strong><br>
                        <strong>رقم المسار : </strong><br>
                        الاسم العائلي : <br>
                        الاسم الشخصي : <br>
                        العنوان : <br>
                        الهاتف : <br>
                        البريد الالكتروني : <br>
                    </address>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" style="padding:10px; border-radius:50px; width:150px;">Imprimer</button>
        </div>
        {{--
        <div class="container-fluid" style="margin-left:10%;">
            <div class="row" style="margin-top:3%;">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header pt-3">
                            <div class="row invoice-info">
                                <div class="col-sm-6 invoice-col">
                                    <h1 class="h5 mb-3">Infos personnelle</h1>
                                    <address>
                                        <strong>CIN : </strong><br>
                                        <strong>CNE : </strong><br>
                                        Nom : <br>
                                        Prénom : <br>
                                        Adresse : <br>
                                        Téléphone : <br>
                                        E-mail : <br>
                                    </address>
                                </div>
    
                                <div class="col-sm-6 invoice-col" style="direction: rtl">
                                    <h1 class="h5 mb-3">المعلومات الشخصية</h1>
                                    <address>
                                        <strong>رقم البطاقة الوطنية : </strong><br>
                                        <strong>رقم المسار : </strong><br>
                                        الاسم العائلي : <br>
                                        الاسم الشخصي : <br>
                                        العنوان : <br>
                                        الهاتف : <br>
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
                                        <div class="col-sm-6 invoice-col">
                                            <h1 class="h5 mb-3">Infos du rendez-vous</h1>
                                            <b>code RDV : </b><br>
                                            Filière : <br>
                                            Lieu : <br>
                                            Horaires : Le  à <br>
                                        </div>
                                        
                                        <div class="col-sm-6 invoice-col" style="direction: rtl">
                                            <h1 class="h5 mb-3">معلومات الموعد</h1>
                                            <b>رقم الموعد : </b><br>
                                            الشعبة : <br>
                                            المكان : <br>
                                            التوقيت : يوم  على الساعة <br>
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
        </div> --}}
        {{-- <form action="">
            <div class="body">
                <div class="card1">
                    <div>
                        <label for="nom_fr">Nom français :</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="prenom_fr">Prénom français :</label>
                        <input type="text" name="prenom_fr">
                    </div>
                    <div>
                        <label for="nom_fr">Nom arabe</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="nom_fr">Prénom arabe</label>
                        <input type="text" name="nom_fr">
                    </div>
                    <div>
                        <label for="cin">CIN :</label>
                        <input type="text" name="cin">
                    </div>
                    <div>
                        <label for="cne">CNE :</label>
                        <input type="text" name="cne">
                    </div>
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="telephone">Téléphoone :</label>
                        <input type="text" name="telephone">
                    </div>
                    <div>
                        <label for="filiere">Filière : </label>
                        <select name="filiere" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="lieu">Lieu : </label>
                        <select name="lieu" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="date">Date : </label>
                        <select name="date" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                    <div>
                        <label for="heure_debut">Heure : </label>
                        <select name="heure_debut" id="">
                            <option value="">Séléctionnez</option>
                        </select>
                    </div>
                </div>

                <div class="card2">
                    <h1>Fournitures d'inscription</h1>
                    <ol>
                        <li>L'impression d'enregistrement.</li>
                        <li>Certificat original du baccalauréat.</li>
                        <li>Une copie du certificat de baccalauréat.</li>
                        <li>Une copie du contrat d'augmentation.</li>
                        <li>Une copie de la carte d'identité nationale.</li>
                        <li>Quatre photos pour identification.</li>
                    </ol>
                </div>
            </div>
            <div class="button">
                <a class="btn" href="{{url('confirmation')}}">Valider</a>
            </div>
        </form> --}}
    </section>

    @include('user.script')
</body>
</html>