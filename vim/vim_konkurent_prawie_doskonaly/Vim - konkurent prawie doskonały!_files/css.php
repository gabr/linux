@charset "UTF-8";
/* CSS Document */

/**
* Custom CSS by Forumthemes.com
*/

/* Misc Resets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
img {
	border:0;
}
.verticalAlign {
	vertical-align:middle;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
html[xmlns] .clearfix {
	display: block;
}
* html .clearfix {
	height: 1%;
}
.lastPostIMG {
	position:relative;
	top:2px;
}

#memberlist #searchstats {color:#fff;}

/************************************************************************/
*{ -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }

#forums *, #wgo *, #forumbits * {
	-moz-border-radius: 0 !important;
	-webkit-border-radius: 0 !important;
}
#fb_headerbox {
	padding-right:5px;
}
.cvb_facebook {
padding-top:2px;
}
.wgo_block {
	margin:0;
}
.navbar {
	-moz-border-radius-bottomleft: 0 !important;
	-moz-border-radius-bottomright: 0 !important;
	-webkit-border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important;
}

.announcements {
	margin-top:10px;
}
.highlight {
	background-image:none;
}
.forumbit_nopost.row1 .forumrow, .forumbit_post.row1 .forumrow {
	background: #fdfdfd url(images/styles/ShinyGreen/style/forumRowBG.gif) repeat-x left bottom;
	border:1px solid #d8d5cc;
	border-top:0;
}
.forumbit_nopost.row2 .forumbit_nopost .forumrow, .forumbit_post.row2 .forumrow {
	background: #f6f6f6;
	border-top:0;
	border:1px solid #d8d5cc;
}
.threadbit.row1 .nonsticky{
	background: #fdfdfd url(images/styles/ShinyGreen/style/forumRowBG.gif) repeat-x left bottom;
}
.threadbit.row2 .nonsticky{
	background: #f6f6f6;
}
.threadbit .sticky .alt {

}
.threadbit.row1 .nonsticky .alt {
	background:#f9f9f9;
}
.threadbit.row2 .nonsticky .alt {
	background:#efefef;
}
.navlinksBox {
	text-align: center;
	color: #5d5d5d;
	font-size: 11px;
        font-weight:700;
        margin-top: 8px;
        margin-bottom: 0;
        width:100%;
        clear:both;
}

.forumrow .forumtitle a:link, .forumrow .forumtitle a:visited {
	color:#274511;
	font: 14px arial, helvetica, sans-serif;
}
.forumrow .forumtitle a:hover{
	color:#587c1d;
}
.forumrow .lastposttitle a:link, .forumrow .lastposttitle a:visited {
	color:#353535;
	font-weight:700;
}
.forumrow .lastposttitle a:hover{
	color:#587c1d;
}

#forums .lastpostby a.username {
	color:#587c1d;
}

#forums .lastpostby a.username:hover {
	color:#274511;
}

.bodyWrap {
	background:#fff;
	margin:0 2px;	
}
.body_wrapper {
	padding:10px 0;
	margin:0;
}
.above_body {
	padding:0;
	margin:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border-top:0;
}

