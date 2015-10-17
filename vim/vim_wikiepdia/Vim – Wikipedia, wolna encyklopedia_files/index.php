// Mini-Mapka z Openstreetmap
// based on Magnus Manske GPL code from dewiki
// by Saper & Nux
addOnloadHook(function () {
	var splist, alist;
	var sp, a, cl;
	var i, j;
	var URL = "http://toolserver.org/~kolossos/openlayers/kml-on-ol.php?lang=pl&uselang=" + wgUserLanguage;
	if (wgServer == "https://secure.wikimedia.org")
		URL += "&secure=1";
	
	var lang = {
		'pl' : {
			'link info' : 'wyświetl (lub ukryj) mapkę wewnątrz artykułu',
			'show map' : 'pokaż mapę',
			'hide map' : 'ukryj mapę'
		},
		'en' : {
			'link info' : 'display (or hide) a map inside this article',
			'show map' : 'show map',
			'hide map' : 'hide map'
		}
	}
	// choose locale
	lang = (typeof(lang[wgUserLanguage])=='object') ? lang[wgUserLanguage] : lang['pl'];
	
	// show/hide OSM frame
	var osmframe = function(maplink) {
		var cs = document.getElementById("contentSub");
		var osm = document.getElementById("openstreetmap");
		if (!osm) {
			var osm = document.createElement("iframe");
			osm.id = "openstreetmap";
			osm.src = maplink.href;
			if (cs) {
				cs.appendChild(osm);
			}
		} else {
			osm.style.display = (osm.style.display == "none") ? "block" : "none";
		}
		maplink.innerHTML = (osm.style.display == "none") ? lang['show map'] : lang['hide map'];
	};
	
	// button
	$j('span.coordinates').each(function(i) {
		sp = this;
		alist = sp.getElementsByTagName("a");
		for (j = 0; j < alist.length; j++) {
			a = alist.item(j);
			if (a.href.match(/geohack/)) {
				var na = document.createElement("a");
				na.title = lang['link info'];
				na.href = URL + "&params=" + a.href.split("params=")[1];
				na.appendChild(document.createTextNode(lang['show map']));
				sp.appendChild(document.createTextNode(" ("));
				sp.appendChild(na);
				sp.appendChild(document.createTextNode(") "));
				$j(na).bind("click", function(evt) {
					osmframe(this);
					evt.preventDefault();
					evt.stopPropagation();
				});
			}
		}
	});
});