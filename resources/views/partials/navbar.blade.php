<div class="navbar-custom">


    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-1">
					<h2 class="heading-section">Shop Online</h2>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="index.html">Vatilab</a>
				</div>
				<div class="col d-flex justify-content-end">
					@if (session('success'))

					<div class="alert alert-success">
						{{session('success')}}
					</div>
						
					@endif
					<div class="social-media">
		    		<p class="mb-0 d-flex">
						<a href="#" class="d-flex align-items-center justify-content-center"><span><i class="fa fa-shopping-cart"> Panier</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            </li>
	        	<li class="nav-item"><a href="/products" class="nav-link">Produits</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Promotion</a></li>
              <li class="nav-item"><a href="{{ Route('products.create')}}" class="nav-link">Nouveau</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>
</div>
