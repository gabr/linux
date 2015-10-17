/*
; Pomysł, teksty: [[User:Dodek]], [[User:Adziura]]
; Wykonanie: [[User:Nux]], [[User:Saper]], [[User:Beau]]
*/

// FIXME: pozbyć się tego
importScript('MediaWiki:Api.js');

var wikiBugsGadget = {
	/**
	 * Numer wersji.
	 */
	version: 0,

	description: "Opisz błąd możliwie jak najdokładniej. Jeżeli masz taką możliwość, podaj źródło informacji.",
	/**
	 * Tytuły stron, których nie mogą dotyczyć zgłoszenia.
	 */
	badPages: new Array(
		"Wikipedia:Zgłoś błąd w artykule",
		"Wikipedia:Sprzątanie Wikipedii",
		"Wikipedia:Zgłoszone grafiki"
	),
	/**
	 * Define pages where it's not needed or tends to encourage submission of large
	 * volumes of unrelated errors; instead, these load CSS which hides Report A Bug
	 */
	excludedPages: new Array(
		"Strona_główna"
	),

	/**
	 * Funkcja sprawdza, czy nazwa strony, której dotyczy zgłoszenie jest poprawna.
	 * @param name Nazwa strony
	 */
	isValidPageName: function (name) {
		if (name == "")
			return false;

		if (name.substr(0, 10) == "Specjalna:")
			return false;

		name = name.replace(/_/g, " ");

		return jQuery.inArray( name, this.badPages ) == -1;
	},

	/**
	 * Funkcja inicjuje działanie gadżetu.
	 */
	init: function() {
		var excluded = false;

		// special pages and MediaWiki pages are excluded
	        if (mw.config.get('wgNamespaceNumber') == -1 || mw.config.get('wgNamespaceNumber') == 8) {
			excluded = true;
		} else {
			excluded = jQuery.inArray( mw.config.get('wgPageName'), this.excludedPages ) != -1;
	        }

		var articleBugLink = document.getElementById('n-bug_in_article');
		var imageBugLink = document.getElementById('n-bad-image');

		if (excluded) {
			// hide the link
			if (articleBugLink) articleBugLink.style.display = 'none';
			if (imageBugLink) imageBugLink.style.display = 'none';
			return;
		}
		if (articleBugLink) {
			var link = articleBugLink.getElementsByTagName('a')[0];
			link.onclick= wb$popWikibug;
			link.href= '#';
		}
		if (imageBugLink) {
			var link = imageBugLink.getElementsByTagName('a')[0];
			link.onclick= wb$popBadimagebug;
			link.href= '#';
		}

		//link on the report-an-error page itself
		var el = document.getElementById('report-bug-link');
		if (el)
			el.getElementsByTagName('a')[0].onclick= wb$popWikibug;
	}
};

jQuery(document).ready(function() { wikiBugsGadget.init() });

// FIXME: przerobić na metodę
function wb$popBadimagebug()
{
	wb$popBugBoth('\
<div style="float:right; width:200px; padding:4px 10px 18px; margin:2px 0px 0px 10px; font-size:95%; border:2px solid #900"><p>Formularz <b>nie służy</b> do zgłaszania próśb o rozwinięcie bądź stworzenie nowych artykułów. Zobacz stronę:</p><ul><li><a href="/wiki/Wikipedia:Propozycje_temat%C3%B3w">Propozycje tematów</a></li></ul><p>Wikipedia nie udziela jakichkolwiek porad na życzenie. Jeżeli masz jakąś prośbę o poradę, <b>nie zgłaszaj jej tutaj</b>.</p>\
<p>Informacje, jak skontaktować się z Wikipedią, można znaleźć na stronie:</p><ul><li><a href="/wiki/Wikipedia:Kontakt">Kontakt</a></li></ul></div>\
<p style="margin-top:0px;">Tu możesz zgłaszać grafiki, które łamią licencję, mają swoje lepsze odpowiedniki w Commons, są błędnie opisane itp.</p><p><b>Jeżeli potrafisz poprawić błąd - nie zgłaszaj go tutaj.</b></p>\
<p><b>Uwaga:</b> Jeśli zamieściłeś/-aś zgłoszenie przez ten formularz, a teraz go już nie ma, to najprawdopodobniej zostało ono uwzględnione.</p><ul><li><a href="/wiki/Wikipedia:Zg%C5%82o%C5%9B_b%C5%82%C4%85d_w_artykule">Zobacz listę zgłoszonych błędów</a> oraz</li><li><a href="/w/index.php?title=Wikipedia:Zg%C5%82o%C5%9B_b%C5%82%C4%85d_w_artykule&amp;action=history">historię zmian wprowadzanych na tej stronie</a></li></ul>\
');
	return false;
}

