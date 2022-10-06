
<!doctype html>
<html lang="en">
  <head>
  	<title>ECC - ENGLISH CONVERSATION CLUB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css1/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(images1/bg_1.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="index.html" class="logo">ECC <span>Since 1999</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/"><span class=""></span> Home</a>
	          </li>
	          <li>
	              <a href="/activitiesend"><span class=""></span> Edit Activities</a>
	          </li>
	          <li>
	              <a href="/posterend"><span class=""></span> Edit Poster</a>
	          </li>
			  <li>
	              <a href="/daftar"><span class=""></span> Registration List</a>
	          </li>
			  <li>
			  <li>
                    <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
				  
	          </li>
	         
            
			 
             
			  
	          </li>
	        </ul>

	       

	        <div class="footer px-4">
	        	<p>
						 
	        </div>

	      </div>

    	</nav>
		
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
	  @yield('isi')
       
      </div>
		</div>

    <script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
  </body>
</html>