/* Page Wrapper
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#pageWrapper {}

/* Top Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#topBar {
	height:41px;
	color:#fff;
	font-size:12px;
	font-weight:700;
}
#topBar .toplinks ul.isuser .popupbody li {
	color:#3a3a3a;
}
#topBar .topWelcome a:link, #topBar .topWelcome a:visited {
	color:#ffe88b;
}
#topBar .topWelcome a:hover {
	color:#fff;
}
.topWelcome {
	float:left;
	padding-top:13px;
}
#topBar label, #topBa .label {
	padding:0;
}
.memberBox {
	float:right;
	padding-top:6px;
	line-height:27px;
}
.memberBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.memberBox li {
	float:left;
	margin:0;	
	padding:0 3px;	
}
.loginBoxInput {
	background:url(images/styles/ShinyGreen/style/loginBoxInput.gif) no-repeat top left;
	width:118px;
	height:23px;
}
.loginInput {
	background:transparent;
	border:0;
	color: #101316;
	font-size:12px;
	width:108px; 
	padding:0 5px;
	height:23px;
	line-height:23px;
}
.rememberMe {color:#fff;}
.memberBox .rememberMe {}
.memberBox .rememberMe input {
	vertical-align: baseline;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}
.inputPad .loginBoxInput {
	margin-top:3px;
}
.inputPad {
	padding:0 4px;	
}
.submitPad input {
	margin:0;
	padding:0;
}
.loginTxt {
	padding-left:6px;
	color:#fff;
}
.loginLeft {
float:left;
}


/* Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.above_body {
	background:none;

}
.doc_header {
	height:126px;
}
#headerMain {
	height:126px;
}
.headerBox {
	background:url(images/styles/ShinyGreen/style/headerBoxBG.jpg) no-repeat top left;
	height:99px;
	padding:27px 0 0 350px;
	position:relative;	
}
#logo {
	position:absolute;
	top:0;
	left:4px;
}

/* Content
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#contentTop {
	background:url(images/styles/ShinyGreen/style/contentTopBG.gif) repeat-x top left;
	height:126px;
	position:relative;
}
.contentTopLeft {
	background:url(images/styles/ShinyGreen/style/contentTopLeft.gif) no-repeat top left;
	height:126px;
}
.contentTopRight {
	background:url(images/styles/ShinyGreen/style/contentTopRight.gif) no-repeat top right;
	height:116px;
	padding:10px 16px 0 16px;
}
#contentTop h3 {
	padding:0;
	margin:0;
	font-size:15px;
	color:#161616;
	height:45px;
	line-height:45px;
}
#contentMain {
	background:#fff url(images/styles/ShinyGreen/style/contentBottomBG.gif) repeat-x bottom left;
	margin-bottom:5px;
}
.contentLeft {
	background:url(images/styles/ShinyGreen/style/contentLeft.gif) repeat-y top left;
}
.contentRight {
	background:url(images/styles/ShinyGreen/style/contentRight.gif) repeat-y top right;
}
.contentTL {
	background:url(images/styles/ShinyGreen/style/contentTL.gif) no-repeat top left;
}
.contentTR {
	background:url(images/styles/ShinyGreen/style/contentTR.gif) no-repeat top right;
}
.contentBL {
	background:url(images/styles/ShinyGreen/style/contentBL.gif) no-repeat bottom left;
}
.contentBR {
	background:url(images/styles/ShinyGreen/style/contentBR.gif) no-repeat bottom right;
}
.contentBody {
	padding:9px 12px 13px 12px;
}
.welcomeBox {
	padding-right:245px;
}
.welcomeBody {
	background:#f6f0d5;
	border:1px solid #d3caa3;
	color:#7f663a;
	font-size:13px;
	line-height:14px;
	padding:5px 14px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;	
/*
	background:#f6f0d5;
	border:1px solid #d3caa3;
	color:#7f663a;
	font-size:13px;
	line-height:22px;
	padding:5px 14px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;	
*/
}
.welcomeBody a:link, .welcomeBody a:visited {
	color:#315815;
	font-weight:700;
}
.welcomeBody a:hover {
	color:#274511;
}
#contentTop .welcomeBox h3 {
	background:url(images/styles/ShinyGreen/style/iconWelcome.gif) no-repeat left;
	padding:0 0 0 42px;
}
.searchBox {
	background:url(images/styles/ShinyGreen/style/searchHeading.gif) no-repeat top left;
	position:absolute;
	top:10px;
	right:16px;
	width:230px;
}
#contentTop .searchBox h3 {
	background:url(images/styles/ShinyGreen/style/iconSearchBox.gif) no-repeat left;
	padding:0 0 0 32px;
}
.searchBoxInput {
	background: url(images/styles/ShinyGreen/style/searchInput.gif) no-repeat top left;
	width:197px;
	height:30px;
	float:left;
}
.searchinput {
	border:0;
	background:transparent;
	color: #000000;
	width:187px; 
	height:30px;
	line-height:30px;
	font-size:11px;
	margin:0;
	padding:0 5px;
}
.searchButton {
	float:left;
	padding-left:8px;
}
.searchBox .searchBox_advanced_search {
	position:absolute;
	top:83px;
	right:4px;
}
.searchBox .searchBox_advanced_search a:link, .searchBox .searchBox_advanced_search a:visited {
	color:#315815;
	font-weight:700;
	font-size:13px;
}
.searchBox .searchBox_advanced_search a:hover {
	color:#274511;
}


