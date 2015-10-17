/*
    copyright:  (C) 2010 Maciej Jaros (pl:User:Nux, en:User:EcceNux)
    licence:    GNU General Public License v2,
                http://opensource.org/licenses/gpl-license.php
            OR
                CC-BY-SA
                http://creativecommons.org/licenses/by-sa/3.0/deed.pl
*/
//
// Config
//
oVMSwitch = {
	strCSS : 'MediaWiki:Vector4monobookies.css',
	strCookie: 'js_vm_switch',
	strSwitchElId: 'vm_switch_btn',
	isDisabled: true,
	elCSS : null
}

if (wgUserLanguage=='pl')
{
	oVMSwitch.oLang = {
		'switch_back_title' : 'Przełącz się na stary układ stron',
		'switch_back_link' : 'Stary układ stron',
		'switch_fwd_title' : 'Przełącz się z powortem na nowy układ stron',
		'switch_fwd_link' : 'Nowy układ stron',
		'switch_fwd_ie_old' : ''
			+'Twoja przeglądarka nie potrafi przełączyć się bez przeładowania strony.'
			+'\n\nJeśli chcesz przeładować stronę teraz, to naciśnij OK.'
			+'\nJeśli chcesz przeładować stronę później, to naciśnij Anuluj (układ strony zostanie zmieniony później).'
	}
}
else
{
	oVMSwitch.oLang = {
		'switch_back_title' : 'Quickly switch back to the old layout',
		'switch_back_link' : 'Old layout',
		'switch_fwd_title' : 'Quickly switch to the new layout',
		'switch_fwd_link' : 'New layout',
		'switch_fwd_ie_old' : ''
			+'Your browser is not able to make the switch without reloading a page.'
			+'\n\nIf you want reload now, click OK.'
			+'\nIf you want to reload later, click Cancel (the layout will be changed later).'
	}
}

//
// Cookie adder
// options are optional
oVMSwitch.addLongTermCookie = function (name, value, options)
{
	// options
	if (typeof(options)!='object')
	{
		options = new Object();
	}
	var days = (options.days) ? options.days : 7;
	var path = (options.path) ? options.path : '/';
	
	// setup date
	var dt = new Date();
	dt = new Date(dt.getTime()+days*24*3600000); //(ilość sekund * 1000)
	
	// set
	document.cookie = name+"="+value+"; path="+path+"; expires=" + dt.toGMTString();
}

//
// Cookie setup stuff
//
oVMSwitch.setupCookie = function ()
{
	this.strCookieVal = '';
	this.reCook = new RegExp("(^|[ ;])"+this.strCookie+"=(.*?)(;|$)");
	if (document.cookie.search(this.reCook)!=-1)
	{
		var _this = this;
		document.cookie.replace(this.reCook,
			function(a, s, val, e)
			{
				_this.strCookieVal = val;
			}
		)
		// re-set cookie
		oVMSwitch.addLongTermCookie(this.strCookie, this.strCookieVal);
	}
	// setup default state
	if (this.strCookieVal != 'on') // defaults to off
	{
		this.isDisabled = true;
	}
	else
	{
		this.isDisabled = false;
	}
}


//
// go back 2 monobook like layout function
//
oVMSwitch.goBack = function ()
{
	oVMSwitch.addLongTermCookie(this.strCookie, "on");

	//
	// add stylesheet (if not already added)
	if (this.elCSS==null || this.elCSS.parentNode == undefined)
	{
		this.elCSS = importStylesheet(this.strCSS);
	}
	
	//
	// search
	try
	{
		var el;
		el = document.getElementById('p-search');
		var panel = document.getElementById('mw-panel');
		panel.insertBefore(el, panel.firstChild);
		panel.style.cssText = 'padding-top:0';
		document.getElementById('p-search').style.cssText = "float:none;"
		document.getElementById('searchInput').style.cssText = 'width:75%';
		document.getElementById('searchButton').style.cssText = 'float:right;position:relative;right:3px';
	} catch(e) {}
	
	//
	// move dropdown menu to plain
	try
	{
		var menu_roz = document.getElementById('p-views').getElementsByTagName('ul')[0];
		var menu_zwi_els = document.getElementById('p-cactions').getElementsByTagName('li');
		var before_el = document.getElementById('ca-history').nextSibling;
		while (menu_zwi_els.length)
		{
			menu_zwi_els[0].className += ' moved_from_dropdown';
			if (menu_zwi_els[0].firstChild.nodeName.toLowerCase()!='span')
			{
				var nel = document.createElement('span');
				nel.appendChild(menu_zwi_els[0].getElementsByTagName('a')[0]);
				menu_zwi_els[0].appendChild(nel);
			}
			menu_roz.insertBefore(menu_zwi_els[0], before_el);
		}
		document.getElementById('p-cactions').style.display = 'none';
	} catch(e) {}
}

