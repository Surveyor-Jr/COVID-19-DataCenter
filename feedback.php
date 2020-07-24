<?php require_once('header.php');?>


<div class="alert alert-info" role="alert" style="text-align:center;">
	<h4 class="alert-heading">Feedback</h4>
	<p>We value your feedback & suggestions more than anything. Your voice matters to us and is greatly appreciated.</p>
	<hr>
	<p class="mb-0">Kindly fill in the form below with the relevant details.</p>
</div>

<!-- Server side start -->
<div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Idea Suggest</h4>
                                        <form class="needs-validation" novalidate="" method="post" action="sending.php">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
													<label for="validationCustom01">Full Name</label>
													
                                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="" required="">
                                                    <div class="valid-feedback">
                                                        Looks good!
													</div>
													<div class="invalid-feedback">
                                                            It would really help us if we know your name
                                                        </div>
                                                </div>
                                                
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                        </div>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="visitor@email.com" aria-describedby="inputGroupPrepend" required="">
                                                        <div class="invalid-feedback">
                                                            We might need a way to contact you for assistance with your idea
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="col-md-4 mb-3">
                                                   
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">Category</span>
                                                        </div>
                                                        <select class="form-control" name="category" id="category">
						                                    <option>---Select Category---</option>
						                                    <option value="suggestion">Suggestion</option>
						                                    <option value="general feedback">General Feedback</option>
						                                    <option value="compliant">Compliant</option> 
						                                    <option value="other">Other</option>
					                                    </select>
                                                        <div class="invalid-feedback">
                                                            We might need a way to contact you for assistance with your idea
                                                        </div>
                                                    </div>
                                            </div>-->

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Description</label>
                                                    <textarea class="form-control" id="description" name="description" placeholder="Kindly input your suggested idea" required="" rows="15" ></textarea>
                                                    <div class="invalid-feedback">
                                                        Please say something...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                                    <label class="form-check-label" for="invalidCheck">
                                                        I agree that African Surveyors Connect can contact me after this submission in order to seek assistance or collaborate on how to carry out the suggested idea above.
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
											<button class="btn btn-primary" type="submit">Submit Idea</button>
											<?php 
											$display = 0;
											if($display > 0)
											echo "Sent"; 
											?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Server side end -->

<?php require_once('footer.php');?>