<form method="post" action="./lettura_dati/dati_Inserimento.php">
    <h2 style="text-align: center">INSERMENTO</h2>
    <label for="name">Inserisci titolo</label>
    <input type="text" id="name" name="name" required placeholder="Titolo del libro">

    <label for="autore">Inserisci autore</label>
    <input type="text" id="autore" name="autore" required placeholder="Autore del libro">

    <label for="genere">Inserisci genere</label>
    <input type="text" id="genere" name="genere" required placeholder="Genere del libro">

    <label for="prezzo" >Inserisci prezzo</label>
    <input type="number" id="prezzo" name="prezzo" required placeholder="Prezzo del libro" step="0.01">

    <label for="data">Inserisci data di pubblicazione</label>
    <input type="date" id="data" name="data" required>

    <button type="submit">Clicca per inviare</button>
</form>
