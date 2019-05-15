<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
		<link rel="icon" type="image/png" href="{{URL::to('cadastro.assets/img/favicon.png')}}" />

		<title>PontosAqui | Cadastro</title>
		
		<!-- CSS Files -->
		<link href="{{URL::to('cadastro.assets/css/bootstrap.min.css')}}" rel="stylesheet" />
		<link href="{{URL::to('cadastro.assets/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

		<!-- Fonts and Icons -->
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link href="{{URL::to('cadastro.assets/css/themify-icons.css')}}" rel="stylesheet">

	</head>

	<body>

	<div class="image-container set-full-height" style="background-color: #18BC9C">
	    <!--Master Container-->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--Wizard Container-->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
							<form method="POST" action="{{ route('register') }}">
                        		@csrf
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Pontos Aqui</h3>
									<p class="category">Bem Vindo ao programa de fidelização Pontos Aqui.</p>
		                    	</div>

								<!--Wizard Indicador Navigator -->
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#1etapa" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
											</a>
										</li>
			                            <li>
											<a href="#2etapa" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
											</a>
										</li>
			                            <li>
											<a href="#3etapa" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
											</a>
										</li>
			                        </ul>
								</div>

		                        <div class="tab-content">
									<!--Ini 1ªEtapa -->
		                            <div class="tab-pane" id="1etapa">
										<div class="row">
										<h5 class="info-text"> Preencha os campos obrigatórios(*)</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="{{URL::to('cadastro.assets/img/default-avatar.jpg')}}" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture">
													</div>
													<h6>Escolha seu Avatar</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="username">Nome de Usuário(a)<small>(*)</small></label>
													<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
													@if ($errors->has('username'))
														<span class="help-block">
															<strong>{{ $errors->first('username') }}</strong>
														</span>
													@endif		
													<p></p>										
													<label for="name">{{ __('Name') }}<small>(*)</small></label>
													<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
													@error('name')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													<p></p>
													<label for="email">{{ __('E-Mail Address') }}<small>(*)</small></label>
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group">
													<label for="password" >{{ __('Password') }}<small>(*)</small></label>
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
		
													<label for="password-confirm">{{ __('Confirm Password') }}<small>(*)</small></label>
													<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
												</div>																									
											</div>
										</div>	
									</div>	
									<!--Ini 2ªEtapa -->	
		                            <div class="tab-pane" id="2etapa">
										<h5 class="info-text"> Preencha os campos obrigatórios(*)</h5>
		                                <div class="form-check row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-6">
													<a class="form-check-input choice" href="#pf" data-toggle="tab">
														<div class="card card-checkboxes card-hover-effect">
															<i class=""></i>
															<p>Pessoa Física</p>
														</div>
													</a>
		                                        </div>
		                                        <div class="col-sm-6">
													<a class="form-check-input choice" href="#pj" data-toggle="tab">
														<div class="card card-checkboxes card-hover-effect">
															<i class=""></i>
															<p>Pessoa Jurídica</p>
														</div>
													</a>
		                                        </div>
		                                    </div>
		                                </div>			
										<div class="tab-content">
											<div class="tab-pane" id="pf">
												<div class="row">
													<div class="col-sm-12">
														<h5 class="info-text"> Are you living in a nice area? </h5>
													</div>
													<div class="col-sm-7 col-sm-offset-1">
														<div class="form-group">
															<label>Street Name</label>
															<input type="text" class="form-control" placeholder="5h Avenue">
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<label>Street Number</label>
															<input type="text" class="form-control" placeholder="242">
														</div>
													</div>
													<div class="col-sm-5 col-sm-offset-1">
														<div class="form-group">
															<label>City</label>
															<input type="text" class="form-control" placeholder="New York...">
														</div>
													</div>
													<div class="col-sm-5">
														<div class="form-group">
															<label>Country</label><br>
															<select name="country" class="form-control">
																<option value="Afghanistan"> Afghanistan </option>
																<option value="Albania"> Albania </option>
																<option value="Algeria"> Algeria </option>
																<option value="American Samoa"> American Samoa </option>
																<option value="Andorra"> Andorra </option>
																<option value="Angola"> Angola </option>
																<option value="Anguilla"> Anguilla </option>
																<option value="Antarctica"> Antarctica </option>
																<option value="...">...</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="pj">
												<div class="row">	
													<div class="col-sm-12">
														<h5 class="info-text"> Are you living in a nice area? </h5>
													</div>
													<div class="col-sm-7 col-sm-offset-1">
														<div class="form-group">
															<label>Street Name</label>
															<input type="text" id="" name="" class="form-control" placeholder="5h Avenue">
														</div>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<label>Street Number</label>
															<input type="text" class="form-control" placeholder="242">
														</div>
													</div>
													<div class="col-sm-5 col-sm-offset-1">
														<div class="form-group">
															<label>City</label>
															<input type="text" class="form-control" placeholder="New York...">
														</div>
													</div>
													<div class="col-sm-5">
														<div class="form-group">
															<label>Country</label><br>
															<select name="country" class="form-control">
																<option value="Afghanistan"> Afghanistan </option>
																<option value="Albania"> Albania </option>
																<option value="Algeria"> Algeria </option>
																<option value="American Samoa"> American Samoa </option>
																<option value="Andorra"> Andorra </option>
																<option value="Angola"> Angola </option>
																<option value="Anguilla"> Anguilla </option>
																<option value="Antarctica"> Antarctica </option>
																<option value="...">...</option>
															</select>
														</div>
													</div>

												</div>
											</div>		
										</div>				
									</div>		
									<!--Ini 3ªEtapa -->													
		                            <div class="tab-pane" id="3etapa">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Are you living in a nice area? </h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Street Name</label>
		                                            <input type="text" id="streetadress" name="streetadress" class="form-control" placeholder="5h Avenue">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Street Number</label>
		                                            <input type="text" class="form-control" placeholder="242">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>City</label>
		                                            <input type="text" class="form-control" placeholder="New York...">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Country</label><br>
		                                            <select name="country" class="form-control">
		                                                <option value="Afghanistan"> Afghanistan </option>
		                                                <option value="Albania"> Albania </option>
		                                                <option value="Algeria"> Algeria </option>
		                                                <option value="American Samoa"> American Samoa </option>
		                                                <option value="Andorra"> Andorra </option>
		                                                <option value="Angola"> Angola </option>
		                                                <option value="Anguilla"> Anguilla </option>
		                                                <option value="Antarctica"> Antarctica </option>
		                                                <option value="...">...</option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
										<button type="submit" class="btn btn-finish btn-fill btn-warning btn-wd" name='finish'>
											{{ __('Register') }}
										</button>
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
								
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->
</body>

		
		
		

		
		
		
		
		

		
	<!--   Core JS Files   -->
	<script src="{{URL::to('cadastro.assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::to('cadastro.assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::to('cadastro.assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{URL::to('cadastro.assets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{URL::to('cadastro.assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