/* Footer Main
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerMain {
	background:#02417f url(images/styles/ShinyGreen/style/footerBG.gif) repeat-x top left;
	height:100px;
	color:#c3d4df;
	position:relative;
}
#footerMain a:link, #footerMain a:visited {
	color:#fdfeff;
	font-weight:500;
}
#footerMain a:hover {
	color:#ffe16b;
}
.footerLeft {
	background:url(images/styles/ShinyGreen/style/footerLeft.gif) no-repeat top left;
	height:100px;
}
.footerRight {
	background:url(images/styles/ShinyGreen/style/footerRight.gif) no-repeat top right;
	height:100px;
	padding:0 39px 0 30px;
}
#footerLogo {
	position:absolute;
	top:0;
	right:39px;
}
.copyright {
	line-height:12px;
	font-weight:10;
}

/* Footer Navigation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerNav {
	font-size:15px;
	line-height:29px;
	font-weight:700;
	padding:9px 0 8px 0;
}
#footerNav ul {
	list-style:none;
	padding:0;
	margin:0;
}
#footerNav li {
	float:left;
	padding:0 30px 0 0;	
}
#footerNav a:link, #footerNav a:visited {
	color:#fdfeff;
}
#footerNav a:hover {
	color:#ffe16b;
}
.skinSelect {
	text-align:right;
	padding:5px 0 0 0;
}

/*************************************************/
/* TOP MEMBER BAR*/
#toplinks, .toplinks {
	text-align:left;
	line-height:20px;
}
#toplinks .isuser {
	float:left;
}
#toplinks .welcomelink {
	font-weight:700;
}
.toplinks ul.isuser .notifications .popupbody {

	border: 1px solid #242424; /* makes it look consistent with the popup background */
}
.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 12px;
	background: #242424 url(images/styles/ShinyGreen/misc/arrow.png) right center no-repeat ;
	-moz-border-radius: 5px;
       _background-image:url('images/styles/ShinyGreen/misc/arrow.gif');
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active, .toplinks ul.isuser li a:hover {
	-moz-border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
}

.memberBox .welcomeUser {
	font-weight:700;
	font-size:11px;
	float:left;
}
.memberBox .toplinks {
	padding:2px 0 0 3px;
}
.memberBox .toplinks {
	padding:2px 0 0 3px;
}

/* Navbar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#navigation {
	height:72px;
}
.navbar {
	background:url(images/styles/ShinyGreen/style/navBG.gif) repeat-x top left;
	position:relative;
	height:72px;
	font:   12px arial, helvetica, sans-serif;
	color:#fff;
	width:100%;
	padding:0;
	margin:0;
}
.navLeft {
	background:url(images/styles/ShinyGreen/style/navLeft.gif) no-repeat top left;
	height:72px;
}
.navRight {
	background:url(images/styles/ShinyGreen/style/navRight.gif) no-repeat top right;
	height:72px;
	padding:0 15px;
}
#navtabs li.selected ul.floatcontainer {
	margin-top:4px;
}
#navtabs li.selected ul.floatcontainer a:link, #navtabs li.selected ul.floatcontainer a:visited {
	line-height:27px;
	height:27px;
}
.navbar a { color:#fff; }
.navbar a:hover { color:#ffe67c; }

.navtabs ul li:first-child {
	text-indent: 25px;
}
.navtabs {
	background:none;
	padding-left:0;
}
.navtabs ul {
	position:absolute;
	top:42px;
	left:0px;
	width:100%;
/* This is to fix RTL menu issue under Opera */
        direction:ltr;
}
.navtabs li {
	background:url(images/styles/ShinyGreen/style/navSplit.gif) no-repeat top right;
	padding-right:2px;
	float:left;
}
.navtabs li li {
	background:none;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}
.navtabs li a {
	height:42px;
	line-height:42px;
}
.navtabs li a.navtab {
	display:block;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color:#fff;
	font-size:14px;
	text-decoration:none;
	line-height:42px;
	height:42px;
	padding:0 10px;
	font-weight:700;
	background:none;
}
.navtabs li a.navtab:hover {
	color:#ffe67c;
}
.navtabs li.selected {
	color:#ffe67c;
	height:42px;
}
.navtabs li.selected a.navtab {
	color:#ffe67c;
	position:relative;
	top:-px;
	padding-top:px;
	z-index:10;
}
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   12px arial, helvetica, sans-serif;
	line-height:27px;
}
.navtabs li.selected li {
	padding:0 5px;
}
.navtabs li.selected li li {
	padding:0 2px;
}
.navtabs li.selected li a {
	color:#fff;
	font-weight:400;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height: 27px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#fff;
}

.navbar_advanced_search li a:hover {
	color:#ffe67c;
	text-decoration:none;
}

.navtabs li.selected li a:hover {
	color:#ffe67c;
	text-decoration:none;
}

