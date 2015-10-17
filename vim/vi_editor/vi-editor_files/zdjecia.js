function galeria(id,w,h) {

var wysokosc = screen.width /2 - (w /2);
var szerokosc = screen.height /2 - (h /2);

config='toolbar=no,location=no,directories=no,status=no,menubar=no,width=' +w+ ',height=' +h+ ',left=' +wysokosc+ ',top=' +szerokosc+ ''
config += 'scrollbars=no,resizable=no'
pop = window.open ("","pop",config)

pop.document.write('<script language="javascript">');
pop.document.write('setTimeout(');
pop.document.write('self.close()');
pop.document.write(';",7000)');
pop.document.write('</');
pop.document.write('script>');
pop.document.write('<TITLE>Linux.pl</TITLE>');
pop.document.write('<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=iso-8859-2">');
pop.document.write('<body bgcolor="#FFFFFF" LEFTMARGIN="0" RIGHTMARGIN="0" TOPMARGIN="0" BOTTOMMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">');
pop.document.write('<a href="javascript:window.close()"><IMG SRC="' +id+ '" BORDER="0" ALT="kliknij aby zamknąć"></A>');
pop.document.write('</body>');
}