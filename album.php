<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owl delivery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="tienda/estila.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	

	<header class="bg-warning p-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php">
                    <img id="img" src="imagenes\logo.png" width="180" height="180" alt="Logo" />
                </a>
            </div>
		</div>



        <div class="d-flex align-items-center">
<!-- <div>
<div class="container mt-4">
	<form class="form-inline mt-4 mb-4">
		<div class="input-group">
					<input type="text" class="form-control border-dark" placeholder="Buscar por nombre de producto...">
			<div class="input-group-append">
				<button class="btn btn-outline-dark" type="button">
					<i class="fa fa-search"></i>  Icono de búsqueda 
				</button>
			</div>
		</div>
	</form>
	<div class="row">
         Aquí va el código de los productos 
		 
    </div>
</div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
               <div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">Zapatos Nike</p>
								<span class="precio-producto-carrito">$80</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
		</div>	
    </header>

		
</head>
<body>
        
        <div align="center" class="menú" style=" background-color: #fff; margin: auto;font-family: 'Kalam', cursive; color:black;">
			<a href="index.php"><button class="btn"> Inicio <img src="imagenes/inicio.png" width="30" height="30"/></button></a>
			<a href="album.php"><button class="btn">|&nbsp;&nbsp;&nbsp;&nbsp;Tienda<img src="imagenes/bolsa.png" width="30" height="30"/></button></a>
			<a href="https://megamentes507.blogspot.com"><button class="btn">|&nbsp;&nbsp;&nbsp;&nbsp;Blog<img src="imagenes/blogger.png" width="30" height="30"/></button></a>
            <a href="Nosotros.php"><button class="btn">|&nbsp;&nbsp;&nbsp;&nbsp;Sobre Nosotros<img src="imagenes/sobre-nosotros.png" width="30" height="30"/></button></a>
		</div>
    <br>
			
		<div class="container-items">
			<div class="item">
				
				<div class="info-product">
                <img src="imagenes/Teclado mecanico gamer.jpg" alt="">
                                <h2>Teclado gamer</h2>
                                <p class="price" align="right" >$90.00</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				
				<div class="info-product" id="camion">
				<img src="imagenes/reloj digitan de mesa.jpg" alt="">
                                <h2>Reloj de mesa digital</h2>
                                <p class="price" align="right" >$100.00</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				</figure>
				<div class="info-product">
                <img src="imagenes/Teclado y mause celeste.jpg" alt="">
                                <h2>Teclado y mause celeste</h2>
                                <p class="price" align="right" >$200.00</p>
                                <button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				
				<div class="info-product">
                <img src="imagenes/Alexa.jpg" alt="">
                                <h2>Alexa</h2>
                                <p class="price" align="right" >$100.00</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
                <div class="info-product">
                <img src="imagenes/wathc.jpg" alt="">
                    <h2>Apple Watch</h2>
                    <p class="price" align="right" >$100.00</p>
                <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>

            <div class="item">
                <div class="info-product">
                    <img src="imagenes/espejo_inteligente.jpg" alt="">
                        <h2>Espejo Inteligente</h2>
                        <p class="price" align="right" >$30.00</p>
                    <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>

            <div class="item">
                <div class="info-product">
                    <img src="imagenes/dispensador_dental.jpg" alt="">
                        <h2>Dispensador Dental</h2>
                        <p class="price" align="right" >$30.00</p>
                    <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>

            <div class="item">
                <div class="info-product">
                    <img src="imagenes/Masajeador_facial.jpg" alt="">
                        <h2>Masajeador Facial</h2>
                        <p class="price" align="right" >$20.00</p>
                    <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>

            <div class="item">
                <div class="info-product">
                    <img src="imagenes/bocina.jpg" alt="">
                        <h2>Bocina Portatil</h2>
                        <p class="price" align="right" >$17.99</p>
                    <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>
            
            <div class="item">
                <div class="info-product">
                    <img src="imagenes/gloss.jpg" alt="">
                        <h2>Set de Gloss Shenglam</h2>
                        <p class="price" align="right" >$15.00</p>
                    <button class="btn-add-cart">Añadir al carrito</button>

				</div>
			</div>
		</div>
