<p class="color: red">ISTALLAZIONE</p>
Assicuratevi di aver installato e configurato tutto il necessario:
dopo un riavvio tattico testate da terminale php -v e composer -v che non devono restiture errori.
In caso di problemi vi rimando ai passaggi visti a lezione.

<p class="color: blu">CONFIGURAZIONE</p>
Aprite il php.ini e assicuratevi che le seguenti righe siano decommentate, cioè non inizino con ";"
extension=curl
extension=fileinfo
extension=mbstring
extension=mysqli
extension=pdo_mysql
extension=openssl
extension=zip
Aiutatevi con CTRL+F per trovare la sezione giusta del file.

<p class="color: green">CREAZIONE PROGETTO</p>
Per prima cosa, creiamo un nuovo progetto Laravel 10, utilizzando questo comando:
composer create-project laravel/laravel:^10.0 . <-- se siete già nella cartella del progetto
composer create-project laravel/laravel:^10.0 nomeprogetto <-- sevolete che venga creato il progetto

<p class="color: orange">AVVIO PROGETTO</p>
Al termine dell'installazione, se non abbiamo ricevuto errori ci assicuriamo di essere nella cartella del progetto col terminale e lanciamo:
php artisan serve
Nel caso questo non funzioni usate
php -S localhost:8000 -t public
MODIFICHE AL PROGETTO: VIEWS
A questo punto, iniziamo a prendere confidenza con le views.
Svuotate il file resources/views/welcome.blade.php e scrivete una vostra pagina di benvenuto in HTML e CSS.
Se avete necessita di importare CSS o immagini dovrete creare quei file nella cartella /public almeno per ora.

<p class="color: gold">BONUS</p>
Date uno sguardo al file routes/web.php. Qui sono elencate le pagine dell'applicazione e i nomi dei file a cui corrispondono.
Per ora la rotta / corrisponde al file resources/views/welcome.blade.php , quindi in pratica localhost:8000/ carica il file welcome.
Provate a creare un nuovo file resources/views/altro.blade.php e a fare in modo che venga caricato quando visitiamo /altro.