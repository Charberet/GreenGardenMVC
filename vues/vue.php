<?php
class vue
{

    private $fichier;
    private $titre;

    public function __construct($action)
    {
        // on récupère le nom du fichier à partir de l'action
        $this->fichier = "vues/vue" . $action . ".php";
    }

    public function generer($quelquechose)
    {

        $contenu = $this->genererFichier($this->fichier, $quelquechose);
        $vue = $this->genererFichier('vues/template.php', array('titre' => $this->titre, 'contenu' => $contenu));
        echo $vue;
    }

    private function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son résultat est placé dans le tampon de sortie
            require $fichier;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        } else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
}
