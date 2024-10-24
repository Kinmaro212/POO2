<?php    
      // Définition de la classe CompteBancaire qui représente un compte bancaire
class CompteBancaire {
    // Propriétés (ou attributs) de la classe CompteBancaire
    private string $libelle;       // different comptes 
    private float $soldeInitial;   // Solde  du compte
    private string $devise;        // Devise 
    private Titulaire $titulaire;  // Le titulaire de ce compte,  l' objet  Titulaire

    // Constructeur de la classe, appelé lors de la création d'un objet CompteBancaire
    public function __construct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire) {

        $this->libelle = $libelle;                   // Initialise le libellé du compte
        $this->soldeInitial = $soldeInitial;         // Initialise le solde avec une valeur initiale
        $this->devise = $devise;                     // Initialise la devise utilisée
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);

    // definie le titulaire au compte
    }

    public function getLibelle(): string {

        return $this->libelle;
    
    }
    
    public function setLibelle(): string {

        $this->libelle;
    }
    public function getSoldeInitial(): string {

        return $this->soldeInitial;
    }
    public function setSoldeInitial(): float {

        $this->soldeInitial;
    }
    public function getDevise() {

        return $this->devise;
    }
    public function setDevise() {

        $this->devise;
    }
    public function getTitulaire(): Titulaire {

        $this->titulaire;
    }
    public function setTitulaire(): Titulaire {

    $this->titulaire;

    }



    // créditer un montant sur le compte
    public function crediterCompte(float $montant) {

        $this->soldeInitial += $montant;
    // pr crediter le montant au solde actuel
        
        // $this-> crediterCompte($montant); la j'ai appeler crediterCompte dans crediterCompte donc c faux 
    }

    //  débiter un montant du compte
    public function debiterCompte(float $montant) {

        if($montant <= $this->soldeInitial){

        $this->soldeInitial -= $montant;

        } else {echo 'solde insuffisant';
            }
        }
// Crédite le compte destinataire
    public function virement(CompteBancaire $destinataire, float $montant) {


        // si $montant est inférieur ou egale au solde 
        if($montant <= $this->soldeInitial){
            $this->debiterCompte($montant);      // Débite le compte source
            echo "Le compte $this->titulaire a été débité de $montant et son nouveau solde est de  $this->soldeInitial";
            $destinataire->crediterCompte($montant);
            echo "Le compte $destinataire a été créditer de $montant et son nouveau solde est de $destinataire->soldeInitial ";}
            // le compte 'nom' a été crédité de de montant et son nouveau solde est de ""
        else{ echo "Le solde est insuffisant. Veuillez réapprovisioner le compte.";}
            // Crédite le compte destinataire
        }
// $montant  représent la somme que l'on veut ajouter au compte.
// Fonctionnement : Lorsque cette méthode est appelée, elle prend le montant fourni en paramètre et l'ajoute au solde actuel ($soldeInitial).

// Methode magique __toString() :  un objet libelle est converti en texte
    public function __toString(): string {

        return $this->libelle . ' ' . $this->soldeInitial;
//afin d'afficher ce que l'on souhaite afficher 

    }

}

    // effectuer un virement vers un autre compte



