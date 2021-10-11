<?php
session_start();
include_once("modele.php");
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {

    $prenom = validerPOST("firstname");
    $nom = validerPOST("lastname");
    $gender = validerPOST("gender");
    $date_de_naissance = validerPOST("date_de_naissance");
    $email = validerPOST("email");

    $ville = validerPOST("ville");
    $code_postal = validerPOST("code_postal");
    
    $poids = validerPOST("poids");
    $taille = validerPOST("taille");

    $fumeur = validerPOST("fumeur");
    $diabetique = validerPOST("diabetique");
    $hypertension = validerPOST("hypertension");

    $tension_arterielle_systolique = validerPOST("tension_arterielle_systolique");
    $cholesterol = validerPOST("cholesterol");
    $cholesterol_hdl = validerPOST("cholesterol_hdl");

    $embolie_pulmonaire_annee = null;
    if ($embolie_pulmonaire = validerPOST("embolie_pulmonaire")) {
        $embolie_pulmonaire_annee = validerPOST("embolie_pulmonaire_annee");
    }

    $angine_de_poitrine_annee = null;
    if ($angine_de_poitrine = validerPOST("angine_de_poitrine")) {
        $angine_de_poitrine_annee = validerPOST("angine_de_poitrine_annee");
    }

    $insuffisance_cardiaque_annee = null;
    if ($insuffisance_cardiaque = validerPOST("insuffisance_cardiaque")) {
        $insuffisance_cardiaque_annee = validerPOST("insuffisance_cardiaque_annee");
    }

    $accident_vasculaire_cerebral_annee = null;
    if ($accident_vasculaire_cerebral = validerPOST("accident_vasculaire_cerebral")) {
        $accident_vasculaire_cerebral_annee = validerPOST("accident_vasculaire_cerebral_annee");
    }

    $infarctus_annee = null;
    if ($infarctus = validerPOST("infarctus")) {
        $infarctus_annee = validerPOST("infarctus_annee");
    }

    $arterite_des_membres_inferieurs_annee = null;
    if ($arterite_des_membres_inferieurs = validerPOST("arterite_des_membres_inferieurs")) {
        $arterite_des_membres_inferieurs_annee = validerPOST("arterite_des_membres_inferieurs_annee");
    }

    $description = validerPOST("description");

    insertForm($prenom, $nom, $gender, $date_de_naissance,$email, $poids, $taille,$ville, $code_postal, $fumeur, $diabetique, $hypertension, $tension_arterielle_systolique, $cholesterol, $cholesterol_hdl, $embolie_pulmonaire_annee, $angine_de_poitrine_annee, $insuffisance_cardiaque_annee, $accident_vasculaire_cerebral_annee, $infarctus_annee, $arterite_des_membres_inferieurs_annee, $description);

    $urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php?view=form";
    header("Location:" . $urlBase . $qs);
}
function validerPOST($nom)
{
    if (isset($_POST[$nom]) && !($_POST[$nom] == ""))
        return $_POST[$nom];
    return null;
}
