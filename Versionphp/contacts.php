<?php

include('include/header.php');
include('include/footer.php');

?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <legend>Si vous avez une question, n'hésitez surtout pas.</legend>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card hovercard">
        <div class="card-background">
          <img class="card-bkimg" alt="logo maison de l'emploi" src="assets/img/logo_mde_Llhc.jpg">

        </div>
        <div class="useravatar">
          <img alt="" src="assets/img/logo_mde_Llhc.jpg">
        </div>
        <div class="card-info"><span class="card-title">Maison de l'emploi</span>

        </div>
      </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            <div class="hidden-xs">Adresse</div>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
            <div class="hidden-xs">Télephone</div>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <div class="hidden-xs">Contact</div>
          </button>
        </div>
      </div>

      <div class="well">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tab1">
            <h3>91Ter Avenue Jean Jaurès</h3>
            <h3>62800 Lièvin</h3>
          </div>
          <div class="tab-pane fade in" id="tab2">
            <h3>03 21 13 10 15</h3>
          </div>
          <div class="tab-pane fade in" id="tab3">
            <h3>Monsieur Sylvain Bernard</h3>
            <h3>      <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact" data-original-title>
              Mail
            </a>
            <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Une question? Contactez nous.</h4>
                  </div>
                  <form action="#" method="post" accept-charset="utf-8">
                    <div class="modal-body" style="padding: 5px;">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                          <input class="form-control" name="firstname" placeholder="Prénom" type="text" required autofocus />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                          <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                          <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                          <input class="form-control" name="subject" placeholder="Titre" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <textarea style="resize:vertical;" class="form-control" placeholder="Votre message" rows="6" name="comment" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer" style="margin-bottom:-14px;">
                      <input type="submit" class="btn btn-success" value="Envoyer"/>
                      <!--<span class="glyphicon glyphicon-ok"></span>-->
                      <input type="reset" class="btn btn-danger" value="Effacer" />
                      <!--<span class="glyphicon glyphicon-remove"></span>-->
                      <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card hovercard">
        <div class="card-background">
          <img class="card-bkimg" alt="logo maison de l'emploi" src="assets/img/missionlocale.jpg">

        </div>
        <div class="useravatar">
          <img alt="" src="assets/img/missionlocale.jpg">
        </div>
        <div class="card-info"><span class="card-title">Mission locale Lens-Liévin</span>

        </div>
      </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
          <button type="button" id="stars" class="btn btn-primary" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            <div class="hidden-xs">Adresse</div>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="favorites" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
            <div class="hidden-xs">Télephone</div>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="following" class="btn btn-default" href="#tab6" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <div class="hidden-xs">Contact</div>
          </button>
        </div>
      </div>

      <div class="well">
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tab4">
            <h3>91 Avenue Jean Jaurès</h3>
            <h3>62800 Lièvin</h3>
          </div>
          <div class="tab-pane fade in" id="tab5">
            <h3>03 21 74 80 40</h3>
          </div>
          <div class="tab-pane fade in" id="tab6">
            <h3>      <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact" data-original-title>
              Mail
            </a>
            <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Une question? Contactez nous.</h4>
                  </div>
                  <form action="#" method="post" accept-charset="utf-8">
                    <div class="modal-body" style="padding: 5px;">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                          <input class="form-control" name="firstname" placeholder="Prénom" type="text" required autofocus />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                          <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                          <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                          <input class="form-control" name="subject" placeholder="Titre" type="text" required />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <textarea style="resize:vertical;" class="form-control" placeholder="Votre message" rows="6" name="comment" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="panel-footer" style="margin-bottom:-14px;">
                      <input type="submit" class="btn btn-success" value="Envoyer"/>
                      <!--<span class="glyphicon glyphicon-ok"></span>-->
                      <input type="reset" class="btn btn-danger" value="Effacer" />
                      <!--<span class="glyphicon glyphicon-remove"></span>-->
                      <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
            </h3>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- Begin chatwing.com chatbox -->
<iframe src="https://chatwing.com/chatbox/f9384cc0-9e9d-11e7-a052-e9b4d803a746" width="100%" height="500" frameborder="0" scrolling="0">Please contact us at info@chatwing.com if you cant embed the chatbox</iframe>
<!-- End chatwing.com chatbox -->

</div>
<script type="text/javascript">
  (function(d) {
    var cwjs, id='chatwing-js';  if(d.getElementById(id)) {return;}
    cwjs = d.createElement('script'); cwjs.type = 'text/javascript'; cwjs.async = true; cwjs.id = id
    cwjs.src = "//chatwing.com/code/f9384cc0-9e9d-11e7-a052-e9b4d803a746/embedded";
    d.getElementsByTagName('head')[0].appendChild(cwjs);
  })(document);
</script>