<script src="tienda/index.js"></script>
	</body>
</html><br><br>
<?php  include("pie.php"); ?>

<style>
/* Globales */
*::after,
*::before,
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a:link, a:visited, a:active {
   text-decoration:none;
   }

#titu{
color:#333;
font-family: Times New Roman;
}

.icon-cart{
    width: 40px;
    height: 40px;
    stroke: #000;
}

.icon-cart:hover{
    cursor: pointer;
}

img{
    max-width: 100%;
}

/* Header */
header{
    display: flex;
    justify-content: space-between;
    padding: 30px 0 40px 0;
}

.container-icon{
    position: relative;
}

.count-products{
    position: absolute;
    top: 55%;
    right: 0;

    background-color: #000;
    color: #fff;
    width: 25px;
    height: 25px;

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

#contador-productos{
    font-size: 12px;
}

.container-cart-products{
    position: absolute;
    top: 50px;
    right: 0;

    background-color: #fff;
    width: 400px;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    border-radius: 10px;
    
}

.cart-product{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.20);

}

.info-cart-product{
    display: flex;
    justify-content: space-between;
    flex: 0.8;
}

.titulo-producto-carrito{
    font-size: 20px;
}

.precio-producto-carrito{
    font-weight: 700;
    font-size: 20px;
    margin-left: 10px;
}

.cantidad-producto-carrito{
    font-weight: 400;
    font-size: 20px;
}

.icon-close{
    width: 25px;
    height: 25px;
}

.icon-close:hover{
    stroke: red;
    cursor: pointer;
}

.cart-total{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 20px;
}

.cart-total h3{
    font-size: 20px;
    font-weight: 700;
}

.total-pagar{
    font-size: 20px;
    font-weight: 900;
}

.hidden-cart{
    display: none;
}

/* Main */
.container-items{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.item{
    border-radius: 10px;
}

.item:hover{
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
}

.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    transition: all .5s;
}

.item figure{
    overflow: hidden;
}

.item:hover img{
    transform: scale(1.2);
}

.info-product{
    padding: 15px 30px;
    line-height: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.price{
    font-size: 18px;
    font-weight: 900;
}

.info-product button{
    border: none;
    background: none;
    background-color: #000;
    color: #fff;
    padding: 15px 10px;
    cursor: pointer;
}

.cart-empty{
    padding: 20px;
    text-align: center;
}


.hidden{
    display: none;
}


/*CONTACTO*/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
.container-form{
    width: 100%;
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 50px;
    margin-top: 90px;
}
.container-form h2{
    margin-bottom: 15px;
    font-size: 35px
}
.container-form p{
    font-size: 17px;
    line-height: 1.6;
    margin-bottom: 30px;
}
.container-form a{
    font-size: 17px;
    display: inline-block;
    text-decoration: none;
    width: 100%;
    margin-bottom: 15px;
    color: black;
    font-weight: 700;
}
.container-form a i{
    color: orange;
    margin-right: 10px;
}
.container-form form .campo, textarea{
    width: 100%;
    padding: 15px 10px;
    font-size: 16px;
    border: 1px solid #dbdbdb;
    margin-bottom: 20px;
    border-radius: 3px;
    outline: 0px;
}
.container-form form textarea{
    max-width: 530px;
    min-width: 530px;
    min-height: 140px;
    max-height: 150px;
}
.container-form .btn-enviar{
    padding: 15px;
    font-size: 16px;
    border: none;
    outline: 0px;
    background: orange;
    color: black;
    border-radius: 3px;
    cursor: pointer;
    transition: all 300ms ease;
}
.container-form .btn-enviar:hover{
    background: #e39403;
}
</style>