<?php
class Movie
{
    public  $title;
    public $description;
    public  $genre;
    public  $year;

    function __construct($_title, $_description, $_genre, $_year)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->genre = $_genre;
        $this->year = $_year;
    }
    function getTitle()
    {
        return $this->title;
    }
}
/* $uncharted = new Movie('Uncharted', 'carino', 'prova', 20); */
$uncharted = new Movie(
    'Uncharted',
    'fratelli Sam e Nathan "Nate" Drake vengono catturati dalla sicurezza del museo mentre cercano di rubare la prima mappa realizzata dopo la spedizione di Magellano . L\'orfanotrofio che ospita entrambi i ragazzi caccia Sam. Prima di partire, Sam promette il suo ritorno a Nate e gli lascia un anello con la scritta "Sic Parvis Magna".

                        Quindici anni dopo, Nate lavora come barista a New York City e borseggia ricchi clienti. Victor "Sully" Sullivan , un cacciatore di fortuna che ha lavorato con Sam per rintracciare il tesoro nascosto dall\'equipaggio di Magellano, spiega a Nate che Sam è scomparso dopo averlo aiutato a rubare Juan Sebastian Elcano il diario di Nate, che ha ricevuto diverse cartoline da Sam nel corso degli anni, accetta di aiutare Sully a trovare suo fratello. Sully e Nathan vanno a un\'asta per rubare una croce d\'oro legata all\'equipaggio di Magellan, dove incontrano Santiago Moncada, l\'ultimo discendente della famiglia Moncada che finanziò la spedizione di Magellan, e Jo Braddock, capo dei mercenari assoldati da Moncada. Nate cade in un\'imboscata dagli uomini di Braddock e il combattimento che ne segue crea una distrazione per Sully per rubare la croce.

                        I due si recano a Barcellona , ​​dove il tesoro è presumibilmente nascosto, e si incontrano con il contatto di Sully Chloe Frazer , che ha un\'altra croce. Chloe ruba il primo cross a Nate, ma gli uomini la convincono a lavorare con loro. Nel frattempo, Moncada viene a sapere da suo padre che la fortuna di famiglia sarà donata, e così ordina a Braddock di uccidere suo padre, in modo che erediti invece i soldi. Nate, Chloe e Sully seguono gli indizi nel diario di Elcano su Santa Maria del Pi , trovando una cripta segreta dietro l\'altare. Nate e Chloe entrano, trovando una botola, ma mentre la aprono, la cripta si inonda d\'acqua. Sully li aiuta a scappare dopo aver sottomesso un\'imboscata di Braddock. Usando le due croci per sbloccare un passaggio segreto, Nate e Chloe trovano una mappa che indica che il tesoro si trova nelle Filippine . Chloe tradisce Nate e prende la mappa, suggerendo che Sully sta mantenendo un segreto su Sam. Chloe porta la mappa a Moncada, essendo stata anche assunta da lui, con dispiacere di Braddock.

                        Sully recupera Nate e dice che dopo che lui e Sam hanno recuperato il diario di Elcano, sono caduti in un\'imboscata da Braddock; Sam è stato colpito e Sully è scappato per un pelo. Moncada, Chloe e la squadra di Braddock partono su un aereo cargo per trovare il tesoro, ma Braddock tradisce Moncada e lo uccide per guadagnare potere, costringendo Chloe a nascondersi. Nate e Sully salgono segretamente sull\'aereo e Nate affronta Braddock. Chloe che si nascondeva da Braddock viene trovata e ne segue una battaglia mentre Sully si lancia con il paracadute con la mappa. Nate e Chloe vengono espulsi dall\'aereo durante la battaglia che ne segue e la coppia atterra nelle Filippine, dove si rendono conto che la mappa non individua il tesoro. Nate scopre la vera posizione del tesoro attraverso i suggerimenti lasciati dalle cartoline di Sam, ma lascia false coordinate per Chloe dopo aver dubitato correttamente della sua lealtà. Scopre le navi Magellane e si riunisce con Sully. Braddock li segue, costringendo Nate e Sully a nascondersi mentre il suo equipaggio trasporta in aereo le navi.

                        Nella loro fuga, Sully requisisce uno degli elicotteri, costringendo Braddock a ordinare all\'altro elicottero di avvicinarsi per un\'azione di abbordaggio. Nate si difende dai suoi mercenari e dalle milizie filippine locali e abbatte l\'altro elicottero con uno dei cannoni della nave. Braddock lascia cadere l\'ancora della nave mentre Nate sale sull\'elicottero. Sully lancia un sacco di tesori raccolti a Braddock che cade in mare e muore schiacciato quando la nave si rompe e cade su di lei. filippine delle unità navali , Nate e Sully riescono a farla franca con alcuni pezzi di tesoro borseggiato mentre Chloe rimane a mani vuote mentre decide di seguire il duo.',
    'Azione-avventura',
    2022
);

