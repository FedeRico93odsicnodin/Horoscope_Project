-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 30, 2022 alle 18:09
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horoscope_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `enum_periods`
--

CREATE TABLE `enum_periods` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `enum_periods`
--

INSERT INTO `enum_periods` (`Id`, `Description`) VALUES
(1, 'Giorno'),
(2, 'Mese'),
(3, 'Settimana');

-- --------------------------------------------------------

--
-- Struttura della tabella `gender`
--

CREATE TABLE `gender` (
  `Id` int(11) NOT NULL,
  `Descrizione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `gender`
--

INSERT INTO `gender` (`Id`, `Descrizione`) VALUES
(1, 'Female'),
(2, 'Male'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Struttura della tabella `horoscope_objects`
--

CREATE TABLE `horoscope_objects` (
  `Id` int(11) NOT NULL DEFAULT 1,
  `Period_ID` int(11) NOT NULL,
  `DatePrevision` date NOT NULL,
  `Sign_ID` int(11) NOT NULL,
  `Description_Prevision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `horoscope_objects`
--

INSERT INTO `horoscope_objects` (`Id`, `Period_ID`, `DatePrevision`, `Sign_ID`, `Description_Prevision`) VALUES
(1, 1, '2022-05-26', 1, 'Oggi: questa giornata sarà un po’ tesa, poiché metteranno diversi ostacoli sulla tua strada.  essere impaziente e continua a lottare per i tuoi obiettivi. Amore: avrai più appetito sessuale e sarà benefico per le tue relazioni. Fai attenzione a  lasciarti trasportare solo dal tuo istinto. Ricchezza: dovrai imparare a controllare i tuoi interessi monetari. Se spendi senza controllo te ne pentirai quando vedrai i tuoi conti. Benessere: dovrai monitorare meglio tutto ciò che riguarda la tua salute. Effettuare controlli regolari eviterà trattamenti lunghi.'),
(2, 1, '2022-05-26', 2, 'Oggi: mostri più volontà del solito e hai una chiara padronanza della situazione. Se ti piace la libertà di azione, apparirà la tua vera personalità. Amore: la tua vita affettiva è triste in questo momento. Potrebbe essere una delusione amorosa.  disperare, passerà. Ricchezza: ritardi in una questione monetaria. Ottimo momento per farti conoscere così come le tue idee. Benessere: quando conosci la realtà,  cercare di evitarla e aspettati che tutto si risolva da solo. Affronta subito i tuoi problemi e vedrai che tutto è più facile.'),
(3, 1, '2022-05-26', 3, 'Oggi: Forza e debolezza si alternano per periodi, abbi cura di te perché qualsiasi tipo di conflitto o minaccia può essere un freno ai tuoi progetti. Amore: frustrazioni in vista.  sai molto bene quale sia la situazione attuale della tua vita di coppia e dubiti troppo di amare. Ricchezza: pensa a lungo prima di essere coinvolto in un rischio finanziario. Oggi le stelle  sono a tuo favore. Benessere: oggi l’ispirazione ti catturerà ovunque la trovi. La meditazione ti aiuterà a rimanere in pista, equilibrato e felice.'),
(4, 1, '2022-05-26', 4, 'Oggi: niente sarà facile in questa fase. I tuoi collegamenti sono complicati, le tue reazioni diventano piuttosto violente. Chiama alla calma. Amore: hai lasciato dubbi e gelosie nei confronti del tuo partner. Ancora una volta vivranno momenti speciali, senza problemi intermedi. Ricchezza: Nessun problema con chi dà gli ordini. Mantieni un basso profilo e chiarisci che stai facendo lo sforzo di negoziare. Benessere:  muoverti alla cieca, le informazioni saranno la base del tuo successo. Dovrai analizzare ciò che sei disposto a sacrificare per averlo.'),
(5, 1, '2022-05-26', 5, 'Oggi: i semi del cambiamento saranno piantati a livello sentimentale durante la sessione di oggi. Ottima giornata di lavoro. Amore: prenditi del tempo quando devi prendere decisioni sulla tua vita amorosa.  aggiungerti alla difficile situazione dell’altro. Ricchezza: ti imbatterai in persone di morale molto bassa. Devi prenderti cura del tuo patrimonio e  prestare denaro a nessuno se  vuoi rinunciarvi per perso. Benessere: impara ad essere felice per le cose belle che ti accadono ogni giorno, anche se sono eventi semplici e piccoli. La somma fa il tutto.'),
(6, 1, '2022-05-26', 6, 'Oggi: cambia la tua vita in meglio. È tempo di realizzare i progetti per continuare ad avanzare. Amore: oggi godrai di amore e felicità, soddisfazione e armonia emotiva. Ricorderai momenti indimenticabili della tua infanzia. Ricchezza: dovrai creare un ambiente di armonia. Quello che inizi oggi sarà vantaggioso, quindi sarà un buon giorno per pensare a vecchi progetti. Benessere: pensa ad aggiungere divertimento alla routine quotidiana. Fallo con amici e colleghi, apprezzeranno che li prendi in considerazione.'),
(7, 1, '2022-05-26', 7, 'Al lavoro chiarirà una situazione che ti aveva abbastanza in tensione perché nessuno ha spiegato abbastanza cosa stava per accadere. Ora è chiaro e puoi iniziare a prendere decisioni molto presto. Pianifica i tuoi passi con calma in modo che tutto vada bene.'),
(8, 1, '2022-05-26', 8, 'Finirai oggi con le idee un po ‘rivoltate perché  vedi solo chiaramente cosa cercano gli altri e che  ti piace affatto, specialmente con una persona che hai incontrato di recente. Dategli tempo e  affrettate nulla o esprimete giudizi di valore.'),
(9, 1, '2022-05-26', 9, 'Rimanere ultimo o ultimo  è qualcosa che ti piace e anche oggi sarai con lo spirito competitivo in aumento e questo può farti essere teso per qualcosa legato a un partner. Il lavoro è importante, ma il tuo benessere è più importante. Occhio.'),
(10, 1, '2022-05-26', 10, 'Stai cercando la massima tranquillità possibile e va bene, ma  è il momento di essere senza fare nulla in particolare se in questo momento stai cercando lavoro. Chiama di nuovo qualcuno, anche se l’hai già fatto, per trovare quella porta che  si è ancora aperta.'),
(11, 1, '2022-05-26', 11, 'Se sei abile e suggerisci qualcosa con la mano sinistra e l’intelligenza, otterrai qualcosa che stai cercando nelle tue relazioni personali, sia con un amico che con il tuo partner. Sarai in grado di convincere se lo proponi. Le tue parole saranno ispirate.'),
(12, 1, '2022-05-26', 12, 'Farai un buon lavoro oggi ovunque si trovi o nel campo in cui ti muovi, anche se è a casa. Qualcuno sarà molto contento e te lo dirà. Cogli l’occasione per chiedere qualcosa in cambio. Te lo concederanno senza troppe esitazioni.'),
(13, 3, '2022-05-22', 5, ' sei tra i segni preferiti della settimana. Hai grande vitalità e ambizione. Il successo è assicurato e le opportunità saranno a portata di mano. Le vostre esigenze sono accentuate dalla situazione astrologica rilevante, ma potresti anche esagerare. Fai attenzione a  essere troppo critico con i tuoi cari e a chiedere loro troppo.'),
(14, 3, '2022-05-22', 1, ' l’oroscopo settimanale indica che ritroverai grande forza con l’ingresso di Marte, pianeta di energia, che entra nel tuo segno il 24. Ci sarà persino nervosismo nell’aria, persino rabbia per i nati del segno. Prova a canalizzare la tua. Le tue relazioni sentimentali saranno molto appaganti.  ti sentirai al sicuro. Parla con una persona cara, ti darà buoni consigli.'),
(15, 3, '2022-05-22', 3, ' l’oroscopo della settimana prossima hai il vento nelle vele! Cogli l’occasione per essere audace e fare molti progetti. È probabile che ciò che intraprenderai darà i suoi frutti, al più tardi all’inizio del 2023. Le tue amicizie saranno al centro dell’attenzione. O perché prenderai l’iniziativa con un amico. O perché dovrai prenderti cura di un amico che  sta molto bene.'),
(16, 3, '2022-05-22', 9, 'c’è una bella carica di energia in prospettiva con il transito di Marte nell’amico Ariete dal 24. Ti sentirai più in forma, sia fisicamente che intellettualmente. Se ti metti in testa qualcosa, 26/05/22, 16:42 Oroscopo della settimana dal 23 maggio 2022: classifica settimanale 4/7 nessuno riuscirà a fermarti! Il tuo partner, o un amico, potrebbe essere un po’ troppo possessivo per i tuoi gusti. Spiega chiaramente i tuoi sentimenti e il tuo bisogno di più spazio. essere precipitoso,'),
(17, 3, '2022-05-22', 2, 'senti il bisogno di rallentare la tua routine quotidiana. Fallo, ascolta te stesso e non sottovalutare i segnali del tuo fisico. Altrimenti, sarà il tuo corpo che rischierà di chiamarti all’ordine nel prossimo futuro. Ancora un po’ di pazienza nella tua vita sentimentale! Il pianeta dell’amore, Venere, arriva nel tuo segno il 28 e ci resta il prossimo mese, l’umore dovrebbe essere drasticamente diverso. Le tue relazioni con gli altri saranno molto più piacevoli.'),
(18, 3, '2022-05-22', 6, ' l’oroscopo della settimana prossima anticipa che con l’arrivo di Marte pianeta di azione, in un settore che evoca risarcimenti e riparazioni, dovrai sicuramente mobilitarti per recuperare una somma di denaro. Non essere impaziente! Ti fai troppe domande e lo sai! Quindi, quando senti che stai iniziando a pensare troppo, fai sport, riordina o medita.'),
(19, 3, '2022-05-22', 7, 'l’oroscopo settimanale segnala che sembra che tutti si siano messi d’accordo per farti impazzire. E, poiché non ti piacciono i conflitti, trascorri le tue giornate stando attendo alle reciproche suscettibilità. È estenuante però vivere nel timore di potere creare malumori agli altri! In amore avrete di nuovo l’impressione di trovarvi in una condizione di confusione. Solo il tempo può aiutarti a capire cosa vuoi veramente.'),
(20, 3, '2022-05-22', 8, ' dal 24, Marte pianeta di azione, transiterà in un settore del tuo zodiaco che rappresenta la vita e la forma quotidiana. È Oroscopo della settimana dal 23 maggio 2022: classifica settimanale possibile che tu sia sopraffatto e non sappia più a chi rivolgerti. Ti sarà necessario organizzare gli impegni e le giornate della prossima settimana tutte nel dettaglio! Che tu sia single o in coppia, non ti sentirai emotivamente sicuro. Contrariamente a quanto pensi, il problema viene davvero da te.'),
(21, 3, '2022-05-22', 10, ' stai per cambiare casa o iniziare a lavorare in un posto nuovo? Sembra che la tua routine sarà interrotta per alcuni giorni e non sarai in grado di svolgere i tuoi affari. Nella vita privata, le tensioni sono palpabili con un membro della tua famiglia. Tra intransigenza e lassismo si trova una via di mezzo!'),
(22, 3, '2022-05-22', 11, ' numerose e incessanti saranno le richieste che riceverai. Tra e-mail, telefonate e riunioni, ti sarà difficile rimanere concentrato sul tuo lavoro. Ma apprezzerai questa effervescenza. In amore se hai in mente qualcuno, aspetta un po’ prima di provare qualsiasi approccio. E attenzione alle apparenze, perché non è certo che questa persona stia giocando lealmente.'),
(23, 3, '2022-05-22', 12, ' una spesa imprevista e urgente per la casa potrebbe stressarti. Sii pragmatico e non iniziare in scenari non realistici. È importante mantenere la calma. In amore l’atmosfera dovrebbe essere più piacevole dal 28, quando Venere, pianeta di amore e benessere, entra in Toro. Fino ad allora, pensa un po’ di più a te stesso, ai tuoi bisogni e ai tuoi desideri.'),
(24, 3, '2022-05-22', 4, ' l’ambiente di lavoro non sarà molto sereno! Alcuni avranno molto da fare e dovranno accelerare per ultimare un progetto. Gli altri dovranno confrontarsi con il malumore di un superiore o di un cliente. Nella vita privata, il dialogo non sarà facile con una persona cara che sembra determinata a importi i suoi desideri. Anche se non è facile, devi sforzarti di non cedere e provare a trovare una soluzione che ti renda felice.'),
(25, 2, '2022-05-01', 1, 'L’11 Giove fa il suo ingresso trionfale nel segno, aprendo un capitolo eccezionale della vostra vita: è il momento di raccogliere i frutti del lavoro fin qui svolto. Intorno al 4 il Sole e Urano vi garantiscono guadagni inattesi. Venere nel segno dal 2 porta con sé gioie in amore per tutte, compresa la possibilità di allargare la famiglia. Un Sagittario è pronto a scusarsi, un Pesci trama contro di voi.'),
(26, 2, '2022-05-01', 2, 'Marte vi suona la sveglia fino al 24, facendo tornare d’attualità colloqui e progetti rimasti bloccati a causa di lungaggini burocratiche. Siete più sicure di voi e sapete come tenere a bada nemici e rivali. Dall’11 Giove vi costringe a delegare le incombenze più banali per riuscire a fare tutto. L’amore trionfa dal 28, quando Venere entra nel segno. Un Gemelli vi adora, un Ariete vuole intrappolarvi.'),
(27, 2, '2022-05-01', 3, 'Dall’11 Giove difende con forza i vostri interessi in campo professionale: prima di fare il balzo in avanti che meritate seguite il consiglio di Mercurio e valutate con la massima sincerità la vostra attuale posizione, in modo da puntare solo sui progetti giusti. Dal 2 Venere accontenta chi sogna un colpo di fulmine e protegge le coppie di vecchia data. Un Toro vi perdona ogni cosa, un Leone vi mente.'),
(28, 2, '2022-05-01', 4, 'Giove dall’11 vi spinge a eccedere, facendovi prendere decisioni affrettate che potreste rimpiangere nel giro di poche settimane. Finanze traballanti dal 10 per via di Mercurio e Saturno. Tensione in amore dal 2 al 27: per non rischiare rotture occorre molta buona volontà. Chi è in coppia e si sente soffocare può scegliere di voltare pagina. Una Bilancia accetta i vostri consigli, un Acquario non è leale.'),
(29, 2, '2022-05-01', 5, 'Dall’11 Giove amico fa galoppare i progetti che vi stanno a cuore: avete via libera per realizzare i sogni professionali più arditi. A partire dal 2 grazie a Venere anche in amore i rapporti procedono a grande velocità: fidatevi sempre del vostro istinto, anche quando amici e famigliari vi raccomandano di agire con cautela. Un Cancro rispetta le vostre esigenze, una Bilancia non vi mostra il suo vero volto.'),
(30, 2, '2022-05-01', 6, ' Oroscopo Vergine Urano suggerisce nuovi settori professionali in cui lanciarvi, sostenute magari dalla frequentazione di un corso di aggiornamento o dalla conoscenza di tecniche legate ai social. Mercurio ostile fino al 22 può causare discussioni con i colleghi. In amore torna il sereno a partire dal 28, quando Venere amica rimette a posto i pasticci causati da Mercurio. Un Ariete non sbaglia mai, un Cancro vi sfugge.'),
(31, 2, '2022-05-01', 7, 'Con Giove che dall’11 vi guarda di traverso il lavoro diventa complicato e anche Mercurio vi ostacola spingendo clienti e collaboratori a non mantenere la parola data o imponendovi scelte che non siete pronte a fare. In amore chi è in coppia deve fare attenzione alle mille tentazioni offerte da Venere, che regala felicità alle single in cerca di avventure. Un Leone vi aspetta, una Vergine vi inganna.'),
(32, 2, '2022-05-01', 8, 'Prese di mira da Urano, deciso a rivoluzionare la vostra vita professionale, dall’11 dovete vedervela anche con Giove che porta grandi cambiamenti attorno a voi. In amore Marte accende la passione fino al 24: una rinnovata intesa dal punto di vista fisico può rinvigorire i legami dominati da noia o stanchezza. Con un Acquario non è finita: potete ancora conquistarlo, pausa con un Capricorno.'),
(33, 2, '2022-05-01', 9, 'plendide opportunità lavorative si affacciano al vostro orizzonte dall’11 per merito di Giove: il momento è propizio anche se desiderate avviare un’attività in proprio, nonostante i tanti ritardi causati fino al 22 da Mercurio. In amore il vostro fascino si fa esplosivo dal 25 grazie a Marte: fino ad allora non mancano comunque le occasioni per divertirvi. Una Vergine vi salva sempre, un Toro vi manca.'),
(34, 2, '2022-05-01', 10, 'L\'energia che Giove scatena dall’11 sconvolge la vostra vita professionale spazzando via come un tornado ciò che vi faceva sentire al sicuro, ma in realtà si limitava a frenarvi. Dal 2 Venere ostile riporta in auge problemi di carattere sentimentale che credevate di aver risolto: per limitare i danni siate pazienti e obiettive. Uno Scorpione vede sempre il vostro lato migliore, un Gemelli vi esaspera.'),
(35, 2, '2022-05-01', 11, ' Dall’11 Giove vi fa avanzare col vento in poppa in campo lavorativo: grazie alla sua spinta nessuno può fermarvi, nemmeno Mercurio che fino al 22 pare deciso a ostacolarvi. Grande fermento anche in amore: dal 2 Venere porta con sé nuove e interessanti conoscenze che illuminano la vita delle single e ravviva la quotidianità di chi è in coppia. Fatevi corteggiare da un Pesci, liberatevi di un Sagittario.'),
(36, 2, '2022-05-01', 12, 'Marte è con voi fino al 24, dandovi il coraggio di cambiare: ora avanzate fino al raggiungimento di tutti i vostri obiettivi, compresi quelli più complicati. Intorno al 5 il Sole e Urano vi servono su un piatto d’argento la possibilità di fare guadagni extra. Fino al 10 colpi di fulmine e cotte inattese: in seguito l’amore diventa noioso. Apritevi a un Capricorno, non perdonate lo sgarbo di uno Scorpione.'),
(37, 1, '2022-05-27', 11, 'Un po’ di distrazione sul lavoro da parte dell’Acquario: se c’è stata una piccola polemica, meglio rimandare ogni discorso a domenica. Secondo l’oroscopo domani di Paolo Fox, i nati sotto il segno dei Pesci possono sfruttare questo fine settimana che sarà in crescendo: avete una bella visibilità e non vi fate più fermare.'),
(38, 1, '2022-05-28', 11, 'Cari Acquario, secondo l’oroscopo di Paolo Fox di oggi (sabato 28 maggio 2022), le coppie con qualche problema dovranno risolvere i conflitti prima dell’arrivo del mese di giugno. Quindi ora. Per quanto riguarda il lavoro, avete bisogno di qualche cambiamento che vi dia energia e voglia di andare avanti.'),
(39, 1, '2022-05-29', 11, 'Cari Acquario, secondo l’oroscopo di Paolo Fox di oggi (domenica 29 maggio 2022), non è un caso se vi sentite un po’ giù di corda. Questo è quello che può essere definito il classico periodo di confusione. Cercate di restare calmi e di ritrovare il giusto equilibrio.'),
(40, 1, '2022-05-30', 11, 'La Luna Nuova in Gemelli indica che concluderete positivamente un affare o un progetto, e ciò farvi ottenere dei complimenti: sarete orgogliosi di voi stessi! Il transito può rappresentare anche una forte spinta a ripartire da zero riguardo a una relazione personale o di lavoro o a un progetto. Nel lavoro, potrebbero inoltre arrivare delle nuove opportunità ben più interessanti: ne sarete entusiasti!  '),
(41, 1, '2022-05-25', 11, 'Oggi la Luna è dalla tua parte, se sei single arriveranno belle novità. Sul lavoro, ora sei in grado, con le tue potenzialità, di ottenere tutto quello che desideri!.'),
(42, 1, '2022-05-24', 11, 'Cari acquario, in amore ci sarà modo di vivere bei momentti anche se potreste essere un po\' più polemici del solito. Sul lavoro potrebbe saltare un incontro importante ma ci sarà modo di riprogrammarlo. '),
(43, 1, '2022-05-23', 11, 'numerose e incessanti saranno le richieste che riceverai. Tra e-mail, telefonate e riunioni, ti sarà difficile rimanere concentrato sul tuo lavoro. Ma apprezzerai questa effervescenza. In amore se hai in mente qualcuno, aspetta un po’ prima di provare qualsiasi approccio. E attenzione alle apparenze, perché non è certo che questa persona stia giocando lealmente.'),
(44, 1, '2022-05-22', 11, 'Via libera con i sentimenti… concedetevi all’amore, date la vostra massima disponibilità al partner, il cielo favorisce una relazione, sarà importante e solida per il futuro, oggi al partner dimostrate quanto è profondo il vostro interesse. '),
(45, 1, '2022-05-21', 11, 'Un po’ di distrazione sul lavoro da parte dell’Acquario: se c’è stata una piccola polemica, meglio rimandare ogni discorso a domenica. Secondo l’oroscopo domani di Paolo Fox, i nati sotto il segno dei Pesci possono sfruttare questo fine settimana che sarà in crescendo: avete una bella visibilità e non vi fate più fermare.'),
(46, 1, '2022-05-20', 11, 'Cari Acquario, secondo l’oroscopo di Paolo Fox di oggi (sabato 28 maggio 2022), le coppie con qualche problema dovranno risolvere i conflitti prima dell’arrivo del mese di giugno. Quindi ora. Per quanto riguarda il lavoro, avete bisogno di qualche cambiamento che vi dia energia e voglia di andare avanti.'),
(47, 1, '2022-05-19', 11, 'Cari Acquario, secondo l’oroscopo di Paolo Fox di oggi (domenica 29 maggio 2022), non è un caso se vi sentite un po’ giù di corda. Questo è quello che può essere definito il classico periodo di confusione. Cercate di restare calmi e di ritrovare il giusto equilibrio.'),
(48, 1, '2022-05-18', 11, 'La Luna Nuova in Gemelli indica che concluderete positivamente un affare o un progetto, e ciò farvi ottenere dei complimenti: sarete orgogliosi di voi stessi! Il transito può rappresentare anche una forte spinta a ripartire da zero riguardo a una relazione personale o di lavoro o a un progetto. Nel lavoro, potrebbero inoltre arrivare delle nuove opportunità ben più interessanti: ne sarete entusiasti!  '),
(49, 1, '2022-05-17', 11, 'Oggi la Luna è dalla tua parte, se sei single arriveranno belle novità. Sul lavoro, ora sei in grado, con le tue potenzialità, di ottenere tutto quello che desideri!.'),
(50, 1, '2022-05-16', 11, 'Cari acquario, in amore ci sarà modo di vivere bei momentti anche se potreste essere un po\' più polemici del solito. Sul lavoro potrebbe saltare un incontro importante ma ci sarà modo di riprogrammarlo. '),
(51, 1, '2022-05-15', 11, 'numerose e incessanti saranno le richieste che riceverai. Tra e-mail, telefonate e riunioni, ti sarà difficile rimanere concentrato sul tuo lavoro. Ma apprezzerai questa effervescenza. In amore se hai in mente qualcuno, aspetta un po’ prima di provare qualsiasi approccio. E attenzione alle apparenze, perché non è certo che questa persona stia giocando lealmente.'),
(52, 1, '2022-05-14', 11, 'Via libera con i sentimenti… concedetevi all’amore, date la vostra massima disponibilità al partner, il cielo favorisce una relazione, sarà importante e solida per il futuro, oggi al partner dimostrate quanto è profondo il vostro interesse. ');

-- --------------------------------------------------------

--
-- Struttura della tabella `horoscope_signs`
--

CREATE TABLE `horoscope_signs` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `horoscope_signs`
--

INSERT INTO `horoscope_signs` (`Id`, `Description`, `Start_Date`, `End_Date`) VALUES
(1, 'Ariete', '2000-03-21', '2000-04-19'),
(2, 'Toro', '2000-04-20', '2000-05-20'),
(3, 'Gemelli', '2000-05-21', '2000-06-20'),
(4, 'Cancro', '2000-06-21', '2000-07-22'),
(5, 'Leone', '2000-07-23', '2000-08-23'),
(6, 'Vergine', '2000-08-24', '2000-09-22'),
(7, 'Bilancia', '2000-09-23', '2000-10-22'),
(8, 'Scorpione', '2000-10-23', '2000-11-21'),
(9, 'Sagittario', '2000-11-22', '2000-12-21'),
(10, 'Capricorno', '2000-12-22', '2000-01-19'),
(11, 'Acquario', '2000-01-20', '2000-02-19'),
(12, 'Pesci', '2000-02-20', '2000-03-20');

-- --------------------------------------------------------

--
-- Struttura della tabella `subscription_types`
--

CREATE TABLE `subscription_types` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `subscription_types`
--

INSERT INTO `subscription_types` (`Id`, `Description`) VALUES
(1, 'Standard'),
(2, 'Premium'),
(3, 'Developer');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL DEFAULT 1,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender_ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNum` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `ZipCode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `SubscriptionType_ID` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Id`, `Name`, `Surname`, `Birthday`, `Gender_ID`, `Email`, `PhoneNum`, `City`, `ZipCode`, `Country`, `SubscriptionType_ID`, `Password`) VALUES
(1, 'Developer', 'Admin', '1993-02-13', 2, 'federico.nigro93@gmail.com', '3460200436', 'Milan', '20131', 'Italy', 3, '12345'),
(2, 'Account', 'Standard', '2000-02-13', 1, 'account.standard@test.com', '39999999999', 'Milan', '20131', 'Italy', 1, '12345'),
(3, 'Account', 'Premium', '2000-04-13', 3, 'account.premium@test.com', '39988888888', 'Milan', '20131', 'Italy', 2, '98765'),
(4, 'test', 'eee', '2022-05-18', 1, 'test_test@genter.it', '333333333333', 'Milano', '20131', 'Italy', 1, '123'),
(5, 'account inserimento', 'in fase di test', '2022-05-24', 3, 'test_test_2@genter.it', '333333333333', 'Milano', '20131', 'Italy', 2, '12345');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `enum_periods`
--
ALTER TABLE `enum_periods`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `horoscope_objects`
--
ALTER TABLE `horoscope_objects`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `horoscope_signs`
--
ALTER TABLE `horoscope_signs`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `subscription_types`
--
ALTER TABLE `subscription_types`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_gender` (`Gender_ID`),
  ADD KEY `fk_subscription` (`SubscriptionType_ID`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_gender` FOREIGN KEY (`Gender_ID`) REFERENCES `gender` (`Id`),
  ADD CONSTRAINT `fk_subscription` FOREIGN KEY (`SubscriptionType_ID`) REFERENCES `subscription_types` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
