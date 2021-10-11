<?php
include_once("maLibSQL.pdo.php");

function insertForm($prenom, $nom, $gender, $date_de_naissance,$email, $poids, $taille,$ville, $code_postal,  $fumeur, $diabetique, $hypertension, $tension_arterielle_systolique, $cholesterol, $cholesterol_hdl, $embolie_pulmonaire_annee, $angine_de_poitrine_annee, $insuffisance_cardiaque_annee, $accident_vasculaire_cerebral_annee, $infarctus_annee, $arterite_des_membres_inferieurs_annee, $description)
{
	$embolie_pulmonaire_annee = $embolie_pulmonaire_annee == null ? "NULL" : "'$embolie_pulmonaire_annee'";
	$angine_de_poitrine_annee = $angine_de_poitrine_annee == null ? "NULL" : "'$angine_de_poitrine_annee'";
	$insuffisance_cardiaque_annee = $insuffisance_cardiaque_annee == null ? "NULL" : "'$insuffisance_cardiaque_annee'";
	$accident_vasculaire_cerebral_annee = $accident_vasculaire_cerebral_annee == null ? "NULL" : "'$accident_vasculaire_cerebral_annee'";
	$infarctus_annee = $infarctus_annee == null ? "NULL" : "'$infarctus_annee'";
	$arterite_des_membres_inferieurs_annee = $arterite_des_membres_inferieurs_annee == null ? "NULL" : "'$arterite_des_membres_inferieurs_annee'";
	$description = $description == null ? "NULL" : "'$description'";

	$SQL = "INSERT INTO info_form(prenom,nom,gender,date_de_naissance,email,poids,taille,fumeur,diabetique,hypertension,tension,cholesterolTotal,cholesterolHDL,
	emboliePulmonaire,anginePoitrine,insuffisanceCardiaque,avc,infarctus,arterite,details,ville,codePostal) 
	VALUES('$prenom','$nom','$gender','$date_de_naissance','$email','$poids','$taille','$fumeur','$diabetique','$hypertension','$tension_arterielle_systolique','$cholesterol',
	'$cholesterol_hdl',$embolie_pulmonaire_annee,$angine_de_poitrine_annee,$insuffisance_cardiaque_annee,
	$accident_vasculaire_cerebral_annee,$infarctus_annee,$arterite_des_membres_inferieurs_annee,$description,'$ville',
	'$code_postal')";
	$id_info_form = SQLInsert($SQL);
	return $id_info_form;
}
