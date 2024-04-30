<!-- navigation -->
<header class="navigation">
	<nav class="navbars navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<div class="nav-row">
				<a class="navbar-brand" href="{{ route('home') }}">
					<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset('/front/images/logos.png') }}" alt="Wallet">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="">Services</a></li> -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Services
							</a>
							<div class="dropdown-menu" aria-labelledby="servicesDropdown">
								<a class="dropdown-item" href="{{ route('design') }}">UI/UX Design</a>
								<a class="dropdown-item" href="{{ route('webapp')}}">Web App Development</a>
								<a class="dropdown-item" href="{{ route('mobileapp') }}">Mobile Apps Development</a>
								<a class="dropdown-item" href="#">Unity Development</a>
							</div>
						</li>
						<!-- <li class="nav-item"><a class="nav-link" href="">Our Team</a></li> -->
						<li class="nav-item"><a class="nav-link " href="{{ route('blog') }}">Blog</a></li>
					</ul>
					<div class="button_module">
						<a href="{{ route('contact') }}" class="default-btn">Contact Us<span style="top: 50px; left: 118.953px;"></span></a>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>