// FIXME: przerobić na metodę
function wb$popWikibug()
{
	wb$popBugBoth('\
<div style="float:right; width:200px; padding:4px 10px 18px; margin:2px 0px 0px 10px; font-size:95%; border:2px solid #900"><p>Formularz <b>nie służy</b> do zgłaszania próśb o rozwinięcie bądź stworzenie nowych artykułów. Zobacz stronę:</p><ul><li><a href="/wiki/Wikipedia:Propozycje_temat%C3%B3w">Propozycje tematów</a></li></ul><p>Wikipedia nie udziela jakichkolwiek porad na życzenie. Jeżeli masz jakąś prośbę o poradę, <b>nie zgłaszaj jej tutaj</b>.</p>\
<p>Informacje, jak skontaktować się z Wikipedią, można znaleźć na stronie:</p><ul><li><a href="/wiki/Wikipedia:Kontakt">Kontakt</a></li></ul></div>\
<p style="margin-top:0px;">Możesz zgłaszać znalezione błędy w artykułach w Wikipedii, jednak pamiętaj, że Wikipedia to <a href="/wiki/Wiki">wiki</a> i można, a nawet należy <a href="/wiki/Wikipedia:%C5%9Amia%C5%82o_modyfikuj_strony">śmiało poprawiać znalezione błędy samemu</a>. Zdajemy sobie jednak sprawę z faktu, że niektórzy czytelnicy Wikipedii mogą z różnych przyczyn nie chcieć samodzielnie poprawiać artykułów.</p><p><b>Jeżeli potrafisz poprawić błąd – nie zgłaszaj go tutaj.</b></p>\
<p><b>Uwaga:</b> Jeśli zamieściłeś/-aś raport o błędzie, a teraz go już nie ma, to najprawdopodobniej został on naprawiony. </p><ul><li><a href="/wiki/Wikipedia:Zg%C5%82o%C5%9B_b%C5%82%C4%85d_w_artykule">Zobacz listę aktualnie zgłoszonych błędów</a> oraz</li><li><a href="/w/index.php?title=Wikipedia:Zg%C5%82o%C5%9B_b%C5%82%C4%85d_w_artykule&amp;action=history">historię zmian wprowadzanych na tej stronie.</a></li></ul>\
');
	return false;
}

