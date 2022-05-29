<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contactez Nous</h6>
                        <h2>Vous pouvez faire une reservation ici</h2>
                    </div>
                    <p>Nous sommes a Lome au Togo plus precisement a sanguera non loin de l'ucao-uut.Choisir ucao resto , c'est choisir le meilleur. Au plaisir de vous recevoir dans nos locaux.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Telephone</h4>
                                <span><a href="#">T0gocel:+22891723378</a><br><a href="#">Moov:+22897782195</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">yveskokou@gmail.com</a><br><a href="#">nkoubah@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('reservation')}}" method="post">
                     @csrf
                        <div class="row">
                        <div class="col-lg-12">
                            <h4>Table Reservation</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <input type="number" name="guest" placeholder="nombre d'invités">
                        </div>
                        <div class="col-lg-6">
                            <div id="filterDate2">    
                              <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                  <span class="glyphicon glyphicon-th"></span>
                                </div>
                              </div>
                            </div>   
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="time" name="time">
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Faire une reservation</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 