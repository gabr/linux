/**
 * Funkcje pomocnicze do phpBB3
 * 
 * autor: mario_7, ubuntu.pl
 * licencja: GPL
 **/

/*
 * Szybki wybór działu Purgatory podczas przenoszenia tematów
 */
function wybierz_purgatory() {
	$('select[name="to_forum_id"] option[value="128"]:enabled').attr('selected', 'selected');
    $('#nts_move_reason').val('Twój temat łamie zasady panujące na forum, więc został przeniesiony do działu Purgatory (czyli de facto został usunięty). Uzasadnienie podane jest w ostatnim dodanym przez moderatora lub administratora poście w Twoim temacie.');
}
