<?php

class Query
{

    public function recup_email()
    {

        if(isset($_SESSION['login'])){

            // RECUPERATION DE L'ID SESSION
            $identifiant_session = $_SESSION['login'];
            $statement_id = $bdd->prepare("SELECT id FROM utilisateurs WHERE identifiant = :identifiant");
            $statement_id->bindParam('identifiant', $identifiant_session);
            $statement_id->execute();
            $select_id = $statement_id->fetch();
            $select_id_array = $select_id[0];
            $id_session = $select_id_array[0]; 
            // FIN DE LA RECUP 
        }

        public function recup_salon()
        {
            $statement_salon = $bdd->prepare("SELECT s.id, s.nom FROM salons AS s JOIN utilisateurs AS u ON u.id = s.id_proprietaire JOIN salons_utilisateurs AS su ON su.id_salon = s.id WHERE su.id_utilisateur = :id OR s.id_proprietaire = :id");
            $statement_salon->bindParam('id', $id_session);
            $statement_salon->execute();
            $select_salon = $statement_salon->fetchAll();
        }


        public function verif_connect()
        {
            $statement_verif = $bdd->prepare("SELECT u.id FROM utilisateurs AS u JOIN salons_utilisateurs AS su on su.id_utilisateur = u.id WHERE su.id_salon = :idsalon AND u.id= :idsession");
            $statement_verif->bindParam('idsalon', $id_salon);
            $statement_verif->bindParam('idsession', $id_session);
            $statement_verif->execute();
        }

        public function pull_msg()
        {

            $statement_message = $bdd->prepare("SELECT m.id, m.id_utilisateur, m.id_salon, m.contenu, u.prenom FROM message AS m JOIN utilisateurs AS u ON m.id_utilisateur=u.id JOIN salons AS s ON m.id_salon = s.id JOIN salons_utilisateurs AS su ON su.id_salon = s.id WHERE m.id_salon = :idsalon GROUP BY m.id");
            $statement_message->bindParam('idsalon', $id_salon);
            $statement_message->execute();
            $select_message = $statement_message->fetchAll();
        }
    }
?>