.navtabs li.selected .popupbody li > a {
	padding:0px 10px;
	text-indent: 0;
	color: rgb(0, 0, 0);
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid 1px transparent;
	_border: none;
	background:transparent url(images/styles/ShinyGreen/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/styles/ShinyGreen/misc/arrow.gif');
	color:#fff;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active,
.navtabs li.selected li a:hover.popupctrl {
	color:#fff;
}

/* Breadcrumb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.breadcrumb {
	background:url(images/styles/ShinyGreen/style/bcBG.gif) repeat-x top left;
	height:31px;
	padding:0;
	color:#746e5d;
	font-weight:700;
	margin-bottom:10px;
}
.bcLeft {
	background:url(images/styles/ShinyGreen/style/bcLeft.gif) no-repeat top left;
	height:31px;
}
.bcRight {
	background:url(images/styles/ShinyGreen/style/bcRight.gif) no-repeat top right;
	height:21px;
	padding:5px 8px;
}
.breadcrumb .navbit > a, .breadcrumb .lastnavbit span {
	border:1px solid transparent;
}
.breadcrumb .navbit a:link, .breadcrumb .navbit a:visited {
	font-weight:700;
}
.breadcrumb .navbit a:hover {
	background:#4d8825;
	color:#fff;
	border:1px solid transparent;
}

/*************************************************/
/* TCAT BAR */

.tcatBar {
	background:url(images/styles/ShinyGreen/style/tcatBG.gif) repeat-x top left;
	color: #fff;
	height:38px;
	clear:both;
	margin-top: 8px;
	float: left;
	border:0;
	padding:0;
	width: 100%;
}
.tcatLeft {
	background:url(images/styles/ShinyGreen/style/tcatLeft.gif) no-repeat top left;
	height:38px;
}
.tcatRight {
	background:url(images/styles/ShinyGreen/style/tcatRight.gif) no-repeat top right;
	height:38px;
}
.tcatBar .forumtitle {
	font-weight:700;

}
.tcatBar .tcatDesc {
	font-size:11px;
	font-weight:400;
}
.tcatBar h2 {
	padding: 0 0 0 16px;
	font: bold 14px arial, helvetica, sans-serif;
	line-height: 38px;
	float:left;
	font-weight:700;
}
.tcatBar a:link, .tcatBar a:visited {
	color:#fff;
}
.tcatBar a:hover {

}
.tcatBar .tcatCollapse {
	float:right;
	position:absolute;
	top:10px;
	right:10px;
}

/* tcat Thread List Controls - Forumdisplay */
.tcat_threadlist_controls {
	float:right;
	padding-right:8px;
}
.forumdisplaypopups, #forumdisplaypopups {
	clear:both;
}
.tcat_threadlist_controls h6 {
	height:38px;
	line-height:38px;
	padding:0;
	display:block;
	font-size:11px;
}
.forumdisplaypopups a.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a.popupctrl,
.postlist_popups h6 a.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a.popupctrl {
	background:none;
	display:block;
	_display:38px;
	height:38px;
	line-height:38px;
	font-family:arial, helvetica, sans-serif;
	font-weight:700;
	font-size:12px;
	color:#fff;
	padding:0 7px;
	border: 0;
	float: left;
	clear: right;

}
.forumdisplaypopups a:hover.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a:hover.popupctrl,
.postlist_popups h6 a:hover.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a:hover.popupctrl {
	border: 0;
	color:#fff;
	text-decoration:underline;
}
#postlist_popups a, .postlist_popups a {
	color: #fff;
	_border: none;
}

#postlist_popups a:hover, .postlist_popups a:hover {
	color: #fff;
	text-decoration:underline;
}
#postlist_popups .popupmenu:hover a.popupctrl, #postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active, .postlist_popups .popupmenu:hover a.popupctrl, .postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
}

#postlist_popups ul li {
	color: #4e4e4e;
}
#postlist_popups ul li a, .postlist_popups ul li a {
	color: #4e4e4e;
	_border: none;
}

#postlist_popups ul li a:hover, .postlist_popups ul li a:hover {
	color: #4e4e4e;
	text-decoration:underline;
}

#forumdisplaypopups ul a, .forumdisplaypopups ul a {
	color: #3e3e3e;
}

/*************************************************/
/* THEAD BAR*/

.thead_bar .theadrow {
	background:#558f2b url(images/styles/ShinyGreen/style/theadBG.gif) repeat-x top left;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	line-height:22px;
	font-size:12px;
	border:1px solid #7cb247;
	border-bottom:1px solid #447b1b;
	border-top:1px solid #9fc56e;
	color:#fffbed;
}
.thead_bar .padding {
	padding-left:12px;
}
.thead_bar .forumhead span.forumlastpost {
	width: 23%;
}
.thead_bar .theadrow .forumdata  {
	float: left;
}
.thead_bar {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}
.thead_bar .forumhead .forumtitle {
	width: 76%;
}
.thead_bar .foruminfo {
	width: 53%;
	min-width: 30%;
	float: left;
	clear: right;
}
.thead_bar .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}
.thead_bar .forumstats, .thead_bar .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 16%;
	margin-right: 2%;
}
.thead_bar .foruminfo .forumdata .datacontainer {
	float: left;
	width: 86%;
	padding:0;
	padding-left: 62px;
}
.thead_bar .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}

