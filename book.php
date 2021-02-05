<?php 

class Book {

    // attributes
    public $title;
    public $author;
    public $year;
    public $publisher;
    public $description;

    // constructor
    public function __construct($bookTitle, $bookAuthor) {
        $this->title = $bookTitle;
        $this->author = $bookAuthor;
    }

    // methods set
    public function setYear($bookYear) {
        $this->year = $bookYear;
    }

    public function setPublisher($bookPublisher) {
        $this->publisher = $bookPublisher;
    }

    public function setDescription($bookDescription) {
        $this->description = $bookDescription;
    }

    // methods get
    // public function getYear() {
    //     return $this->year;
    // }

    // public function getPublisher() {
    //     return $this->publisher;
    // }

    // public function getDescription() {
    //     return $this->description;
    // }

    public function getShortDescription($numChar) {
        return substr($this->description, 0, $numChar)."...";
    }
}

// $book1 = new Book();
// $book1->title = "Il nome della rosa";
// $book1->author = "Umberto Eco";
// $book1->year = 1980;

// $book2 = new Book();
// $book2->title = "1984";
// $book2->author = "George Orwell";
// $book2->year = 1949;

$book1 = new Book("Il nome della rosa", "Umberto Eco");
$book1->setYear(1980);
$book1->setPublisher("Bompiani");
$book1->setDescription("Ultima settimana del novembre 1327. Il novizio Adso da Melk accompagna in un'abbazia dell'alta Italia frate Guglielmo da Baskerville, incaricato di una sottile e imprecisa missione diplomatica. Ex inquisitore, amico di Guglielmo di Occam e di Marsilio da Padova, frate Guglielmo si trova a dover dipanare una serie di misteriosi delitti (sette in sette giorni, perpetrati nel chiuso della cinta abbaziale) che insanguinano una biblioteca labirintica e inaccessibile. Per risolvere il caso, Guglielmo dovrà decifrare indizi di ogni genere, dal comportamento dei santi a quello degli eretici, dalle scritture negromantiche al linguaggio delle erbe, da manoscritti in lingue ignote alle mosse diplomatiche degli uomini di potere. La soluzione arriverà, forse troppo tardi, in termini di giorni, forse troppo presto, in termini di secoli.");

// echo $book1->getShortDescription();

$book2 = new Book("1984", "George Orwell");
$book2->setYear(1940);
$book2->setPublisher("Mondadori");
$book2->setDescription("1984. Il mondo è diviso in tre superstati in guerra fra loro: Oceania, Eurasia ed Estasia. L'Oceania, la cui capitale è Londra, è governata dal Grande Fratello, che tutto vede e tutto sa. I suoi occhi sono le telecamere che spiano di continuo nelle case, il suo braccio la psicopolizia che interviene al minimo sospetto. Tutto è permesso, non c'è legge scritta. Niente, apparentemente, è proibito. Tranne pensare. Tranne amare. Tranne divertirsi. Insomma: tranne vivere, se non secondo i dettami del Grande Fratello. Dal loro rifugio, in uno scenario desolante, solo Winston Smith e Julia lottano disperatamente per conservare un granello di umanità...");

$book3 = new Book("Uno studio in rosso", "Conan Doyle");
$book3->setYear(1887);
$book3->setPublisher("BUR");
$book3->setDescription("Conan Doyle, il non molto fortunato medico di Southsea, disponeva evidentemente, di una carta da giocare. Piccolo o grande, era scrittore. Scrittore inventore, scrittore fantastico, scrittore creatore, creatore di un personaggio e di un domino che durano ancora. Fascinosa tirannia.");

$book4 = new Book("Dieci piccoli indiani", "Agatha Christie");
$book4->setYear(1939);
$book4->setPublisher("Mondadori");
$book4->setDescription("Dieci persone estranee l'una all'altra sono state invitate a soggiornare in una splendida villa a Nigger Island, senza sapere il nome del generoso ospite. Eppure, chi per curiosità, chi per bisogno, chi per opportunità, hanno accettato l'invito. E ora sono lì, su quell'isola che sorge dal mare, simile a una gigantesca testa, che fa rabbrividire soltanto a vederla. Non hanno trovato il padrone di casa ad aspettarli. Ma hanno trovato una poesia incorniciata e appesa sopra il caminetto di ciascuna camera. E una voce inumana e penetrante che li accusa di essere tutti assassini. Per gli ospiti intrappolati è l'inizio di un interminabile incubo. Con Dieci piccoli indiani, scritto nel 1939, Agatha Christie ha sfidato se stessa: dieci assassini, isolati, vittime a loro volta di un assassino invisibile. Età di lettura: da 11 anni.");

$book5 = new Book("Il signore delle mosche", "William Golding");
$book5->setYear(1983);
$book5->setPublisher("Einaudi");
$book5->setDescription("Nel corso di un conflitto planetario, un aereo precipita su un'isola deserta. Sopravvivono solo alcuni ragazzi, che provano a riorganizzarsi senza l'aiuto e il controllo degli adulti. I primi tentativi di dare vita a una società ordinata hanno successo, ma presto esplodono tensioni latenti ed emergono paure irrazionali e comportamenti asociali: lo scenario paradisiaco dell'isola tropicale si trasforma in un inferno.");

$book6 = new Book("Lo Hobbit", "John R. R. Tolkien");
$book6->setYear(1937);
$book6->setPublisher("Bompiani");
$book6->setDescription("Protagonisti della vicenda sono, per l'appunto, gli hobbit, piccoli esseri «dolci come il miele e resistenti come le radici di alberi secolari», che vivono con semplicità e saggezza in un idillico scenario di campagna: la Contea. La placida esistenza degli hobbit viene turbata quando il mago Gandalf e tredici nani si presentano alla porta dell'ignaro Bilbo Baggins e lo trascinano in una pericolosa avventura. Lo scopo è la riconquista di un leggendario tesoro, custodito da Smaug, un grande e temibile drago. Bilbo, riluttante, si imbarca nell'impresa, inconsapevole che lungo il cammino s'imbatterà in una strana creatura di nome Gollum.");


// var_dump($book1, $book2,$book3,$book4,$book5,$book6);

?>