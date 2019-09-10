@extends("layouts")

@section("title")
  Contacto
@endsection

@section("css")
@yield("contacto.css")
@endsection


  @section("main")

     <!-- Section: Contact v.1 -->
     <section class="my-5">

       <!-- Section heading -->
       <h2 class="h1-responsive font-weight-bold text-center my-5">Contacto</h2>
       <!-- Section description -->
       <p class="text-center w-responsive mx-auto pb-5"><i>¿Tenes alguna consulta?..No dejes de escribirnos.. Deja tu comentario!</i></p>

       <!-- Grid row -->
       <div class="row">

         <!-- Grid column -->
         <div class="col-lg-5 mb-lg-0 mb-4">

           <!-- Form with header -->
           <div class="card">
             <div class="card-body">
               <!-- Header -->
               <div class="form-header blue accent-1">
                 <h3 class="mt-2"><i class="fas fa-envelope"></i> Contacto:</h3>
               </div>
               <p class="dark-grey-text">Dejanos tu comentario.</p>
               <!-- Body -->
               <div class="md-form">
                 <form class="contacto" action="contacto.php" method="post">


                 <i class="fas fa-user prefix grey-text"></i>
                 <input type="text" id="form-name" class="form-control">
                 <label for="nombre">Nombre</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-envelope prefix grey-text"></i>
                 <input type="text" id="form-email" class="form-control">
                 <label for="email">Email</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-tag prefix grey-text"></i>
                 <input type="text" id="form-Subject" class="form-control">
                 <label for="subject">Asunto</label>
               </div>
               <div class="md-form">
                 <i class="fas fa-pencil-alt prefix grey-text"></i>
                 <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                 <label for="text">Send message</label>
               </div>
               <div class="text-center">
                 <button class="submit">Enviar</button>
               </div>
             </div>
           </div>
            </form>
           <!-- Form with header -->

         </div>
         <!-- Grid column -->

         <!-- Grid column -->
         <div class="col-lg-7">

           <!--Google map-->
           <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px; width:300px;">
             <iframe src="https://maps.google.com/maps?q=guaymallen%20mendoza&t=&z=13&ie=UTF8&iwloc=&output=embed"   frameborder="0"
               style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Buttons-->
           <div class="row text-center">
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-map-marker-alt"></i>
               </a>
               <p>Guaymallen</p>
               <p class="mb-md-0">Mendoza </p>
             </div>
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-phone"></i>
               </a>
               <p>261 4826395</p>
               <p class="mb-md-0">Mon - Fri, 8:00-20:00</p>
             </div>
             <div class="col-md-4">
               <a class="btn-floating blue accent-1">
                 <i class="fas fa-envelope"></i>
               </a>
               <p>info@gmail.com</p>
               <p class="mb-0">ventas@gmail.com</p>
             </div>
           </div>

         </div>
         <!-- Grid column -->

       </div>
       <!-- Grid row -->

     </section>
     <!-- Section: Contact v.1 -->
     @endsection



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