//
// go back 2 monobook like layout function
//
oVMSwitch.goFwd = function ()
{
	oVMSwitch.addLongTermCookie(this.strCookie, "off");
	
	//
	// IE < 8 does not remove stylesheets
	if (jQuery.browser.msie && jQuery.browser.version<8)
	{
		if (confirm(this.oLang.switch_fwd_ie_old))
		{
			window.location.reload(false);	// reload from cache
		}
		else
		{
			var el = document.getElementById(this.strSwitchElId);
			el.style.display = 'none';
		}
	}

	//
	// remove stylesheet
	if (this.elCSS!=null && this.elCSS.parentNode != undefined)
	{
		this.elCSS.parentNode.removeChild(this.elCSS);
	}

	//
	// search
	try
	{
		var el;
		el = document.getElementById('p-search');
		var panel = document.getElementById('right-navigation');
		panel.appendChild(el);
		panel.style.cssText = '';
		document.getElementById('p-search').style.cssText = ""
		document.getElementById('searchInput').style.cssText = '';
		document.getElementById('simpleSearch')
			.getElementsByTagName('label')[0].style.cssText='padding: 0.25em; position: absolute; bottom: 0px; color: rgb(153, 153, 153); cursor: text; left: 0px;';
	} catch(e) {}

	//
	// move some menu elements back to the dropdown
	try
	{
		var wasSomethingMoved = false;
		var menu_roz_els = document.getElementById('p-views').getElementsByTagName('ul')[0].getElementsByTagName('li');
		var menu_zwi_el = document.getElementById('p-cactions').getElementsByTagName('ul')[0];
		for (var i=0; i<menu_roz_els.length; i++)
		{
			var elM = menu_roz_els[i];
			if (elM.className.indexOf('moved_from_dropdown')!=-1)
			{
				wasSomethingMoved = true;
				elM.className = elM.className.replace(/[ ]*moved_from_dropdown/g, '');
				if (elM.firstChild.nodeName.toLowerCase()=='span')
				{
					var elA = elM.getElementsByTagName('a')[0];
					elM.removeChild(elM.firstChild);
					elM.appendChild(elA);
				}
				menu_zwi_el.appendChild(elM);
				i--;
			}
		}
		if (wasSomethingMoved)
		{
			document.getElementById('p-cactions').style.display = 'block';
		}
	} catch(e) {}
}

//
// init (onload) - adds a switch button
//
oVMSwitch.init = function ()
{
	var elBefore = document.getElementById('p-personal').getElementsByTagName('ul')[0].getElementsByTagName('li')[0];
	if (elBefore)
	{
		var ellink = document.createElement('a');
		ellink.innerHTML = this.isDisabled ? this.oLang.switch_back_link : this.oLang.switch_fwd_link;
		ellink.title = this.isDisabled ? this.oLang.switch_back_title : this.oLang.switch_fwd_title;
		ellink.id = this.strSwitchElId;
		ellink.href = 'javascript:oVMSwitch.toogleDisablance()';
 
		var nel = document.createElement('li');
		nel.id = "pt-vm-switch";
		nel.appendChild(ellink);
		elBefore.parentNode.insertBefore(nel, elBefore);
	};
}

//
// Toogle state
//
oVMSwitch.toogleDisablance = function ()
{
	// set state
	this.isDisabled = !this.isDisabled;
	this.strCookieVal = this.isDisabled ? 'off' : 'on';
	oVMSwitch.addLongTermCookie(this.strCookie, this.strCookieVal);
	if (this.isDisabled)
	{
		this.goFwd();
	}
	else
	{
		this.goBack();
	}

	// set button texts
	var el = document.getElementById(this.strSwitchElId);
	el.innerHTML = this.isDisabled ? this.oLang.switch_back_link : this.oLang.switch_fwd_link;
	el.title = this.isDisabled ? this.oLang.switch_back_title : this.oLang.switch_fwd_title;
}

//
// RUN
//
oVMSwitch.setupCookie();
if (!oVMSwitch.isDisabled)
{
	oVMSwitch.elCSS = importStylesheet(oVMSwitch.strCSS);
	hookEvent("load", function()
	{
		oVMSwitch.goBack();
	});
}
hookEvent("load", function()
{
	if (!window.isVMSdisabled)
		oVMSwitch.init();
});