<?php
/*
************************************************************
Long name  : Internet Project Framework
Short name : IPF
Author     : Alexey Abramov
E-mail     : abramov.developer@gmail.com
LinkedIn   : https://www.linkedin.com/in/alexey-abramov-kz/
City       : Christchurch / NewZealand 
Year       : 2020
************************************************************
*/
?>
 

  <!-- Main Stylesheet File -->

<!-- Modal--> 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-popout-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login / Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card-body">
                    
					<form class="login_form">

                        <div class="form-group">
                            <div id="message" class="alert alert-danger mt-1 d-none align-middle text-center"></div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-18">
                                <input type="text" id="email1" class="form-control" name="email1" placeholder="Email Address*">
                                <div id="email_warning_message" class="text-danger mt-1 d-none"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-16">
                                <input type="password" id="password" class="form-control" name="password"  placeholder="Password*">
                                <div id="password_warning_message" class="text-danger mt-1 d-none"></div>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            

                        </div>
                    </form>
					
                </div>
            </div>
              </div>
      <div class="modal-footer"> 
	  <button type="button" id="submit_login" class="btn btn-primary">
                                Login
                            </button>
      </div>
    </div>
  </div>
</div>


		<!-- #login -->
			