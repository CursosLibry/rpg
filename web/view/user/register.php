         <?php include_once '../../inc/header.inc.php'; ?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toda lenda tem seu inicio</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="/RPG/web/whatever/trataUser.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nome Completo" required="">
                           </div>
                             <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email" required="">
                           </div>
                           </div>
                           <div style="padding: 50px 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Apelido" required="">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Senha" required="">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Repita a Senha" required="">
                           </div>
                        </div>
                        <button style="background-color: #969696;" type="button" class="btn sent-butnn btn-lg">Escrever a Minha!</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>
                <?php include_once '../../inc/footer.inc.php'; ?>