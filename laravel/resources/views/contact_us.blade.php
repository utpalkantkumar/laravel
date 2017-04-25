


@include('includes.header')

  



    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <hr class="star-primary">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate method="post" action="{{ url('contact_me') }}">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input class="form-control" id="f_name" name="f_name" type="text" placeholder="Please enter your first name.">
                                <p class="help-block text-danger"><span id="error_f_name" class="error"></span></p>
                            </div>
                        </div>
						 <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input class="form-control" id="l_name" name="l_name" type="text" placeholder="Please enter your last name.">
                                <p class="help-block text-danger"><span id="error_l_name" class="error"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Please enter your Email.">
                                <p class="help-block text-danger"><span id="error_email" class="error"></p>
                            </div>
                        </div>
                        
                        
						<div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="Please enter your phone number.">
                                <p class="help-block text-danger"><span id="error_phone" class="error"></p>
                            </div>
                        </div>
                        <br>
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="button" id="submitbtn" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




@include('includes.footer')