$theAdamProject = new Movie(
    'The Adam Project',
    "In un 2050 distopico, il pilota di caccia Adam Reed ruba un jet del tempo per scappare nel 2018 per salvare sua moglie, Laura Shane. Nel processo, viene ferito e precipita nel 2022. Il film si sposta poi su Adam, 12 anni, nel 2022, il cui padre Louis è morto un anno prima. Viene sospeso per aver litigato a scuola e litiga con sua madre Ellie. Quando è a casa da solo una notte, trova Adam 2050 ferito. Il giovane Adam si rifiuta di fidarsi dello sconosciuto, ma l'Adamo del 2050 menziona inavvertitamente il giovane Adam e il suo cane Hawking con i loro nomi. Il giovane Adam si rende presto conto che lo sconosciuto di fronte a lui è il suo sé futuro.

                Adam usa il DNA del giovane Adam per entrare nel suo jet. Entrambi vengono presto attaccati da Maya Sorian, la leader del mondo distopico, e dal suo assistente Christos, ma vengono salvati da Laura Shane, che aveva simulato la sua morte ed era rimasta fuori rete in un luogo segreto. Si rendono conto che dopo l'invenzione del viaggio nel tempo da parte di Louis Reed e la sua successiva morte, Sorian aveva monopolizzato il mercato commerciale e quando Laura scopre di aver incontrato spesso il suo sé passato, Sorian tenta di uccidere Laura e orchestra la sua morte, lasciandola bloccata nel passato. Sorian tenta di nuovo di ucciderli, ma Laura distoglie la loro attenzione abbastanza a lungo da consentire agli Adam di scappare nel 2018.
                
                Nel 2018, vedono Louis Reed nel tentativo di ottenere il suo aiuto, ma Louis si rifiuta di aiutare gli Adams preoccupato per l'effetto sul flusso temporale. Nel frattempo, Sorian incontra il suo passato per metterla in guardia su Adam. Gli Adam condividono i loro sentimenti comuni riguardo al padre quella notte in un motel. Il giorno successivo, entrambi partirono per distruggere il viaggio nel tempo. All'arrivo a Sorian Technologies, vengono attaccati dai soldati di Sorian ma vengono inaspettatamente salvati da Louis, che ha cambiato idea e accetta di aiutarli. Louis rivela che distruggere la macchina non distrugge essenzialmente il viaggio nel tempo finché Sorian ha il suo algoritmo, il programma principale che contiene tutta la matematica e i vincoli richiesti per il viaggio nel tempo. Nel frattempo, 2050 Sorian intrappola il giovane Adam.
                
                2050 Adam e Louis rimuovono l'algoritmo, ma entrambi i Sorian li costringono a rinunciare all'algoritmo usando il giovane Adam come leva. Adam fugge da Sorian spingendo via la sua pistola, tuttavia questo danneggia il sigillo che trattiene il campo elettromagnetico, facendolo crescere a valori illimitati. I Reed cercano il più possibile di fermarli, ma il vecchio Sorian minaccia di uccidere Louis. Adam avverte che i proiettili perforano l'armatura, ma rimane irremovibile. Non vedendo altro modo, Sorian spara a Louis, ma il proiettile devia e colpisce invece il Sorian più giovane, spazzando via il Sorian più anziano dall'esistenza. I Reed riescono a malapena a fuggire dalla struttura e raggiungere casa, dove si riconciliano giocando a una partita di cattura prima che gli Adams tornino alle rispettive linee temporali. L'Adam del 2022 finalmente si riconcilia con sua madre. In futuro, un Adam più anziano e molto più felice incontra Laura Shane che è entrata nell'edificio sbagliato della scuola di volo. Adam chiede che la accompagni al suo edificio, affermando che ha tempo. ",
    'Azione-avventura',
    2022
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-opp-1</title>
</head>

<body>
    <main>
        <section>
            <h2>
                Nome film: <?= $uncharted->title ?>
            </h2>
            <p>
                <strong>
                    Descrizione:
                </strong> <?= $uncharted->description ?>
            </p>
            <h3>
                <strong>
                    Genere:
                </strong>
                <?= $uncharted->genre ?>
            </h3>
            <h3>
                <strong>
                    Anno
                </strong>
                <?= $uncharted->year ?>
            </h3>
        </section>
        <section>
            <h2>
                Nome film: <?= $theAdamProject->title ?>
            </h2>
            <p>
                <strong>
                    Descrizione:
                </strong> <?= $theAdamProject->description ?>
            </p>
            <h3>
                <strong>
                    Genere:
                </strong>
                <?= $theAdamProject->genre ?>
            </h3>
            <h3>
                <strong>
                    Anno
                </strong>
                <?= $theAdamProject->year ?>
            </h3>
        </section>

    </main>
</body>

</html>