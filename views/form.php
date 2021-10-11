<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/form.css'>
</head>

<body>
    <div class="container">
        <div>
            <img src="./img/Logo_nouveau.png">
        </div>
        <form action="action_page.php" method="POST">
            <div class="sub_container">
                <h2>Données Personnelles</h2>
                <div class="row">
                    <div class="col" id="prenoms">
                        <div>
                            <label for="fname">
                                <h3>Prénom*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="text" id="fname" name="firstname" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="col" id="noms">
                        <div>
                            <label for="lname">
                                <h3>Nom*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="text" id="lname" name="lastname" placeholder="Nom">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col" id="sexe">
                        <div>
                            <label for="sexe">
                                <h3>Sexe*</h3>
                            </label>
                        </div>

                        <div>
                            <input required type="radio" name="gender" value="F">
                            <label for="gender">F</label>
                            <input required type="radio" name="gender" value="M">
                            <label for="gender">M</label>
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label for="date_de_naissance">
                                <h3>Date de naissance*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="date" id="date_de_naissance" name="date_de_naissance" placeholder="JJ/MM/AAAA">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="poids">
                                <h3>Poids*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="number" step="0.01" id="poids" name="poids" placeholder="00,00">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="taille">
                                <h3>Taille*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="number" step="0.01" id="taille" name="taille" placeholder="0,00">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="email">
                                <h3>E-mail*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="text" id="email" name="email" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="ville">
                                <h3>Ville*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="text" id="ville" name="ville" placeholder="">
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <label for="code_postal">
                                <h3>Code postal*</h3>
                            </label>
                        </div>
                        <div>
                            <input required type="text" id="code_postal" name="code_postal" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub_container">
                <div>
                    <hr>
                </div>
            </div>

            <div class="sub_container">

                <h2>Questions sur votre santé</h2>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="fumeur">
                                <h4>Êtes-vous fumeur ?*</h4>
                            </label>
                        </div>
                        <div>
                            <input required type="radio" name="fumeur" value="1">
                            <label for="fumeur">Oui</label>
                            <input required type="radio" name="fumeur" value="0">
                            <label for="fumeur">Non</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="diabetique">
                                <h4>Êtes-vous diabétique ?*</h4>
                            </label>
                        </div>
                        <div>
                            <input required type="radio" name="diabetique" value="1">
                            <label for="diabetique">Oui</label>
                            <input required type="radio" name="diabetique" value="0">
                            <label for="diabetique">Non</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="tension_traitee">
                                <h4>Êtes-vous traité pour une hypertension artérielle ?* </h4>
                            </label>
                        </div>
                        <div>
                            <input required type="radio" name="hypertension" value="1">
                            <label for="hypertension">Oui</label>
                            <input required type="radio" name="hypertension" value="0">
                            <label for="hypertension">Non</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="tension_arterielle_systolique">
                                <h4>Tension artérielle systolique (la plus grande)*</h4>
                            </label>
                        </div>
                        <div>
                            <input required type="number" min="0" max="200" step="0.01" id="tension_arterielle_systolique" name="tension_arterielle_systolique" placeholder="0,00">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="cholesterol">
                                <h4>Taux de cholestérol total*</h4>
                            </label>
                        </div>
                        <div>
                            <input required type="number" min="0" max="40" step="0.01" id="cholesterol" name="cholesterol" placeholder="0,00">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="cholesterol_hdl">
                                <h4>Taux de cholestérol HDL*</h4>
                            </label>
                        </div>
                        <div>
                            <input required type="number" min="0" max="40" step="0.01" id="cholesterol_hdl" name="cholesterol_hdl" placeholder="0,00">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div>
                            <label for="accident">
                                <h4>Avez-vous eu un accident cardio-vasculaire ? Si oui lequel (lesquels) :</h4>
                            </label>
                            <br /></br>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" name="embolie_pulmonaire" id="embolie_pulmonaire" />
                                    <label for="embolie_pulmonaire">Embolie pulmonaire?</label>
                                    <br /></br>
                                    Année :<input type="number" name="embolie_pulmonaire_annee" id="embolie_pulmonaire_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" name="angine_de_poitrine" id="angine_de_poitrine" />
                                    <label for="angine_de_poitrine">Angine de poitrine?</label>
                                    <br /></br>
                                    Année : <input type="number" name="angine_de_poitrine_annee" id="angine_de_poitrine_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" name="insuffisance_cardiaque" id="insuffisance_cardiaque" />
                                    <label for="insuffisance_cardiaque">Insuffisance cardiaque?</label>
                                    <br /></br>
                                    Année : <input type="number" name="insuffisance_cardiaque_annee" id="insuffisance_cardiaque_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" name="accident_vasculaire_cerebral" id="accident_vasculaire_cerebral" />
                                    <label for="accident_vasculaire_cerebral">Accident vasculaire cérébral?</label>
                                    <br /></br>
                                    Année : <input type="number" name="accident_vasculaire_cerebral_annee" id="accident_vasculaire_cerebral_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" name="infarctus" id="infarctus" />
                                    <label for="infarctus">Infarctus?</label>
                                    <br /></br>
                                    Année : <input type="number" name="infarctus_annee" id="infarctus_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" name="arterite_des_membres_inferieurs" id="arterite_des_membres_inferieurs" />
                                    <label for="arterite_des_membres_inferieurs">Artérite des membres inférieurs?</label>
                                    <br /></br>
                                    Année : <input type="number" name="arterite_des_membres_inferieurs_annee" id="arterite_des_membres_inferieurs_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA">
                                    <br /></br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="description">
                                <h4>Détails sur l'accident (date, nombre de fois ...) :</h4>
                            </label>
                            <br /></br>
                        </div>
                        <div>
                            <textarea name="description" id="description" title="description" cols="60" rows="10" maxlength="600" placeholder="Écrivez les détails ici"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub_container">
                <div >
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>