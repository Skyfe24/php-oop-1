<!--    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza 
che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe Movie
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti Movie e stampati a schermo 
i valori delle relative proprietà                                -->

<?php
class Movie
{
 // Variabili d'istanza o prorpietà
 public $genre;
 public $lenght;
 public $title;

 // costruttore
 public function __construct($genre, $lenght, $title)
 {       }

 


 // Metodi (funzioni dentro gli oggetti)
public function presentazioneOggi(){
    echo 'Buonasera telespettatori, vi annunciamo che andrà ora in onda' . $this->title;
    }
public function presentazioneDomani(){
    echo 'Buonasera telespettatori, abbiamo il piacere di anticiparvi 
        che domani sera trasmetteremo il film' . $this->title;
    }


}

$orainonda = new Movie("Storico", "2 ore e 5 minuti", "Caccia all'Ottobre Rosso");
$domaniserainTv = new Movie("Commedia", "1 ora e 48 minuti", "Mamma ho Perso l'Aereo" );

$orainonda-> title = "Caccia all'Ottobre Rosso";
$domaniserainTv-> title = "Mamma ho Perso l'Aereo";
$orainonda-> genre = "Storico";
$domaniserainTv-> genre = "Commedia";
$orainonda-> lenght = "2 ore e 5 minuti";
$domaniserainTv-> lenght = "1 ora e 48 minuti";

$orainonda -> presentazioneOggi();
$domaniserainTv -> presentazioneDomani();

var_dump($orainonda);
var_dump($domaniserainTv);