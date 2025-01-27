<?php
session_start(); 

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	
	<link rel="icon" href="LOGO.png" type="image/png" sizes="16x16">
    	
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=EB+Garamond:ital,wght@0,500;1,500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
       
       body{
          font-family: "Dosis", sans-serif;
          font-optical-sizing: auto;
          font-weight: weight;
          font-style: normal;
          margin: auto;
          align-items: center;
        }
        .logo1{
            height: 50px;
            border-radius: 3px;
            margin-right: 100px;
        }
        li a {
          text-transform: uppercase;

        }
        .navbar-nav li a:hover , .dropdown-menu li a:hover{
          color: rgb(110, 177, 236);
          text-decoration: underline;

          
         }
         .container {
          border-radius: 7px;
         }
         .containerHeader{
          margin: 100px 0px;
          display: flex;
         justify-content: center;
         }
         p {
          font-size: 24px;
          color: #ffffff;
         }
         .card-img-overlay {
          /* Asegúrate de que el overlay tenga un padding adecuado si es necesario */
          padding: 20px;
        }

        /* Ajusta el botón si es necesario */
        .btn-info {
          white-space: normal; /* Permite que el texto del botón se ajuste según sea necesario */
        }
        .parrafos{
          color: black;
          font-size: 20px;
        }
        .icono{
          font-size: 100px;
          color: black;
        }
        .carousel-indicators .circular-button {
          border-radius: 50%; /* Hace el botón circular */
          width: 15px; /* Establece el ancho del botón */
          height: 15px; /* Establece la altura del botón */
          margin-right: 5px;
          margin-left: 5px;
          background-color: #fff; /* Color de fondo del botón */
      }

      .carousel-indicators .active {
          background-color: #000; /* Color de fondo del botón activo */
      }
     .btn-wsp{
      position: fixed;
      width: 55px;
      height: 55px;
      border-radius: 50px;
      background: rgb(119, 255, 0);
      color: white;
      line-height: 55px;
      bottom: 30px;
      right: 30px ;
      text-align: center;
      font-size: 30px;
      box-shadow: 0px 1px 10px rgb(0,0,0,0.3);
      z-index: 100;     
    }
      .btn-wsp:hover{
        text-decoration: none;
        color: rgb(102, 255, 0);
        background: rgb(156, 203, 248);
        animation: shake 1s;
        animation-iteration-count: infinite;

      }
    
      @keyframes shake{
        0% { transform: rotate(0deg); }
        0% { transform: translateY(0) }
        25% { transform: translateY(5px) }
        50% { transform: translateY(-5px) }
        75% { transform: translateY(5px) }
        100% { transform: translateY(0) }

}

 
        
         
          
          
        
        
         
         
    </style>

	</head>
	<body >
        <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #f6f2f2">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img class="logo1" src="logo.png"></a>
         </div>
      </nav>
		
		
	<section class="ftco-section" style="margin-top:40px">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(otari.png);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4" style="font-family: Quicksand; color:beige">PONTE EN CONTACTO CON NOSOTROS</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="envioFormulario.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name" style="font-family: Quicksand; color:beige" >NOMBRE</label>
													<input type="text" class="form-control" name="NAME" required placeholder="Nombre">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email" style="font-family:Quicksand ; color:beige" >Email </label>
													<input type="email" class="form-control" name="EMAIL" required placeholder="Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="subject" style="font-family:Quicksand ; color:beige
													">TELEFONO</label>
													<input type="text" class="form-control" name="PHONE" required placeholder="Teléfono">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="subject" style="font-family:Quicksand ; color:beige
													">TEMA</label>
													<input type="text" class="form-control" name="SUBJECT" required placeholder="Tema">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#" style="font-family:Quicksand ; color:beige">MENSAJE</label>
													<textarea name= "MESSAGE" required class="form-control" cols="30" rows="4" placeholder="Mensaje"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group" >
                                               
                                                        <div class="g-recaptcha" data-sitekey="6Ld0MpUpAAAAAHdZVeuWfQytjoDEc2wb5b5KHJfF"></div>


 													<input type="submit" value="Enviar Mensaje" class="btn btn-primary" class="g-recaptcha">
                                                  <?php if(isset($_SESSION['message'])) {
                                                    $message = $_SESSION['message']; 
                                                    $messageType = $_SESSION['message_type']; // 'success' o 'error'
                									if($messageType=='success'){
                                                    echo "<div class='success'>{$_SESSION['message']}
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='26' height='26' fill='currentColor' class='bi bi-envelope' viewBox='0 0 16 16'>
  <path d='M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z'/>
</svg>

                                             
                                                    </div>";} else
                                                       echo "<div class='error'>{$_SESSION['message']}
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='26' height='26' fill='currentColor' class='bi bi-envelope-exclamation' viewBox='0 0 16 16'>
  <path d='M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z'/>
  <path d='M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0m0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0'/>
</svg>


                                             
                                                    </div>";
  


                                                    unset($_SESSION['message']);
                                                    unset($_SESSION['message_type']);
                                                    }?>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<p  style="font-family:Quicksand; font-size: 40px; text-align: center; color: black;">Sigue a Vindaloo</p>
	  
		<div class="logoRedes">
		 
	  
	  <a style="color: black; margin-left:20px" href="https://www.instagram.com/vindaloo_estudios/">
		   <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
				<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
			  </svg>  
			</a>
			<a style="overflow: hidden; color: black;" href="https://www.youtube.com/channel/UCUZjHlFE0Qs_8OQlWTQg5xg">
			  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
				<path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
			  </svg>     
			</a>
			<a style="color: black;" href="https://open.spotify.com/album/6tSHrYs9wdrAVG8E8JItrL?si=zT5FjBu9QU-znqQybgVaaA">
			  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
				<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
			  </svg>
			</a>
	  
			  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-vimeo" style="color: black;" viewBox="0 0 16 16">
				<path d="M15.992 4.204c-.071 1.556-1.158 3.687-3.262 6.393-2.175 2.829-4.016 4.243-5.522 4.243-.933 0-1.722-.861-2.367-2.583L3.55 7.523C3.07 5.8 2.556 4.94 2.007 4.94c-.118 0-.537.253-1.254.754L0 4.724a209.56 209.56 0 0 0 2.334-2.081c1.054-.91 1.845-1.388 2.373-1.437 1.243-.123 2.01.728 2.298 2.553.31 1.968.526 3.19.646 3.666.36 1.631.756 2.446 1.186 2.445.334 0 .836-.53 1.508-1.587.671-1.058 1.03-1.863 1.077-2.415.096-.913-.263-1.37-1.077-1.37a3.022 3.022 0 0 0-1.185.261c.789-2.573 2.291-3.825 4.508-3.756 1.644.05 2.419 1.117 2.324 3.2z"/>
			  </svg>    
			</div>
		
			<div style="display: flex; justify-content: center; align-items: center;">
			  <div class="zoom2"> <a href="index.html"> <img class="logoFooter" src="LOGO.png" alt="" > </a> 
			  </div>
			</div>
                   <p style="font-size:15px ; font-family: Quicksand; text-align: center; margin-bottom: 90px; color: #d1d1d1; ">
          vindalooestudio@gmail.com <br> <br>
          650861056
             </p>
         <a href="https://api.whatsapp.com/send?phone=34650861056&text=Hola, me gustaría obtener más información." class="btn-wsp" target="_blank">
      <i class="bi bi-whatsapp"></i>
         </a>
		
	 <script src='https://www.google.com/recaptcha/api.js'></script>



	</body>
</html>

