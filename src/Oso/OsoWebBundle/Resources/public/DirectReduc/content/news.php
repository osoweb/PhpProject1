<html>
<body>


<a href="?go=news">Retour à l'actualité</a>
<hr>


<?PHP
error_reporting (E_ALL ^ E_NOTICE);
 $number=2;
if($_GET['go'] == "" or $_GET['go'] == "news"){
   include("news/show_news.php");
}
?>



</body>
</html>