@extends('front.master')
@section('content')
	<section>
		<div class="v3-list-ql">
			<div class="container">
				<div class="row">
					<div class="v3-list-ql-inn">
						<ul>
							<li class="active"><a href="#ld-abour"><i class="fa fa-user"></i> About</a>
							</li>
							<li><a href="#ld-ser"><i class="fa fa-cog"></i> Services</a>
							</li>
							<li><a href="#ld-gal"><i class="fa fa-photo"></i> Gallery</a>
							</li>
							<li><a href="#ld-roo"><i class="fa fa-ticket"></i> Departments</a>
							</li>
							<!--<li><a href="#ld-vie"><i class="fa fa-street-view"></i> 360 View</a>
							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--LISTING DETAILS-->
	<section class="pg-list-1">
		<div class="container">
			<div class="row">
				<div class="pg-list-1-left"> <h3>{{$institute->name}}</h3>					
					<p><b>Address:</b> {{$institute->address}}, Bangladesh.</p>
					<div class="list-number pag-p1-phone">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> {{$institute->phone}}</li>
							<li><i class="fa fa-envelope"></i> {{$institute->email}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="list-pg-bg">
		<div class="container">
			<div class="row">
				<div class="com-padd">
					<div class="list-pg-lt list-page-com-p">
						<!--LISTING DETAILS: LEFT PART 1-->
						<div class="pglist-p1 pglist-bg pglist-p-com" id="ld-abour">
							<div class="pglist-p-com-ti">
								<h3><span>About</span> {{$institute->name}}</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="share-btn">
									<ul>
										<li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a> </li>
										<li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a> </li>
										<li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a> </li>
									</ul>
								</div>
								<p>{{$institute->description}}</p>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 1-->
						<!--LISTING DETAILS: LEFT PART 2-->
						<div class="pglist-p2 pglist-bg pglist-p-com" id="ld-ser">
							<div class="pglist-p-com-ti">
								<h3><span>Services</span> Offered</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="row pg-list-ser">
									<ul>
										@if($institute->restaurant)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/our-restaurants.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Restaurant</h4> </div>
										</li>
										@endif
										@if($institute->hostel > 0)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/ser2.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Hostel</h4> </div>
										</li>
										@endif
										@if($institute->events)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/ser3.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Corporate Events</h4> </div>
										</li>
										@endif
										@if($institute->auditorium > 0)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/audi.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Auditorium Hall</h4> </div>
										</li>
										@endif
										@if($institute->bus > 0)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/bus.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Transport</h4> </div>
										</li>
										@endif
										@if($institute->play_ground)
										<li class="col-md-4">
											<div class="pg-list-ser-p1"><img src="/front/images/services/playground.jpg" alt="" /> </div>
											<div class="pg-list-ser-p2">
												<h4>Play Ground</h4> </div>
										</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 2-->
						<!--LISTING DETAILS: LEFT PART 3-->
						<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-gal">
							<div class="pglist-p-com-ti">
								<h3><span>Photo</span> Gallery</h3> </div>
							<div class="list-pg-inn-sp">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"> <img src="/img/institutes/{{$institute->main_img}}" alt="{{$institute->name}}" style="height:400px !important;width:100%"> </div>
										<div class="item"> <img src="/img/institutes/{{$institute->gallery_img_1}}" alt="{{$institute->name}}" style="height:400px !important;width:100%"> </div>
										<div class="item"> <img src="/img/institutes/{{$institute->gallery_img_2}}" alt="{{$institute->name}}" style="height:400px !important;width:100%"> </div>
									</div>
									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left list-slider-nav" aria-hidden="true"></i> </a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right list-slider-nav list-slider-nav-rp" aria-hidden="true"></i> </a>
								</div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 3-->
						<!--LISTING DETAILS: LEFT PART 4-->
						<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-roo">
							<div class="pglist-p-com-ti">
								<h3><span>Institute</span> Departments</h3> </div>
							<div class="list-pg-inn-sp">
								@foreach ($institute_departments as $department)
									<div class="home-list-pop list-spac list-spac-1 list-room-mar-o">
										<!--LISTINGS IMAGE-->
										<div class="col-md-3"> <img src="/front/images/Dept_Ed.jpg" alt="" style="height:200px"> </div>
										<!--LISTINGS: CONTENT-->
										<div class="col-md-9 home-list-pop-desc inn-list-pop-desc list-room-deta"> <a href="#!"><h3>{{$department->name}}</h3></a>
											<div class="list-room-type list-rom-ami">
												<ul>
													<li>
														<p><b>Amenities:</b> </p>
													</li>
													@if($department->credit > 0)<li><img src="/front/images/icon/a9.png" alt=""> Credit: {{$department->credit}}</li>@endif
													<li><img src="/front/images/icon/a10.png" alt=""> Faculty Member: {{$department->faculty_members}} </li>
													<li><img src="/front/images/icon/a3.png" alt=""> Students: {{$department->students}}</li>
													<li><img src="/front/images/icon/a6.png" alt=""> Computer: {{$department->computer}}</li>
													@if($department->IEEB)<li><img src="/front/images/icon/a2.png" alt=""> Certification: {{$department->IEEB}}</li>@endif
												</ul>
											</div> <span class="home-list-pop-rat list-rom-pric green-bg">Cost: ${{$department->cost}}</span>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						{{--
						<!--END 360 DEGREE MAP: LEFT PART 8-->
						<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-vie">
							<div class="pglist-p-com-ti">
								<h3><span>360 </span> Degree View</h3> </div>
							<div class="list-pg-inn-sp list-360">
								<iframe src="" allowfullscreen></iframe>
							</div>
						</div>
						<!--END 360 DEGREE MAP: LEFT PART 8-->
						--}}
					</div>
					<div class="list-pg-rt">
						<!--LISTING DETAILS: LEFT PART 9-->
						<div class="pglist-p3 pglist-bg pglist-p-com">
							<div class="pglist-p-com-ti pglist-p-com-ti-right">
								<h3><span>Other</span> Informations</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="list-pg-oth-info">
									<ul>
										<li>Hostel <span class="green-bg">{{$institute->hostel}}</span> </li>
										<li>Bus <span>{{$institute->bus}}</span> </li>
										<li>Auditorium <span>{{$institute->auditorium}}</span> </li>
										<li>Play Ground <span>{{$institute->play_ground}}</span> </li>
										<li>Restaurant <span>{{$institute->restaurant}}</span> </li>
										<li>Yearly Events <span>{{$institute->events}}</span> </li>
										<li>Owership Type <span class="green-bg">{{$institute->ownership_type}}</span> </li>
									</ul>
								</div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 9-->
						<!--LISTING DETAILS: LEFT PART 10-->
						<div class="list-mig-like">
							<div class="list-ri-spec-tit">
								<h3><span>You might</span> like this</h3> </div>
							@foreach($institutes as $randomInstitute)
								<a href="/institute/{{$randomInstitute->id}}">
									<div class="list-mig-like-com">
										<div class="list-mig-lc-img"> <img src="/img/institutes/{{$randomInstitute->main_img}}" alt="" /><!-- <span class="home-list-pop-rat list-mi-pr">$720</span> --></div>
										<div class="list-mig-lc-con">
											<h5>{{$randomInstitute->name}}</h5>
											<p>{{$randomInstitute->address}}</p>
										</div>
									</div>
								</a>
							@endforeach
						</div>
						<!--END LISTING DETAILS: LEFT PART 10-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--QUOTS POPUP-->
	
@endsection