<?php 
$link = mysqli_connect('67.211.212.227', 'desper95_wp70', ']879SP80)i') or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($link,'desper95_wp70') or die('No se pudo seleccionar la base de datos');

$mi_directorio="/subidas/";
$url_raiz="http://despertadorlavalle.com.ar/subidas/";
$url="http://despertadorlavalle.com.ar/";

$target=$_SERVER['DOCUMENT_ROOT'].$mi_directorio.$_FILES['filen']['name'];
$src=$url_raiz.$_FILES['filen']['name'];

if ($_SERVER['HTTP_REFERER'] == $url_raiz."audios.html") {
	$target=$_SERVER['DOCUMENT_ROOT'].$mi_directorio."audio-"."1".".mp3";
	move_uploaded_file($_FILES['filen']['tmp_name'],$target);
}

if ($_SERVER['HTTP_REFERER'] == $url_raiz."publicidades.html") {
	$src2=$src.".jpg";
	$query = "INSERT INTO publicidades VALUES (NULL,'".$src2."','".$_POST['descripcion']."','".$_POST['posicion']."','".$_POST['url']."')";
	$im = imagecreatefromjpeg($_FILES['filen']['tmp_name']);
	$ime = imagescale($im,300);
	imagejpeg( $ime,$target.".jpg");
}



if ($_SERVER['HTTP_REFERER'] == $url_raiz."periodico.html") {
	$im = new Imagick($_FILES['filen']['tmp_name']."[0]"); 
	$im->setImageFormat("jpeg");
	$thumb= $_SERVER['DOCUMENT_ROOT'].$mi_directorio.$_POST['fecha'].".jpg";
	$im->scaleImage(288,401,1);
	$im->writeImage($thumb);
	$im->clear();
	$im->destroy();
	$urlthumb= $url_raiz.$_POST['fecha'].".jpg";
	$query = "INSERT INTO periodico_online VALUES (NULL,'".$src."','".$_POST['fecha']."','".$urlthumb."')";
	move_uploaded_file($_FILES['filen']['tmp_name'],$target);
}
if ($_SERVER['HTTP_REFERER'] == $url_raiz."youtube-loader.html") {
	$code = substr($_POST['video-url'], -11);
	echo $code."<br>";
	$query = "INSERT INTO videos VALUES (NULL,'".$_POST['video-url']."','".$_POST['posicion']."','"."https://i.ytimg.com/vi/".$code."/mqdefault.jpg"."','".$_POST['titulo']."')";
	echo $query;
}

if ($_SERVER['HTTP_REFERER'] == $url_raiz."facebook-loader.html") {
	$code = substr($_POST['video-url'], -11);
	echo $code."<br>";
	$query = "INSERT INTO facebook VALUES (NULL,'".$_POST['video-url']."','".$_POST['posicion']."','"."https://i.ytimg.com/vi/".$code."/mqdefault.jpg"."','".$_POST['titulo']."')";
	echo $query;
}

    
	
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());
mysqli_close($link);
header('Location: http://despertadorlavalle.com.ar');
?>
<h1>Realizado</h1>
<br>
<a href="http://despertadorlavalle.com.ar/">Ir a pagina Principal</a>