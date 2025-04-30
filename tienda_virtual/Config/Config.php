<?php 
	const BASE_URL = "http://localhost/tienda_virtual";
	//const BASE_URL = "https://abelosh.com/tiendavirtual"; PARA HOSTING

	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	//const DB_PASSWORD = "20dejunio";
	const DB_PASSWORD = "pantera44";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "MXN";

	//Api PayPal
	//SANDBOX PAYPAL
	//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
 	//const IDCLIENTE = "AZhoZBX4jy-TvwBc03jhyZ95lk80D-8w4W8XHJAAl4yQUUO1q2BZi0q_sHTZZfgINMY2yTcgYlFpJExV"; 
	//const SECRET = "EBND1xLrKaNge68MQdWFPDg5YiXX6DQBnpF1qO4ub3aZzL6oY0_wp1AMIIRMbWVT4DRiDCyCGG74boE4";

	const IDCLIENTE = "ASf6rKqErXHO7lCnaaw1KsCqx2zH8MJaNUvW-8fZiWzVTI5UEDy-19iO61pJfozYN8ywRIOQAgTh_vzd"; 
	const SECRET = "ENTig_lMYFnvShRVR5zF-C35bZemLeykW3lTwM9pzS_djdxIhIJc0_C4NP80FRfUMhvO7ZqWeqDeiBA4";



	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Book Bear Libreria Virtual";
	const EMAIL_REMITENTE = "no-reply@jasdan.com";
	const NOMBRE_EMPESA = "Bear Book Libreria Virtual";
	//const WEB_EMPRESA = "www.abelosh.com";
	const WEB_EMPRESA = "www.bearbok.com";

	const DESCRIPCION = "La libreria con los mejores precios.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Calle 3 sur 306, Centro historico de Puebla, 72000 Heroica Puebla de Zaragosa, Pue.";
	const TELEMPRESA = "(+52) 222 196 6885 ";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "bear-book@gmail.com";
	const EMAIL_PEDIDOS = "andrescorona2453@gmail.com"; 
	const EMAIL_SUSCRIPCION = "bear-book@gmail.com";
	const EMAIL_CONTACTO = "bear-book@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	//const CAT_BANNER = "4,5,8";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'bearbook';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 78;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/";
	const INSTAGRAM = "https://www.instagram.com/";
	

 ?>