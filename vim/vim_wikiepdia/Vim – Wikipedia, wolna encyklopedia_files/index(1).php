headingIconGadget = {
	enabled: true,
	firstHeading: null,
	allElements: []
};

headingIconGadget.sortWeights = {
	editsection: 1,
	padlock: 2,
// other = 5
	coordinates: 10,
	shortcut_upper: 11
};

headingIconGadget.findFirstHeading = function() {
	if (!this.enabled || this.firstHeading)
		return;

	this.firstHeading = document.getElementById('firstHeading');

	if (!this.firstHeading)
		this.enabled = false;
}

headingIconGadget.append = function(element) {
	this.findFirstHeading();
	if (!this.enabled)
		return;

	var sortKey = 5;
	if (this.sortWeights[element.id]) {
		sortKey = this.sortWeights[element.id]
	}
	else if (this.sortWeights[element.className]) {
		sortKey = this.sortWeights[element.className];
	}

	this.allElements.push({
	    'element': element,
	    'sortKey': sortKey
	});

	this.firstHeading.insertBefore(element, this.firstHeading.firstChild);
}

headingIconGadget.grab = function() {
	this.findFirstHeading();
	if (!this.enabled)
		return;

	var list1 = getElementsByClassName(document, "div", "put-in-header");
	var list2 = getElementsByClassName(document, "span", "put-in-header");
	var list = list1.concat(list2);
	for (var i=0; i<list.length; i++) {
		var element = list[i];
		element.style.cssText = 'position:static; display:inline-block; float:right; padding:3px 5px; font-size:x-small;';
		this.append(element);
	}
}

// correction in 0-section edit link
headingIconGadget.fix0SectionEdit = function() {
	if (this.allElements.length == 0)
		return;

	try {
		var el0SecEdit = getElementsByClassName(this.firstHeading, "div", "editsection");
		el0SecEdit = el0SecEdit[0];
		el0SecEdit.style.cssText = 'padding:.7em 0 0 1.0em; float:right; font-size:x-small;';
		this.append(el0SecEdit);
	} catch (e) {}
}

/**
 * Wyświetlanie kłódki w prawym górnym rogu kiedy
 * strona jest zabezpieczona
 */
headingIconGadget.padlockIcon = function() {
	// na stronie głównej nie pokazujemy kłódki
	if (wgTitle == wgMainPageTitle)
		return;

	// brak zabezpieczeń?
	if (typeof(wgRestrictionEdit) != 'object' || wgRestrictionEdit.length<1 || wgRestrictionEdit[0] == "")
		return;

	// wydruk?
	if (document.location.href.match(/printable=yes/))
		return;

	var img = document.createElement('img');
	if (wgRestrictionEdit[0] == "autoconfirmed") {
		img.src = "http://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Padlock-light-silver.svg/22px-Padlock-light-silver.svg.png";
		img.title = "częściowe zabezpieczenie";
	}
	else if (wgRestrictionEdit[0] == "sysop") {
		img.src = "http://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Padlock.svg/22px-Padlock.svg.png";
		img.title = "pełne zabezpieczenie";
	}
	img.alt = "padlock";

	var link = document.createElement('a');
	link.id = "padlock";
	link.href = wgArticlePath.replace("$1", "Wikipedia:Strona_zabezpieczona");
	link.style.cssText = 'position:static; display:inline-block; float:right; padding:3px 5px; font-size:x-small;';
	link.appendChild(img);

	this.append(link);
}

headingIconGadget.sortElements = function() {
	if (!this.enabled || this.allElements.length<2)
		return;

	// sort array
	this.allElements.sort(function(a, b) {
		return a.sortKey - b.sortKey;
	});

	// sort elements
	for (var i=this.allElements.length-1; i>=0; i--)
	{
		this.firstHeading.insertBefore(this.allElements[i].element, this.firstHeading.firstChild);
	}
}

headingIconGadget.init = function() {
	headingIconGadget.grab();
	headingIconGadget.padlockIcon();
	headingIconGadget.fix0SectionEdit();
	headingIconGadget.sortElements();
}

hookEvent( 'load', function() {
	if (typeof(wikiminiatlas)=='object' && typeof(wikiminiatlas.loader)=='function' && document.getElementById('coordinates') && document.getElementById('coordinates').getElementsByTagName('img').length<1)
	{
		wikiminiatlas.oldhookUpMapbutton = wikiminiatlas.hookUpMapbutton;
		wikiminiatlas.hookUpMapbutton = function (mb) {
			mb.onload = headingIconGadget.init;
			wikiminiatlas.oldhookUpMapbutton(mb);
		}
	}
	else
	{
		headingIconGadget.init();
	}
});