// FIXME: przerobić na metodę
function wb$checkForm(form)
{
	var form = document.forms['WikibugForm'];
	var page = form.wpSummary.value;
	var content = form.wpTextbox1.value;

	if (content == wikiBugsGadget.description || content.length < 20 || !content.match(' '))
	{
	    //Opis za krótki albo niezmieniony
		alert("Opisz dokładnie zgłaszany błąd - wprowadzony opis jest za krótki.");
		form.wpTextbox1.focus();
		return false;
	}

	var pageTitle; //title of the reported page
	var isFile = false; //is the reported page a file?

	content = $j.trim(content);

	//signature
	if (mw.config.get('wgUserName') != null)
		content += ' Zgłasza: ~' +'~'+'~'+'~';
	else
		content += ' Zgłasza: '+form.author.value+' ~' +'~'+'~'+'~';

	if (page == mw.config.get('wgPageName') && wikiBugsGadget.isValidPageName(mw.config.get('wgPageName'))) {
		//user hasn't changed the page tilte - we're reporting the current page
		//page = page.replace(/^Grafika:/, "");
		page = page.replace(/_/g, " ");
		page = "[[:" + mw.config.get('wgPageName') + "|" + page + "]]";
		pageTitle = mw.config.get('wgPageName'); //we're reporting the current page

		if (mw.config.get('wgNamespaceNumber') == 6)
		{
			isFile = true;
		}
	}
	else {
		//user has changed the page title - we're reporting the manually-specified page
		page = page.replace(/_/g, " ");
		page = page.replace(/[\[\]\|]/g, "");
		page = page.replace(/^\s+/g, "");
		page = page.replace(/\s+$/g, "");

		if (! wikiBugsGadget.isValidPageName(page) ) {
			alert("Podaj nazwę strony.");
			if ( wikiBugsGadget.isValidPageName(mw.config.get('wgPageName')) ) {
				form.wpSummary.value = mw.config.get('wgPageName');
			} else {
				form.wpSummary.value = "";
				form.wpSummary.focus();
			}
			return false;
		}

		pageTitle = page; //we're reporting the page specified manually by the user
		page = '[[:' + page + ']]';

		if (pageTitle.indexOf('Plik:') == 0 || pageTitle.indexOf('Grafika:') == 0 ||
				pageTitle.indexOf('File:') == 0 || pageTitle.indexOf('Image:') == 0)
		{
			//user's typed a name of a file
			isFile = true;
		}
	}

	form.submit.disabled = 'disabled';
	var loadingIcon = document.getElementById('wikibugs-loading-icon');
	loadingIcon.style.display = 'inline';

	//form.wpTextbox1.value = content;
	//form.wpSummary.value = page;
	var toInsert = '=== ' + page + ' ===\n' + content;

	//initialise the API
	var api = JsMwApi("/w/api.php");
	//get the page object
	var pageHandler = api.page("Wikipedia:Zgłoś błąd w artykule");

	//EDIT THE "REPORT AN ERORR" PAGE
	pageHandler.edit(function(text, save_function, res) {
		//process the wikitext of the page
		var sectionLine;
		if(isFile)
			sectionLine = '<!-- Zgłoszenia błędów w plikach wstawiaj poniżej tej linii. Nowe na górze. -->';
		else
			sectionLine = '<!-- Zgłoszenia błędów w artykułach wstawiaj poniżej tej linii. Nowe na górze. -->';

		var newText = text.replace(sectionLine, sectionLine + '\n\n' + toInsert);
		if (text == newText) //could not find the section line - simply append;
			newText = text + '\n\n' + toInsert;

		//save the new content
		save_function(
			newText,
			{summary: 'Nowe zgłoszenie: ' + page, minor: false},
			function(res) {
				if(res && res.edit && res.edit.result && res.edit.result == 'Success')
				{
					//saved successfully - go to the report page
					window.location = mw.config.get('wgServer') +
						mw.config.get('wgArticlePath').replace('$1',
							'Wikipedia:Zgłoś_błąd_w_artykule#' +
								encodeURIComponent(
									encodeURI(pageTitle).replace(/%/g, '.')
								).replace(/%/g, '.').replace(/\.3A/g, ':').
								replace(/\.20/g, '_').
								replace(/\(/g, '.28').replace(/\)/g, '.29')
						);

					if (mw.config.get('wgPageName') === 'Wikipedia:Zgłoś_błąd_w_artykule')
					{
						//we're already there
						window.location.reload();
					}
				}
				else
				{
					//handle the error
					alert('Wystąpił błąd podczas wysyłania zgłoszenia. Proszę spróbować jeszcze raz.');
					form.submit.disabled = '';
					loadingIcon.style.display = 'none';
				}
			}
		);
	});

	return true;
}

// FIXME: przerobić na metodę
function wb$goToEditPage()
{
        var edit_el = document.getElementById('ca-edit');
        var edit_href = "http://pl.wikipedia.org/wiki/Wikipedia:Zg%C5%82o%C5%9B_b%C5%82%C4%85d_w_artykule";
	if (edit_el)
 	{
 	     edit_href = edit_el.getElementsByTagName('a')[0].href;
 	}
        window.location = edit_href;
}

// FIXME: przerobić na metodę
function wb$closeForm()
{
	wb$elementsRemove('specpop-info', 'specpop-form', 'specpop-globhidden', 'specpop-pos');
}

