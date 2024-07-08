<!doctype html>
<!-- calculatrice.php -->
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title> Une petite calculatrice </title>
		<link rel= "stylesheet" href="style.css"/>
		
		
	</head>
	
	<?php 
	/* Écrivez ici les fonctions php */
	
	function calculatrice ($nb1,$nb2,$choix)
	{
		if(is_numeric($nb1) && is_numeric($nb2))
		{
			switch ($choix)
			{ 
				case 'plus' : 
					$res = $nb1+$nb2;
					break;
					
				case 'moins' : 
					$res = $nb1-$nb2;
					break;
					
				case 'multiplier' : 
					$res = $nb1*$nb2;
					break;
					
				case 'division' : 
					if ($nb2 > 0)
						$res = $nb1/$nb2;
					else 
						echo "on ne peut pas diviser par 0 ou un nombre qui lui est inferieur dans cette calculatrice ";
					break;
					
				}
				return $res;
			}
				
			else 
				echo "Erreur, au moins l'un d'entre eux n'est pas un nombre <br/>";
}
	
	
	?>
	<h1> Calculatrice </h1>
	
	<p>Une calculatrice minimaliste pour pratiquer la programmation web ! <br> Vous ne pouvez faire qu'une operation entre 2 nombres </p>
	
	<div>
			Entrez deux nombres et l'opération choisie : <br> <br>
			
		<form name ="calculatrice" method="get" action="calculatrice.php" > 
		
		nombre1 : <input type="text" name="nombre1"  placeholder="<?php if (isset($_GET["nombre1"])) { echo $_GET["nombre1"];} else echo "saisissez ici" ;?>"/> <br/>
		
		<select name="choix">
					<option value="plus" SELECTED>+</option>
					<option value="moins">-</option>
					<option value="multiplier">*</option>
					<option value="division">/</option>
		</select> <br/>
		
		nombre2 : <input type="text" name="nombre2" placeholder="<?php if (isset($_GET["nombre2"])) { echo $_GET["nombre2"];} else echo "saisissez ici" ;?>"/> <br> <br>
		
		<input type="submit" name="action" value="calculer" /> <br> 
		
		</form>
		
		<p class="par"> <?php  
		
		
				if(isset($_GET["action"]))
				{
					$resultat = calculatrice ($_GET["nombre1"],$_GET["nombre2"], $_GET["choix"]);
					
					if(isset($_GET["nombre1"]) && isset($_GET["nombre2"]) && isset($_GET["choix"]))
					{
						echo "Le résultat de ".$_GET["nombre1"]. " ". $_GET["choix"]. " ".$_GET["nombre2"]. " est " . $resultat;
					}		
				}
		
			?>
			</p>
	</div>
	
		 
			
		<p id="pa" > Les paramétres transmis au server sont : <br/> <?php 
					foreach ($_GET as $nom => $valeur)
					{
						echo "$nom = $valeur <br/>";
					}
		?> </p>

	
            
	<body>	
	
	</body>
</html>	
