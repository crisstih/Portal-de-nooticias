-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 04:35:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `autor` varchar(200) NOT NULL,
  `copete` varchar(500) NOT NULL,
  `cuerpo` varchar(1000) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `noticia_estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `fecha`, `autor`, `copete`, `cuerpo`, `imagen`, `noticia_estado`) VALUES
(14, 'Lionel Messi ganó su octavo Balón de Oro y sigue haciendo historia en el fútbol mundial', '2023-10-31', 'Cristian', 'Las palabras de Messi tras finalizar la gala del Balón de Oro:', '“Soy un agradecido de la carrera que tuve y que me tocó vivir. Tras haber ganado la Copa América y el Mundial me cerraron muchas cosas, como el sueño de ser campeón del mundo y de levantarme de los tropiezos. Tenía todo, pero me faltaba el más importante. Jugar al fútbol es lo que me gustó desde antes de esa foto (de pequeño con una copa) y por eso decía que estoy disfrutando, como si fueran los últimos años.\r\nAcerca de la mención a Maradona en el estrado, Leo remarcó: “Era lo que le gustaba a él, el ambiente futbolero. En las últimas galas estuvo presente y venía más seguido porque anteriormente por distintas situaciones no estaba. Que estuviera Diego presente en estos eventos era un plus muy lindo”.', '1698713916_b4aa248f0039b917e67b.png', 1),
(15, 'Por la falta de nafta, algunos gremios amenazan con medidas de fuerza y se agrava la crisis', '2023-10-31', 'Cristian', 'Desde la mañana del viernes se registran faltantes de nafta, gasoil y otros combustibles en distintas estaciones de servicio de la Argentina.', 'El sindicato de petroleros de Río Negro, Neuquén y La Pampa anunció un paro de las actividades si el miercoles no se normaliza la situación en los surtidores. En tanto, una decena de sociedades rurales bonaerenses llamaron a los productores a movilizarse en las rutas.\r\n', '1698718648_2bb71726a4fa48f242a0.png', 1),
(16, 'Hackearon la web de Sergio Massa y dejaron varios mensajes misteriosos', '2023-10-31', 'Cristian', 'La semana pasada la web oficial del Gobierno argentina.gob.ar fue víctima de un ataque informático. Ahora el mismo procedimiento se hizo en la página del candidato a presidente Sergio Massa.', '“Directed by Free Kakers Group” es el título que se pudo leer en la página oficial personal del Ministro de Economía y candidato Sergio Massa. Este ataque al sitio web corresponde a un defacement, un tipo de atentado digital en el que ciberdelincuentes aprovechan las vulnerabilidades de algunos sitios para modificar, total o parcialmente, el aspecto y el contenido.\r\n', '1698720957_f0869d7f653a5f03204a.png', 1),
(17, 'Estafas con códigos QR: así funciona el engaño más habitual y consejos para no caer en la trampa', '2023-10-31', 'Cristian', 'El QR Code Jacking es el fraude con QR más difícil de detectar: se trata de una técnica utilizada por ciberdelincuentes para suplantar o redirigir códigos legítimos con el objetivo de robar información personal y datos personales.', 'La vida en QR\r\nLos códigos QR (Quick Response) fueron inventados en 1994 por la empresa japonesa Denso Wave para etiquetar piezas de automóviles. Con pocos años de vida, cambiaron la forma en que interactuamos con la información y las empresas.\r\n\r\nEstos rompecabezas bidimensionales, que se pueden escanear fácilmente con la cámara de un teléfono inteligente, permiten acceder a una variedad de contenido de forma rápida y sin problemas. Desde enlaces a sitios web hasta descargas de aplicaciones y detalles de contacto, los QR simplificaron nuestras vidas de muchas maneras.\r\n\r\nPero su uso trae riesgos significativos. Los estafadores ya encontraron formas ingeniosas de explotarlos para llevar a cabo engaños y fraudes digitales que pueden robar tus datos y tus ahorros.\r\n\r\nLos engaños con QR más comunes\r\nExisten diferentes maneras de realizar estafas con QR. Para evitar caer en ellas, es necesario conocerlas:\r\n\r\nCódigos QR Falsos\r\nEn este caso, los estafadores crean códigos QR falsos que parec', '1698721459_ec54685d367ea52b3dad.png', 1),
(18, 'Una joven se puso a llorar en TikTok por la monogamia y sus seguidores la destrozaron', '2023-10-31', 'Cristian', 'Después de las declaraciones de la joven, se generó un polémico debate entre los usuarios.', 'Las redes sociales suelen ser una gran vía para el descargo de emociones ante cualquier situación de angustia o enojo. En esta ocasión, una influencer llamada “DiDi R” se puso a llorar frente a cámara por la tristeza que le genera una insólita razón: no está de acuerdo con la monogamia.\r\n\r\nAnte la polémica confesión de la joven tiktoker, los usuarios aprovecharon para dejar en los comentarios una dura respuesta.\r\n\r\n“Lloro porque nunca he podido ser fiel a pesar de que ame con todo mi corazón”, reveló la chica que también se dedica a hacer música. En una imagen posterior del mismo clip, se ve una foto de ella sonriente en la que adjuntó un texto que despertó la polémica: “Yo en una relación abierta”.\r\n\r\n“Es lo mejor”, asegura aunque no todos sus seguidores están de acuerdo. El video se hizo viral y llegó a acumular más de 800 mil visualizaciones, por lo cual también le llegaron miles de comentarios. Varios de usuarios aprovecharon para dejarle en claro su desacuerdo.\r\n\r\n“Cuando amas con', '1698722094_d93a359c506d0e6cf7e2.png', 1),
(19, 'Insólito: un hincha de Boca vendió el objeto más preciado de su hijo para ir a la final de Copa Libe', '2023-11-01', 'Cristian', 'El partido entre el Xeneize y el Fluminense se jugará el sábado en el Maracaná y las calles de Río de Janeiro ya se llenan de fanáticos del equipo argentino.', 'El pasaje a Brasil, la estadía en Río de Janeiro y la entradas resultan muy caras, sobre todo con la situación económica de la Argentina. Sin embargo, miles de fanáticos encuentran estrategias para acompañar al club de sus amores en un encuentro histórico.\r\n\r\nUn hincha de Boca habló con TyC Sports desde Copacabana y explicó cómo hizo para viajar: “Vendí la Play de mi hijo”.\r\n\r\nEl periodista le preguntó de qué cuadro era el hijo y contó el verdadero motivo de por qué le sacó la consola de videojuegos, su objeto más preciado: “Me duele decirlo, pero es gallina por el abuelo. Por gallina, que lo mire por tele”.\r\n\r\n', '1698808992_23a14434554897b3a559.png', 1),
(20, 'Joe Biden firmó una orden ejecutiva para controlar el desarrollo de sistemas de inteligencia artific', '2023-11-01', 'Cristian', 'El documento obliga a las empresas a notificar los avances de esta tecnología que supongan un riesgo nacional y buscará combatir los casos de fraude y engaño mediante el uso de la IA', 'El presidente Estados Unidos, Joe Biden, firmó una orden ejecutiva para controlar el desarrollo de sistemas de inteligencia artificial y su aplicación en todos los sectores de la sociedad ante los riesgos que esta nueva tecnología plantea.\r\n\r\n“Necesitamos controlar esta tecnología y no hay forma de evitarlo”, explicó Biden. Y calificó la orden ejecutiva como la acción más significativa adoptada por cualquier gobierno del mundo hasta el momento, lo que permitirá a Estados Unidos ser el líder y modelo que otros países seguirán para controlar el desarrollo de IA.\r\n\r\nEl presidente norteamericano había declarado en la Casa Blanca que la IA es la tecnología más trascendental de la historia reciente, con aplicaciones a todos los campos de la ciencia, la economía y la sociedad, pero que también presenta muchos riesgos, por lo que tiene que ser controlada.\r\n\r\n“Ya que los desafíos y las oportunidades de la IA son globales, vamos a mantener el progreso del liderazgo estadounidense globalmente”, d', '1698855573_233c642283d2a042d2f0.png', 1),
(21, 'Threads debería cambiar de nombre tras una amenaza de demanda por robo de marca', '2023-11-01', 'Cristian', 'Una empresa británica acusa a la estadounidense de usar ilegalmente la denominación de la red social lanzada este año. Anticipan una batalla del estilo David y Goliat.', 'Meta, el conglomerado que reúne a Facebook, Instagram y Facebook, podría verse obligado a cambiar el nombre de su flamante red social Threads, en el caso de que avance la demanda en el Reino Unido por parte de una compañía que la acusa de usar esa marca en forma ilegal. Según un informe de Business Insider, los abogados de la firma británica Threads Software Limited ya se comunicaron con la tecnológica estadounidense para que deje de usar esa denominación.\r\n\r\nUn nuevo David y Goliat: ¿Threads cambiará de nombre?\r\nEn una instancia previa a una orden judicial, la mencionada empresa ha exigido a Meta que deje de usar el nombre Threads, argumentando que ellos son los propietarios de la marca. De acuerdo a los reportes, le ha dado a la estadounidense un plazo de 30 días.\r\n\r\nLa firma del Reino Unido registró la marca Threads en el año 2012 para su servicio de mensajería, que reúne tuits, correros electrónicos y llamadas de voz. Por su parte, la compañía de Mark Zuckerberg lanzó la red social', '1698855838_29c01ef1867c90f30c85.png', 1),
(22, 'Presentaron una nueva forma de estar conectado con lo que pasa en tu hogar todo el día', '2023-11-02', 'Cristian', 'Personal lanzó una cámara WiFi para todos los clientes que quieran seguir conectados con lo que más les importa en tiempo real.', 'Los hogares conectados a través de Internet of Things (IoT) representan una revolución en la forma en que interactuamos con nuestros entornos domésticos. Gracias a la interconexión de dispositivos y sensores a través de la red, los hogares inteligentes pueden ofrecer una mayor comodidad, eficiencia y seguridad.\r\n\r\nLa posibilidad de controlar y monitorear dispositivos y sistemas de manera remota a través de aplicaciones móviles y asistentes de voz está redefiniendo la experiencia en el hogar, brindando a los clientes un mayor control y personalización de su entorno. En este contexto, Personal lanzó una novedad en la categoría Smarthome, se trata de una cámara WiFi que se vincula a la aplicación “Personal Smarthome”.\r\n\r\nA través de esta cámara, el cliente puede visualizar en tiempo real todo lo que sucede en su casa a través de imágenes de video. Además, también puede recibir mensajes de alerta personalizados y mantenerse conectado con su hogar en todo momento.\r\n\r\nEl dispositivo está dis', '1698892238_4241f0a3147ea1c5e1bd.png', 1),
(23, 'Alerta Android: hay una docena de apps maliciosas que tenés que desinstalar', '2023-11-02', 'Cristian', 'Una de las herramientas detectadas acumula más de 1 millón de descargas en dispositivos con Android. Todas infectan los equipos con un molesto virus que arroja anuncios invasivos.', 'Una docena de aplicaciones para Android fueron eliminadas por Google de su tienda tras las advertencias de especialistas en ciberseguridad. Según notaron los expertos, esas herramientas —que en conjunto acumulan más de 2 millones de descargas— contienen un molesto adware, un programa malicioso que inunda los dispositivos con anuncios publicitarios. Si bien esas apps fueron expulsadas de la Play Store, la intrusión se mantiene activa en los dispositivos en donde fueron instaladas previamente.\r\n\r\nGoogle elimina 12 aplicaciones maliciosas que estorban a los usuarios de Android\r\nSi bien las campañas de adware son habituales y en muchos casos logran colarse en las tiendas oficiales, en este caso preocupa la popularidad de algunas aplicaciones apuntadas en el reporte. Una de ellas, denominada Super Skibydi Killer, tenía en Google Play más de 1 millón de descargas. Otras también mencionadas, Agent Shooter y Rubber Punch 3D, reunían 500.000 instalaciones cada una.\r\n\r\nLos primeros informes y al', '1698892433_d9ca9a41753c6eab9886.png', 1),
(24, 'El plantel de Boca sufrió un insólito problema en su llegada a Río de Janeiro', '2023-11-02', 'Cristian', 'El Xeneize afrontó un inesperado inconveniente en su llegada a la ciudad brasileña y ya trabajan para resolverlo.', 'A las 18.30 de este miércoles, Boca aterrizó en Río de Janeiro para la final de la Copa Libertadores ante Fluminense. La expectativa es enorme y los hinchas esperan al plantel en la puerta del hotel de concentración. Sin embargo, la delegación se retrasó por un motivo insólito: a la hora de juntar sus pertenencias, la utilería detectó que le faltaban cinco bolsones.\r\n\r\nLeé también: Estaba en la lista, pero no se subió al avión: quién es el jugador de Boca que no pudo viajar a Río de Janeiro\r\n\r\nDebido a este inconveniente, los jugadores y el cuerpo técnico emprendieron viaje hacia el hotel en Barra de Tijuca, pero los utileros se quedaron en el aeropuerto para resolver este problema. Por el momento no hay mayores precisiones de dónde podrían estar las pertenencias del equipo.\r\n\r\nSegún pudo averiguar TN, los responsables de la delegación están haciendo las gestiones para determinar qué fue lo que pasó. Por el momento, no se puede hablar de un robo porque los bolsos podrían haber quedado ', '1698894959_2fc3681e3b1803e3336d.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `usuario`, `pass`, `estado`) VALUES
(1, 'cristian', 'diaz', 'diazkristian23@gmail.com', 'cristian', '$2y$10$aUTIKkpOZ9nTf4QD2W.cTO1CXiKmdzAfCcrnF.kSmEaJu1qdp4//.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