.thead_bar .forumactionlink {
/* values based on icon size */
	display:block;
	width:18px;

	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;

}
.thead_bar .forumstats li, .thead_bar .forumstats_2 li{
	font-size: 12pxpx;
	text-align: right;
	padding-right: 20px;
	display:block;
}
.thead_bar .forumlastpost {
	display:block;
	float: left;
	clear: right;
}
.thead_bar .theadrow .forumlastpost {
	width: 22%;
}
.forumbitBody {
	padding-right:2px;
	clear:both;
}

/*threadlisthead and posthead*/
.threadlist {
margin-top:0;
}
#threadlist .threadlisthead {
	background:#558f2b url(images/styles/ShinyGreen/style/theadBG.gif) repeat-x top left;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	font-size:12px;
	border:1px solid #7cb247;
	border-bottom:1px solid #447b1b;
	border-top:1px solid #9fc56e;
	color:#fffbed;
	font-weight:400;
	margin: 0;
}

#threadlist .threadlisthead a, #threadlist .threadlisthead a:hover {
	color: #fffbed;
}
.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background:#558f2b url(images/styles/ShinyGreen/style/theadBG.gif) repeat-x top left;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	margin: -1px -1px 0;
	font:   normal 12px arial, helvetica, sans-serif;
	padding: 4px 0;
	border:0;
	border:1px solid #7cb247;
	border-bottom:1px solid #447b1b;
	border-top:1px solid #9fc56e;
	color:#fffbed;
	font-size:12px;
	font-weight:400;
}
#posts .posthead a:link, #posts .posthead a:visited {
	color:#fff;
}
#posts .posthead a:hover {
	color:#fff;
}
#posts .posthead .time, #posts .nodecontrols {
	color:#fff;
}
.wgo_subblock{
	position:relative;
}
.wgo_subblock .whatspace {
	padding-left:55px;
}
.wgo_subblock .whaticon {
	position:absolute;
	top:25%;
	left:10px;
}
#postlist .userinfo {
	padding-top:10px;
}
.username_container {
	padding:2px 0;
	text-align:center;
}
.username_container .username strong {
	font-size: 15px;
	font-weight:400;
}
.usertitle, .rank {
	text-align:center;
}
.usercenter {
	padding-top:5px;
	text-align:center;
}
.post_field {
	background: #fff;
	color: #414141;
	border: 1px solid #b9c4cd;
	padding: 3px 3px 3px 10px;
	margin-top: 2px;
	text-align:left;
}
.post_field strong {
	color: #587c1d;
}
.post_field dt {
	color: #587c1d;
	font-weight:700;
}
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: 0;
}
.bbcode_container .bbcode_quote_container {
	background:none;
}

.forum_info_block, .forum_info_form {
	background:none;
}
.postfoot {
	border: 1px solid #d8d5cc;
	border-bottom:0;
	border-left:0;
}
.postfootWrap {
	border-right: 1px solid #d8d5cc;
}

#thread_info a.collapse {
	position: absolute;
	top: 9px;
}

/* Bottom Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.bottomBar{
	background:url(images/styles/ShinyGreen/style/bottomBarBG.gif) repeat-x top left;
	height:5px;
	font-size:0;
	clear:both;
}

	background:url(images/styles/ShinyGreen/style/topBarBG.gif) repeat-x top left;
	height:33px;

#notices .restore {
	border:1px solid #e6b868;
	padding:8px;
}

h1.header, h2.header { 
	text-transform:capitalize; 
}

/* Advanced Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchtypeswitcher {
	border-bottom:4px solid #254012;
}
#searchtypeswitcher li a {
	background-color:#2f5514;
	color:#FFF;
}

#searchtypeswitcher li.selected a {
	background-color:#254012;
}

#searchtypeswitcher li a:hover {
	background-color:#254012;
}
h1.relevant_replacement {
 font-size: 120% !important;
 font-weight: bold;
 color: #3e3e3e;
 margin-bottom: 3px;
}

p.relevant_replacement {
 font-size: 11px;
 width: 100%;
 margin-bottom: 2px;
} 