// FIXME: przerobić na metodę
function wb$popBugBoth(infoHTML)
{
	var glob = document.body;
	//
	// przysłaniacz
	var nel = document.createElement('div');
	nel.id='specpop-globhidden'
	nel.style.cssText = 'background:white;filter:alpha(opacity=75);opacity:0.75;position:absolute;left:0px;top:0px;z-index:2000';
	nel.style.width = document.documentElement.scrollWidth+'px';
	nel.style.height= document.documentElement.scrollHeight+'px';
	glob.appendChild(nel);
	//
	// przesunięcie okna
	window.scroll(0, 150);

	//
	// informacja

        var edit_el = document.getElementById('ca-edit');
	if (edit_el)
 	{
            var can_edit = true;
 	}
        else var can_edit = false;

	nel = document.createElement('div');
	nel.id='specpop-info'
	nel.style.cssText = 'font-size:13px;background:white;padding:14px 20px;border:1px solid black;position:absolute;width:600px;min-height:300px;top:200px;z-index:2002;';
	if (nel.style.maxHeight==undefined)	nel.style.height='300px'; // IE blah...
	var tmp = Math.floor(glob.clientWidth/2)-300;
	if (tmp<5) tmp	= 5;
	nel.style.left	= tmp + 'px';
	nel.innerHTML	= infoHTML + '<p><b>Uwaga:</b> Twój adres IP zostanie zapisany w historii zgłoszeń.</p>\
		<p style="text-align:center;margin-top:15px">\
                '+(can_edit ? '<input type="button" value="Popraw samodzielnie" onclick="wb$goToEditPage()" />' : '')+ '\
		<input type="button" value="Przejdź do formularza" onclick="wb$elementsRemove(\'specpop-info\');"/>&nbsp;&nbsp;&nbsp;\
		<input type="button" value="Anuluj" onclick="wb$closeForm();"/>\
	</p>';
	glob.appendChild(nel);

	//
	// formularz

	nel = document.createElement('div');
	nel.id='specpop-form'
	nel.style.cssText = 'background:white;padding:5px 10px;border:1px solid black;position:absolute;width:330px;min-height:300px;top:200px;z-index:2001';
	if (nel.style.maxHeight==undefined)	nel.style.height='300px'; // IE blah...
	nel.style.left	= (Math.floor(glob.clientWidth/2)-165)+'px';
	//nel.style.top	= (this.offsetTop-100)+'px';
	nel.innerHTML	='<form name="WikibugForm" id="fm1" enctype="multipart/form-data"">\
		Nazwa strony:<br/><small>(razem z "Plik:", jeżeli zgłaszasz błąd w pliku)</small><br /><input type="text" name="wpSummary" id="ReportTitle" style="width:320px;" /><br />\
		Treść zgłoszenia:<br /><textarea id="TextBox" name="wpTextbox1" style="width:320px;height:200px" onfocus="if (this.value == wikiBugsGadget.description) {this.value = \'\';}">' + wikiBugsGadget.description + '</textarea><br />\
		Podpis:<input type="text" name="author" id="wikibug-input-author" /><br />\
                <input type="button" id="submit" value="Wyślij" onclick="wb$checkForm()"/> &nbsp; \
		<input type="button" value="Anuluj" onclick="wb$closeForm();" />\
		<img id="wikibugs-loading-icon" src="http://upload.wikimedia.org/wikipedia/commons/4/49/Linux_Ubuntu_Loader.gif" style="display:none;"/>\
	</form>';
	glob.appendChild(nel);

	if (wikiBugsGadget.isValidPageName(mw.config.get('wgPageName')))
		document.getElementById('ReportTitle').value = mw.config.get('wgPageName');

	if (mw.config.get('wgUserName') != null) {
		var author = document.getElementById("wikibug-input-author");
		author.value = '~'+'~'+'~'+'~';
		author.disabled = 'disabled';
	}
}

// FIXME: przerobić na metodę
function wb$elementsRemove()
{
	var el;
	for (var i=arguments.length-1; i>=0; i--)
	{
		el = document.getElementById(arguments[i]);
		if (el) el.parentNode.removeChild(el);
	}
}