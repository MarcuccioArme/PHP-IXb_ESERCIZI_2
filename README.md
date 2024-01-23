# PHP-IXb_ESERCIZI_2
### Alcuni esercizi per continuare a prendere dimestichezza con PHP

Si vuole realizzare un servizio Web per la gestione della <b>raccolta di preferenze degli utenti, sul “genere letterario” dei libri commercializzati da una libreria di una grande città</b>. Il servizio deve prevedere le seguenti pagine:
1. un <b>form</b> in cui l’utente può selezionare il <b>genere letterario</b> (una stringa) e la sua <b>valutazione numerica</b> (si può assumere un valore nell’intervallo <b>1 - 10</b>). Il <b>form</b> permette l’inserimento di <b>una valutazione per volta</b> e l’inserimento di più valutazioni avviene inviando più volte il <b>form</b> in una stessa sessione;
2. una <b>pagina di raccolta delle valutazioni sui generi letterari</b> che memorizza sul server e visualizza l’ultima valutazione inserita col <b>form di cui al punto 1 nella stessa sessione di lavoro</b> e propone le opzioni per “inserire una nuova valutazione” o passare alla “pagina di riepilogo”. Si assume che se l’utente invia <b>più di una volta</b> una valutazione <b>per lo stesso genere letterario nella stessa sessione</b>, la valutazione è uguale al <b>valore massimo fra quelli inseriti</b>;
3. una <b>pagina di riepilogo</b> che visualizzi la <b>lista delle valutazioni</b>, la <b>media delle valutazioni</b> e il <b>genere letteraio con la valutazione massima</b>. Nel caso ci siano <b>più generi letterari a cui corrisponde il valore massimo</b> di valutazione si visualizzino in ordine “alfabetico” e con accanto la dicitura “<b>pari merito!</b>”.
