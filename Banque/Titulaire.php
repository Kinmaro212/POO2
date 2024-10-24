<?php
class Titulaire {
    // Propriétés (attributs) qui définissent un titulaire de compte
    private string $nom;                 // Nom du titulaire
    private string $prenom;              // Prénom du titulaire
    private string $dateDeNaissance;   // Date de naissance du titulaire
    private string $ville;               // Ville où habite le titulaire
    private array $ensembleComptes;     // Tableau pour stocker les comptes associés au titulaire

    // Constructeur : méthode spéciale appelée lors de la création d'un objet Titulaire
    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville) {
        $this->nom = $nom;                          // Définit le nom du titulaire
        $this->prenom = $prenom;                    // Définit le prénom du titulaire
        $this->dateDeNaissance = $dateDeNaissance; // Définit la date de naissance
        $this->ville = $ville;                      // Définit la ville du titulaire
        $this->ensembleComptes = [];               // Initialise un tableau vide pour les comptes
    }

    //  pour obtenir le nom du titulaire
    public function getNom() {
        return $this->nom;
    }

    //  pour définir le nom du titulaire
    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    //  pour obtenir le prénom du titulaire
    public function getPrenom(): string {
        return $this->prenom;
    }


    //  pour définir le prénom du titulaire
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    //  pour obtenir l'age du titulaire
    public function getDateDeNaissance(): string {
        return $this->dateDeNaissance;
    }


    //  pour définir l'age du titulaire
    public function setDateDeNaissance(string $dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }
    //  pour obtenir l'age du titulaire
    public function getVille(): string {
        return $this->Ville;
    }


    //  pour définir l'age du titulaire
    public function setVille(string $ville) {
        $this->ville = $ville;
    }


    //  pour ajouter un compte bancaire à l'ensemble des comptes du titulaire
    public function ajouterCompte(CompteBancaire $compte) {
        $this->ensembleComptes[] = $compte; // Ajoute le compte dans le tableau
    }

    //  les informations du titulaire et de ses comptes
    public function InfosTitulaire() {
        echo "Titulaire : {$this->nom} {$this->prenom}, né(e) le {$this->dateDeNaissance}, Ville : {$this->ville} <br>";
        echo "Comptes associés : <br>";

        // Afin d'afficher les comptes libellé etant la nomation de chaque compte 
        foreach($this->ensembleComptes as $compte) {
                 
        echo "{$this->getNom()} {$this->getPrenom()} possède {$compte->getSoldeInitial()}  {$compte->getDevise()} dans son compte courant.<br>";
         // $compte->getSoldeinitial() , $compte->getDevise() ,$compte->getLibelle(), $compte->getTitulaire().'<br>';
        }

}
    // Methode magique __toString() :  un objet Titulaire est converti en texte
    public function __toString(): string {
        return $this->nom . ' ' . $this->prenom;
    }

    public function calculerAge(){
        $date = new DateTime($this ->dateDeNaissance);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;

    }
}

