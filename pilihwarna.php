
<!DOCTYPE html>
<html lang="en-US">
<head>

<title>HTML Color Picker</title>
<style>a.menu_ref_colorpicker{font-weight:bold;} a.topnav_tags{background-color:#8AC007 !important;color:#ffffff !important;}</style>
<style>
#smallnavContainer {display:none;}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster">
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX Angular ASP .NET PHP SQL tutorials, references, web building examples">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/bs/css/bootstrap_w3schools.css">
<script src="/jquery.js"></script>
<script src="/bs/js/bootstrap.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3855518-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
 // GPT slots
 var gptAdSlots = [];
 googletag.cmd.push(function() {

   var leaderMapping = googletag.sizeMapping().
   // Mobile ad
   addSize([0, 0], [320, 50]). 
   // Vertical Tablet ad
   addSize([480, 0], [468, 60]). 
   // Horizontal Tablet
   addSize([700, 0], [728, 90]).
   // Desktop and bigger ad
// addSize([1200, 0], [[728, 90], [970, 90]]).build();
   addSize([1200, 0], [728, 90]).build();   

// gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1422003450156-2').
   gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [728, 90], 'div-gpt-ad-1422003450156-2').   
   defineSizeMapping(leaderMapping).addService(googletag.pubads());

   var skyMapping = googletag.sizeMapping().
   // Mobile ad
   addSize([0, 0], [320, 50]). 
   // Tablet ad
   addSize([975, 0], [120, 600]). 
   // Desktop
// addSize([1100, 0], [[120, 600], [160, 600]]).
   addSize([1100, 0], [160, 600]).   
   // Large Desktop
// addSize([1675, 0], [[120, 600], [160, 600], [300, 600], [300, 1050]]).build();
   addSize([1675, 0], [[160, 600], [300, 600]]).build();   
// gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[120, 600], [160, 600], [300, 600], [300, 1050]], 'div-gpt-ad-1422003450156-5').
   gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[160, 600], [300, 600]], 'div-gpt-ad-1422003450156-5').
   defineSizeMapping(skyMapping).addService(googletag.pubads());

   var bmrMapping = googletag.sizeMapping().
   // Smaller
// addSize([0, 0], [[300, 250], [336, 280]]). 
   addSize([0, 0], [300, 250]).    
   // Large Desktop
// addSize([1200, 0], [[300, 250], [336, 280], [728, 280], [970, 250]]).build();
   addSize([1200, 0], [[300, 250], [728, 280]]).build();
// gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [336, 280], [728, 280], [970, 250]], 'div-gpt-ad-1422003450156-0').
   gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [728, 280]], 'div-gpt-ad-1422003450156-0').
   defineSizeMapping(bmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());

// gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [[300, 250], [336, 280]], 'div-gpt-ad-1422003450156-3').addService(googletag.pubads());
   gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [300, 250], 'div-gpt-ad-1422003450156-3').addService(googletag.pubads());

   googletag.pubads().setTargeting("content","tags");
   googletag.enableServices();
 });
</script>
<script>
if (window.addEventListener) {              
    window.addEventListener("resize", browserResize);
} else if (window.attachEvent) {                 
    window.attachEvent("onresize", browserResize);
}
var xbeforeResize = window.innerWidth;
var ybeforeResize = window.innerWidth;
var zbeforeResize = window.innerWidth;


function skyscraperResize() {
if (window.innerWidth < 975 + 17) {
			document.getElementById("div-gpt-ad-1422003450156-5").style.minHeight="0";
		}
}

function browserResize() {
    var afterResize = window.innerWidth;
    if ((xbeforeResize < (1200 + 14) && afterResize >= (1200 + 14)) || (xbeforeResize >= (1200 + 14) && afterResize < (1200 + 14)) ||
        (xbeforeResize < (700 + 14) && afterResize >= (700 + 14)) || (xbeforeResize >= (700 + 14) && afterResize < (700 + 14)) ||
        (xbeforeResize < (480 + 17) && afterResize >= (480 + 17)) ||(xbeforeResize >= (480 + 17) && afterResize < (480 + 17))) {
        xbeforeResize = afterResize;
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[0]]);
        });
    }
    if ((ybeforeResize < (1675 + 14) && afterResize >= (1675 + 14)) || (ybeforeResize >= (1675 + 14) && afterResize < (1675 + 14)) ||
    	(ybeforeResize < (1100 + 14) && afterResize >= (1100 + 14)) || (ybeforeResize >= (1100 + 14) && afterResize < (1100 + 14)) ||
        (ybeforeResize < (975 + 17) && afterResize >= (975 + 17)) || (ybeforeResize >= (975 + 17) && afterResize < (975 + 17))) {
        ybeforeResize = afterResize;
       	skyscraperResize()
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[1]]);
        });
    }
    if ((zbeforeResize < (1200 + 14) && afterResize >= (1200 + 14)) || (zbeforeResize >= (1200 + 14) && afterResize < (1200 + 14))) {
        zbeforeResize = afterResize;
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[2], gptAdSlots[3]]);
        });
	}
}
</script>
<link rel="stylesheet" type="text/css" href="/stdtheme.css" />
<style>
#selectedcolor {
	border:1px solid #e3e3e3;
	width:65%;
	height:199px;
	margin:auto;
}
#divpreview {
	border:1px solid #e3e3e3;
	width:80px;
	height:20px;
	margin:auto;
	visibility:hidden;
}
#colorhexDIV, #colorrgbDIV, #colornamDIV {
	font-family:Consolas, 'Courier New', Courier, monospace;
	text-align:center;
	margin-top:6px;
	height:24px;
	font-size:18px;
}
table.colorshade {
    width:100%;
    margin:auto;
    max-width:400px;
}
td.colorshade {
	border-left:1px solid #e3e3e3;	
}
td.colorshadetxt {
	padding-left:6px;
	width:70px;
	text-align:right;
	font-family:Consolas, courier new;
	font-size:110%;
	border-left:1px solid #e3e3e3;	
}
#wronginputDIV {
    text-align:left;
    position:absolute;
    margin:4px 10px;
    color:#a94442;
    display:none;
}
</style>
<script>
<!--
var colorhex = "FF0000";
function mouseOverColor(hex) {
    document.getElementById("divpreview").style.visibility = "visible";
    document.getElementById("divpreview").style.backgroundColor = hex;
    document.body.style.cursor = "pointer";
}
function mouseOutMap() {
    if (hh == 0) {
        document.getElementById("divpreview").style.visibility = "hidden";
    } else {
      hh = 0;
    }
    document.getElementById("divpreview").style.backgroundColor = "#" + colorhex;
    document.body.style.cursor = "";
}
var hh = 0;
function clickColor(hex, seltop, selleft, html5) {
    clearWrongInput();
    hh = 1;
    var colorrgb, colornam = "", xhttp, c, r, g, b, i;
    if (html5 && html5 == 5)	{
        c = document.getElementById("html5colorpicker").value;
    } else {
        if (hex == 0)	{
            c = document.getElementById("entercolor").value;
        } else {
	        c = hex;
        }
    }
    if (c.substr(0,1) == "#")	{
        c = c.substr(1);
    }
    c = c.replace(/;/g, "");
    if (c.indexOf(",") > -1 || c.toLowerCase().indexOf("rgb") > -1 || c.indexOf("(") > -1) {
        c = c.replace(/rgb/i, "");
        c = c.replace("(", "");
        c = c.replace(")", "");
        c = rgbToHex(c);
        if (c == -1) {wrongInput(); return;}
    }
    colorhex = c;
    if (colorhex.length == 3) {colorhex = colorhex.substr(0,1) + colorhex.substr(0,1) + colorhex.substr(1,1) + colorhex.substr(1,1) + colorhex.substr(2,1) + colorhex.substr(2,1); }
    colorhex = colorhex.substr(0,6);
//    if (hexArr.length == 0) {checkColorValue(); }
    for (i = 0; i < hexArr.length; i++) {
        if (c.toLowerCase() == hexArr[i].toLowerCase()) {
            colornam = namArr[i];
            break;
        }
        if (c.toLowerCase() == namArr[i].toLowerCase()) {
            colorhex = hexArr[i];
            colornam = namArr[i];            
            break;
        }
        if (c == rgbArr[i]) {
            colorhex = hexArr[i];
            colornam = namArr[i];            
            break;
        }
    }
    colorhex = colorhex.substr(0,10);
    colorhex = colorhex.toUpperCase();
    r = HexToR(colorhex);
    g = HexToG(colorhex);
    b = HexToB(colorhex);
    if (isNaN(r) || isNaN(g) || isNaN(b)) {wrongInput(); return;}
    document.getElementById("colorhexDIV").innerHTML = "#" + colorhex;
    document.getElementById("colorrgbDIV").innerHTML = "rgb(" + r + ", " + g + ", " + b + ")";
    document.getElementById("colornamDIV").innerHTML = colornam;
    if (window.XMLHttpRequest) {
         xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.open("GET", "http_colorshades.asp?colorhex=" + colorhex + "&r=" + Math.random(), true);
    xhttp.send("");
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("colorshades").innerHTML = xhttp.responseText;
        }
    }
    if ((seltop+199)>-1 && selleft>-1) {
        document.getElementById("selectedhexagon").style.top=seltop + "px";
        document.getElementById("selectedhexagon").style.left=selleft + "px";
        document.getElementById("selectedhexagon").style.visibility="visible";
	} else {
        document.getElementById("divpreview").style.backgroundColor = "#" + colorhex;
        document.getElementById("selectedhexagon").style.visibility = "hidden";
	}
    document.getElementById("selectedcolor").style.backgroundColor = "#" + colorhex;
    document.getElementById("html5colorpicker").value = "#" + colorhex;    
}
function wrongInput() {
    $("#entercolorDIV").addClass("has-error");
    document.getElementById("wronginputDIV").style.display = "block";
}
function clearWrongInput() {
    $("#entercolorDIV").removeClass("has-error");
    document.getElementById("wronginputDIV").style.display = "none";
}
var hexArr = [];
var rgbArr = [];
var namArr = []; 
function checkColorValue() {
    var colorfile, colors = [], i, cc;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.open("GET", "color_name.txt?r=" + Math.random(), true);
    xhttp.send("");
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
		    colorfile = xhttp.responseText;
		    colorfile = colorfile.replace(/        /g, " ");            
		    colorfile = colorfile.replace(/       /g, " ");        
		    colorfile = colorfile.replace(/      /g, " ");
		    colorfile = colorfile.replace(/     /g, " ");
		    colorfile = colorfile.replace(/    /g, " ");
		    colorfile = colorfile.replace(/   /g, " ");
		    colorfile = colorfile.replace(/  /g, " ");
		    colorfile = colorfile.replace(/\s*?[\r\n\t]\s*/g, " ");    
		    colors = colorfile.split(" ");
		    cc = "hex";
		    for (i = 0; i < colors.length; i++) {
		        if (cc == "hex") {
		            hexArr.push(colors[i]);
		            cc = "rgb";
		            continue;
		        }
		        if (cc == "rgb") {
		            rgbArr.push(colors[i]);
		            cc = "nam";
		            continue;            
		        }
		        if (cc == "nam") {
		            namArr.push(colors[i]);
		            cc = "hex";
		            continue;            
		        }
		    }
			if ("FF0000" == "FF0000") {
			    clickColor("FF0000", -34, 135);
			} else {
			    clickColor("FF0000", -1, -1);
			}
        }
    }
}
function HexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
function HexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
function HexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}

function ToHex(x) {
    var hex = x.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}
function rgbToHex(rgb) {
    var x = rgb.replace(/ /g, "");
    var a = x.split(",");
    var r = Number(a[0]);
    var g = Number(a[1]);
    var b = Number(a[2]);
    if (isNaN(r) || isNaN(g) || isNaN(b) || r < 0 || r > 255 || g < 0 || g > 255 || b < 0 || b > 255) {return -1;}
    return ToHex(r) + ToHex(g) + ToHex(b);
}
$(document).ready(function(){
    checkColorValue()
    var x = document.createElement("input");
    x.setAttribute("type", "color");
    if (x.type == "text") {
        document.getElementById("html5DIV").style.visibility = "hidden";
    }
}); 
//-->
</script>
</head>
<body>
<div id='leftBackground'></div><div id='topDIV' class='top'><a href='http://www.w3schools.com'><img id='topLogo' src='/images/w3schools.png' alt='W3Schools.com' class='img-responsive'></a><div id='toptext'>THE WORLD'S LARGEST WEB DEVELOPER SITE</div></div><div id='topnavDIV' class='topnavContainer'><div class='container-fluid' style='max-width:1600px;margin-left:0px;padding-left:0;'><ul class='nav nav-pills topnav'><li><a href='/default.asp' class='topnav_home' title='Home'>&nbsp;</a></li><li><a href='/html/default.asp' class='topnav_html' title='HTML Tutorial'>HTML</a></li><li><a href='/css/default.asp' class='topnav_css' title='CSS Tutorial'>CSS</a></li><li><a href='/js/default.asp' class='topnav_js' title='JavaScript Tutorial'>JAVASCRIPT</a></li><li><a href='/sql/default.asp' class='topnav_sql' title='SQL Tutorial'>SQL</a></li><li><a href='/php/default.asp' class='topnav_php' title='PHP Tutorial'>PHP</a></li><li><a href='/jquery/default.asp' class='topnav_jquery' title='jQuery Tutorial'>jQUERY</a></li><li><a href='/bootstrap/default.asp' class='topnav_bootstrap' title='Bootstrap Tutorial'>BOOTSTRAP</a></li><li><a href='/angular/default.asp' class='topnav_angular' title='Angular Tutorial'>ANGULAR</a></li><li><a href='/xml/default.asp' class='topnav_xml' title='XML Tutorial'>XML</a></li><li><a id='dropdownTutorialsBtn' href='#' class='topnav_tutorials' title='More Tutorials'>TUTORIALS <span class='caret'></span></a></li><li><a id='dropdownReferencesBtn' href='#' class='topnav_references' title='More References'>REFERENCES <span class='caret'></span></a></li><li><a id='dropdownExamplesBtn' href='#' class='topnav_examples' title='More Examples'>EXAMPLES <span class='caret'></span></a></li><li><a href='/forum/default.asp' class='topnav_forum' title='W3Schools Forum'>FORUM</a></li><li class='menuBtn'><a href='javascript:void(0)' class='topnav_menu' onclick='vismenyen()' title='Menu'><hr><hr><hr></a></li><li class='menuSearch'><a id='dropdownSearchBtn' href='javascript:void(0);' class='topnav_search' title='Search W3Schools'>&nbsp;</a></li><li class='menuTranslate'><a id='dropdownTranslateBtn' href='javascript:void(0);' class='topnav_translate' title='Translate W3Schools'>&nbsp;</a></li></ul></div></div><div class='container-fluid master'><div class='row'><div class='col-lg-2 col-md-2 col-sm-3 menu'><div id='menyen'><h2 class="left"><span class="left_h2">HTML</span> Reference</h2>
<a target="_top" href="default.asp" class="menu_default">HTML by Alphabet</a>
<a target="_top" href="ref_byfunc.asp" class="menu_ref_byfunc">HTML by Category</a>
<a target="_top" href="ref_standardattributes.asp" class="menu_ref_standardattributes">HTML Global Attributes</a>
<a target="_top" href="ref_eventattributes.asp" class="menu_ref_eventattributes">HTML Events</a>
<a target="_top" href="ref_canvas.asp" class="menu_ref_canvas">HTML Canvas</a>
<a target="_top" href="ref_av_dom.asp" class="menu_ref_av_dom">HTML Audio/Video</a>
<a target="_top" href="ref_html_dtd.asp" class="menu_ref_html_dtd">HTML Doctypes</a>
<a target="_top" href="ref_colornames.asp" class="menu_ref_colornames">HTML Colornames</a>
<a target="_top" href="ref_colorgroups.asp" class="menu_ref_colorgroups">HTML Colorgroups</a>
<a target="_top" href="ref_colorpicker.asp" class="menu_ref_colorpicker">HTML Colorpicker</a>
<a target="_top" href="ref_colormixer.asp" class="menu_ref_colormixer">HTML Colormixer</a>
<a target="_top" href="ref_charactersets.asp" class="menu_ref_charactersets">HTML Character Sets</a>
<a target="_top" href="ref_urlencode.asp" class="menu_ref_urlencode">HTML URL Encode</a>
<a target="_top" href="ref_language_codes.asp" class="menu_ref_language_codes">HTML Language Codes</a>
<a target="_top" href="ref_country_codes.asp" class="menu_ref_country_codes">HTML Country Codes</a>
<a target="_top" href="ref_httpmessages.asp" class="menu_ref_httpmessages">HTTP Messages</a>
<a target="_top" href="ref_httpmethods.asp" class="menu_ref_httpmethods">HTTP Methods</a>
<a target="_top" href="ref_pxtoemconversion.asp" class="menu_ref_pxtoemconversion">PX to EM Converter</a>
<a target="_top" href="ref_keyboardshortcuts.asp" class="menu_ref_keyboardshortcuts">Keyboard Shortcuts</a>
<br>
<div class="notranslate">
<h2 class="left"><span class="left_h2">HTML</span> Tags</h2>
<a target="_top" href="tag_comment.asp" class="menu_tag_comment">&lt;!--&gt;</a>
<a target="_top" href="tag_doctype.asp" class="menu_tag_doctype">&lt;!DOCTYPE&gt;</a>
<a target="_top" href="tag_a.asp" class="menu_tag_a">&lt;a&gt;</a>
<a target="_top" href="tag_abbr.asp" class="menu_tag_abbr">&lt;abbr&gt;</a>
<a target="_top" href="tag_acronym.asp" class="menu_tag_acronym">&lt;acronym&gt;</a>
<a target="_top" href="tag_address.asp" class="menu_tag_address">&lt;address&gt;</a>
<a target="_top" href="tag_applet.asp" class="menu_tag_applet">&lt;applet&gt;</a>
<a target="_top" href="tag_area.asp" class="menu_tag_area">&lt;area&gt;</a>
<a target="_top" href="tag_article.asp" class="menu_tag_article">&lt;article&gt;</a>
<a target="_top" href="tag_aside.asp" class="menu_tag_aside">&lt;aside&gt;</a>
<a target="_top" href="tag_audio.asp" class="menu_tag_audio">&lt;audio&gt;</a>
<a target="_top" href="tag_b.asp" class="menu_tag_b">&lt;b&gt;</a>
<a target="_top" href="tag_base.asp" class="menu_tag_base">&lt;base&gt;</a>
<a target="_top" href="tag_basefont.asp" class="menu_tag_basefont">&lt;basefont&gt;</a>
<a target="_top" href="tag_bdi.asp" class="menu_tag_bdi">&lt;bdi&gt;</a>
<a target="_top" href="tag_bdo.asp" class="menu_tag_bdo">&lt;bdo&gt;</a>
<a target="_top" href="tag_big.asp" class="menu_tag_big">&lt;big&gt;</a>
<a target="_top" href="tag_blockquote.asp" class="menu_tag_blockquote">&lt;blockquote&gt;</a>
<a target="_top" href="tag_body.asp" class="menu_tag_body">&lt;body&gt;</a>
<a target="_top" href="tag_br.asp" class="menu_tag_br">&lt;br&gt;</a>
<a target="_top" href="tag_button.asp" class="menu_tag_button">&lt;button&gt;</a>
<a target="_top" href="tag_canvas.asp" class="menu_tag_canvas">&lt;canvas&gt;</a>
<a target="_top" href="tag_caption.asp" class="menu_tag_caption">&lt;caption&gt;</a>
<a target="_top" href="tag_center.asp" class="menu_tag_center">&lt;center&gt;</a>
<a target="_top" href="tag_cite.asp" class="menu_tag_cite">&lt;cite&gt;</a>
<a target="_top" href="tag_code.asp" class="menu_tag_code">&lt;code&gt;</a>
<a target="_top" href="tag_col.asp" class="menu_tag_col">&lt;col&gt;</a>
<a target="_top" href="tag_colgroup.asp" class="menu_tag_colgroup">&lt;colgroup&gt;</a>
<a target="_top" href="tag_datalist.asp" class="menu_tag_datalist">&lt;datalist&gt;</a>
<a target="_top" href="tag_dd.asp" class="menu_tag_dd">&lt;dd&gt;</a>
<a target="_top" href="tag_del.asp" class="menu_tag_del">&lt;del&gt;</a>
<a target="_top" href="tag_details.asp" class="menu_tag_details">&lt;details&gt;</a>
<a target="_top" href="tag_dfn.asp" class="menu_tag_dfn">&lt;dfn&gt;</a>
<a target="_top" href="tag_dialog.asp" class="menu_tag_dialog">&lt;dialog&gt;</a>
<a target="_top" href="tag_dir.asp" class="menu_tag_dir">&lt;dir&gt;</a>
<a target="_top" href="tag_div.asp" class="menu_tag_div">&lt;div&gt;</a>
<a target="_top" href="tag_dl.asp" class="menu_tag_dl">&lt;dl&gt;</a>
<a target="_top" href="tag_dt.asp" class="menu_tag_dt">&lt;dt&gt;</a>
<a target="_top" href="tag_em.asp" class="menu_tag_em">&lt;em&gt;</a>
<a target="_top" href="tag_embed.asp" class="menu_tag_embed">&lt;embed&gt;</a>
<a target="_top" href="tag_fieldset.asp" class="menu_tag_fieldset">&lt;fieldset&gt;</a>
<a target="_top" href="tag_figcaption.asp" class="menu_tag_figcaption">&lt;figcaption&gt;</a>
<a target="_top" href="tag_figure.asp" class="menu_tag_figure">&lt;figure&gt;</a>
<a target="_top" href="tag_font.asp" class="menu_tag_font">&lt;font&gt;</a>
<a target="_top" href="tag_footer.asp" class="menu_tag_footer">&lt;footer&gt;</a>
<a target="_top" href="tag_form.asp" class="menu_tag_form">&lt;form&gt;</a>
<a target="_top" href="tag_frame.asp" class="menu_tag_frame">&lt;frame&gt;</a>
<a target="_top" href="tag_frameset.asp" class="menu_tag_frameset">&lt;frameset&gt;</a>
<a target="_top" href="tag_hn.asp" class="menu_tag_hn">&lt;h1&gt; - &lt;h6&gt;</a>
<a target="_top" href="tag_head.asp" class="menu_tag_head">&lt;head&gt;</a>
<a target="_top" href="tag_header.asp" class="menu_tag_header">&lt;header&gt;</a>
<a target="_top" href="tag_hr.asp" class="menu_tag_hr">&lt;hr&gt;</a>
<a target="_top" href="tag_html.asp" class="menu_tag_html">&lt;html&gt;</a>
<a target="_top" href="tag_i.asp" class="menu_tag_i">&lt;i&gt;</a>
<a target="_top" href="tag_iframe.asp" class="menu_tag_iframe">&lt;iframe&gt;</a>
<a target="_top" href="tag_img.asp" class="menu_tag_img">&lt;img&gt;</a>
<a target="_top" href="tag_input.asp" class="menu_tag_input">&lt;input&gt;</a>
<a target="_top" href="tag_ins.asp" class="menu_tag_ins">&lt;ins&gt;</a>
<a target="_top" href="tag_kbd.asp" class="menu_tag_kbd">&lt;kbd&gt;</a>
<a target="_top" href="tag_keygen.asp" class="menu_tag_keygen">&lt;keygen&gt;</a>
<a target="_top" href="tag_label.asp" class="menu_tag_label">&lt;label&gt;</a>
<a target="_top" href="tag_legend.asp" class="menu_tag_legend">&lt;legend&gt;</a>
<a target="_top" href="tag_li.asp" class="menu_tag_li">&lt;li&gt;</a>
<a target="_top" href="tag_link.asp" class="menu_tag_link">&lt;link&gt;</a>
<a target="_top" href="tag_main.asp" class="menu_tag_main">&lt;main&gt;</a>
<a target="_top" href="tag_map.asp" class="menu_tag_map">&lt;map&gt;</a>
<a target="_top" href="tag_mark.asp" class="menu_tag_mark">&lt;mark&gt;</a>
<a target="_top" href="tag_menu.asp" class="menu_tag_menu">&lt;menu&gt;</a>
<a target="_top" href="tag_menuitem.asp" class="menu_tag_menuitem">&lt;menuitem&gt;</a>
<a target="_top" href="tag_meta.asp" class="menu_tag_meta">&lt;meta&gt;</a>
<a target="_top" href="tag_meter.asp" class="menu_tag_meter">&lt;meter&gt;</a>
<a target="_top" href="tag_nav.asp" class="menu_tag_nav">&lt;nav&gt;</a>
<a target="_top" href="tag_noframes.asp" class="menu_tag_noframes">&lt;noframes&gt;</a>
<a target="_top" href="tag_noscript.asp" class="menu_tag_noscript">&lt;noscript&gt;</a>
<a target="_top" href="tag_object.asp" class="menu_tag_object">&lt;object&gt;</a>
<a target="_top" href="tag_ol.asp" class="menu_tag_ol">&lt;ol&gt;</a>
<a target="_top" href="tag_optgroup.asp" class="menu_tag_optgroup">&lt;optgroup&gt;</a>
<a target="_top" href="tag_option.asp" class="menu_tag_option">&lt;option&gt;</a>
<a target="_top" href="tag_output.asp" class="menu_tag_output">&lt;output&gt;</a>
<a target="_top" href="tag_p.asp" class="menu_tag_p">&lt;p&gt;</a>
<a target="_top" href="tag_param.asp" class="menu_tag_param">&lt;param&gt;</a>
<a target="_top" href="tag_pre.asp" class="menu_tag_pre">&lt;pre&gt;</a>
<a target="_top" href="tag_progress.asp" class="menu_tag_progress">&lt;progress&gt;</a>
<a target="_top" href="tag_q.asp" class="menu_tag_q">&lt;q&gt;</a>
<a target="_top" href="tag_rp.asp" class="menu_tag_rp">&lt;rp&gt;</a>
<a target="_top" href="tag_rt.asp" class="menu_tag_rt">&lt;rt&gt;</a>
<a target="_top" href="tag_ruby.asp" class="menu_tag_ruby">&lt;ruby&gt;</a>
<a target="_top" href="tag_s.asp" class="menu_tag_s">&lt;s&gt;</a>
<a target="_top" href="tag_samp.asp" class="menu_tag_samp">&lt;samp&gt;</a>
<a target="_top" href="tag_script.asp" class="menu_tag_script">&lt;script&gt;</a>
<a target="_top" href="tag_section.asp" class="menu_tag_section">&lt;section&gt;</a>
<a target="_top" href="tag_select.asp" class="menu_tag_select">&lt;select&gt;</a>
<a target="_top" href="tag_small.asp" class="menu_tag_small">&lt;small&gt;</a>
<a target="_top" href="tag_source.asp" class="menu_tag_source">&lt;source&gt;</a>
<a target="_top" href="tag_span.asp" class="menu_tag_span">&lt;span&gt;</a>
<a target="_top" href="tag_strike.asp" class="menu_tag_strike">&lt;strike&gt;</a>
<a target="_top" href="tag_strong.asp" class="menu_tag_strong">&lt;strong&gt;</a>
<a target="_top" href="tag_style.asp" class="menu_tag_style">&lt;style&gt;</a>
<a target="_top" href="tag_sub.asp" class="menu_tag_sub">&lt;sub&gt;</a>
<a target="_top" href="tag_summary.asp" class="menu_tag_summary">&lt;summary&gt;</a>
<a target="_top" href="tag_sup.asp" class="menu_tag_sup">&lt;sup&gt;</a>
<a target="_top" href="tag_table.asp" class="menu_tag_table">&lt;table&gt;</a>
<a target="_top" href="tag_tbody.asp" class="menu_tag_tbody">&lt;tbody&gt;</a>
<a target="_top" href="tag_td.asp" class="menu_tag_td">&lt;td&gt;</a>
<a target="_top" href="tag_textarea.asp" class="menu_tag_textarea">&lt;textarea&gt;</a>
<a target="_top" href="tag_tfoot.asp" class="menu_tag_tfoot">&lt;tfoot&gt;</a>
<a target="_top" href="tag_th.asp" class="menu_tag_th">&lt;th&gt;</a>
<a target="_top" href="tag_thead.asp" class="menu_tag_thead">&lt;thead&gt;</a>
<a target="_top" href="tag_time.asp" class="menu_tag_time">&lt;time&gt;</a>
<a target="_top" href="tag_title.asp" class="menu_tag_title">&lt;title&gt;</a>
<a target="_top" href="tag_tr.asp" class="menu_tag_tr">&lt;tr&gt;</a>
<a target="_top" href="tag_track.asp" class="menu_tag_track">&lt;track&gt;</a>
<a target="_top" href="tag_tt.asp" class="menu_tag_tt">&lt;tt&gt;</a>
<a target="_top" href="tag_u.asp" class="menu_tag_u">&lt;u&gt;</a>
<a target="_top" href="tag_ul.asp" class="menu_tag_ul">&lt;ul&gt;</a>
<a target="_top" href="tag_var.asp" class="menu_tag_var">&lt;var&gt;</a>
<a target="_top" href="tag_video.asp" class="menu_tag_video">&lt;video&gt;</a>
<a target="_top" href="tag_wbr.asp" class="menu_tag_wbr">&lt;wbr&gt;</a>
</div></div></div><div class='col-lg-10 col-md-10 col-sm-9 leaderboard'><div id='mainLeaderboard' style='overflow:hidden;'><!-- MainLeaderboard--><div id='div-gpt-ad-1422003450156-2'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-2'); });</script></div></div><div class='row'><div class='col-lg-10 col-md-10 col-sm-12 main'><div>
<h1>HTML <span class="color_h1">Color Picker</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="ref_colorgroups.asp">&laquo; Previous</a></div>
<div class="next"><a class="chapter" href="ref_colormixer.asp">Next Reference &raquo;</a></div>
</div>
<hr>
<p class="intro">Get darker/lighter shades of any color.</p>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-12" style="text-align:center;">
      <h3>Pick a Color:</h3>
      <div style="margin:auto;width:236px;">
        <img style='margin-right:2px;' src='colormap.gif' usemap='#colormap' alt='colormap' /><map id='colormap' name='colormap' onmouseout='mouseOutMap()'><area style='cursor:pointer' shape='poly' coords='63,0,72,4,72,15,63,19,54,15,54,4' onclick='clickColor("#003366",-199,54)' onmouseover='mouseOverColor("#003366")' alt='#003366' /><area style='cursor:pointer' shape='poly' coords='81,0,90,4,90,15,81,19,72,15,72,4' onclick='clickColor("#336699",-199,72)' onmouseover='mouseOverColor("#336699")' alt='#336699' /><area style='cursor:pointer' shape='poly' coords='99,0,108,4,108,15,99,19,90,15,90,4' onclick='clickColor("#3366CC",-199,90)' onmouseover='mouseOverColor("#3366CC")' alt='#3366CC' /><area style='cursor:pointer' shape='poly' coords='117,0,126,4,126,15,117,19,108,15,108,4' onclick='clickColor("#003399",-199,108)' onmouseover='mouseOverColor("#003399")' alt='#003399' /><area style='cursor:pointer' shape='poly' coords='135,0,144,4,144,15,135,19,126,15,126,4' onclick='clickColor("#000099",-199,126)' onmouseover='mouseOverColor("#000099")' alt='#000099' /><area style='cursor:pointer' shape='poly' coords='153,0,162,4,162,15,153,19,144,15,144,4' onclick='clickColor("#0000CC",-199,144)' onmouseover='mouseOverColor("#0000CC")' alt='#0000CC' /><area style='cursor:pointer' shape='poly' coords='171,0,180,4,180,15,171,19,162,15,162,4' onclick='clickColor("#000066",-199,162)' onmouseover='mouseOverColor("#000066")' alt='#000066' /><area style='cursor:pointer' shape='poly' coords='54,15,63,19,63,30,54,34,45,30,45,19' onclick='clickColor("#006666",-184,45)' onmouseover='mouseOverColor("#006666")' alt='#006666' /><area style='cursor:pointer' shape='poly' coords='72,15,81,19,81,30,72,34,63,30,63,19' onclick='clickColor("#006699",-184,63)' onmouseover='mouseOverColor("#006699")' alt='#006699' /><area style='cursor:pointer' shape='poly' coords='90,15,99,19,99,30,90,34,81,30,81,19' onclick='clickColor("#0099CC",-184,81)' onmouseover='mouseOverColor("#0099CC")' alt='#0099CC' /><area style='cursor:pointer' shape='poly' coords='108,15,117,19,117,30,108,34,99,30,99,19' onclick='clickColor("#0066CC",-184,99)' onmouseover='mouseOverColor("#0066CC")' alt='#0066CC' /><area style='cursor:pointer' shape='poly' coords='126,15,135,19,135,30,126,34,117,30,117,19' onclick='clickColor("#0033CC",-184,117)' onmouseover='mouseOverColor("#0033CC")' alt='#0033CC' /><area style='cursor:pointer' shape='poly' coords='144,15,153,19,153,30,144,34,135,30,135,19' onclick='clickColor("#0000FF",-184,135)' onmouseover='mouseOverColor("#0000FF")' alt='#0000FF' /><area style='cursor:pointer' shape='poly' coords='162,15,171,19,171,30,162,34,153,30,153,19' onclick='clickColor("#3333FF",-184,153)' onmouseover='mouseOverColor("#3333FF")' alt='#3333FF' /><area style='cursor:pointer' shape='poly' coords='180,15,189,19,189,30,180,34,171,30,171,19' onclick='clickColor("#333399",-184,171)' onmouseover='mouseOverColor("#333399")' alt='#333399' /><area style='cursor:pointer' shape='poly' coords='45,30,54,34,54,45,45,49,36,45,36,34' onclick='clickColor("#669999",-169,36)' onmouseover='mouseOverColor("#669999")' alt='#669999' /><area style='cursor:pointer' shape='poly' coords='63,30,72,34,72,45,63,49,54,45,54,34' onclick='clickColor("#009999",-169,54)' onmouseover='mouseOverColor("#009999")' alt='#009999' /><area style='cursor:pointer' shape='poly' coords='81,30,90,34,90,45,81,49,72,45,72,34' onclick='clickColor("#33CCCC",-169,72)' onmouseover='mouseOverColor("#33CCCC")' alt='#33CCCC' /><area style='cursor:pointer' shape='poly' coords='99,30,108,34,108,45,99,49,90,45,90,34' onclick='clickColor("#00CCFF",-169,90)' onmouseover='mouseOverColor("#00CCFF")' alt='#00CCFF' /><area style='cursor:pointer' shape='poly' coords='117,30,126,34,126,45,117,49,108,45,108,34' onclick='clickColor("#0099FF",-169,108)' onmouseover='mouseOverColor("#0099FF")' alt='#0099FF' /><area style='cursor:pointer' shape='poly' coords='135,30,144,34,144,45,135,49,126,45,126,34' onclick='clickColor("#0066FF",-169,126)' onmouseover='mouseOverColor("#0066FF")' alt='#0066FF' /><area style='cursor:pointer' shape='poly' coords='153,30,162,34,162,45,153,49,144,45,144,34' onclick='clickColor("#3366FF",-169,144)' onmouseover='mouseOverColor("#3366FF")' alt='#3366FF' /><area style='cursor:pointer' shape='poly' coords='171,30,180,34,180,45,171,49,162,45,162,34' onclick='clickColor("#3333CC",-169,162)' onmouseover='mouseOverColor("#3333CC")' alt='#3333CC' /><area style='cursor:pointer' shape='poly' coords='189,30,198,34,198,45,189,49,180,45,180,34' onclick='clickColor("#666699",-169,180)' onmouseover='mouseOverColor("#666699")' alt='#666699' /><area style='cursor:pointer' shape='poly' coords='36,45,45,49,45,60,36,64,27,60,27,49' onclick='clickColor("#339966",-154,27)' onmouseover='mouseOverColor("#339966")' alt='#339966' /><area style='cursor:pointer' shape='poly' coords='54,45,63,49,63,60,54,64,45,60,45,49' onclick='clickColor("#00CC99",-154,45)' onmouseover='mouseOverColor("#00CC99")' alt='#00CC99' /><area style='cursor:pointer' shape='poly' coords='72,45,81,49,81,60,72,64,63,60,63,49' onclick='clickColor("#00FFCC",-154,63)' onmouseover='mouseOverColor("#00FFCC")' alt='#00FFCC' /><area style='cursor:pointer' shape='poly' coords='90,45,99,49,99,60,90,64,81,60,81,49' onclick='clickColor("#00FFFF",-154,81)' onmouseover='mouseOverColor("#00FFFF")' alt='#00FFFF' /><area style='cursor:pointer' shape='poly' coords='108,45,117,49,117,60,108,64,99,60,99,49' onclick='clickColor("#33CCFF",-154,99)' onmouseover='mouseOverColor("#33CCFF")' alt='#33CCFF' /><area style='cursor:pointer' shape='poly' coords='126,45,135,49,135,60,126,64,117,60,117,49' onclick='clickColor("#3399FF",-154,117)' onmouseover='mouseOverColor("#3399FF")' alt='#3399FF' /><area style='cursor:pointer' shape='poly' coords='144,45,153,49,153,60,144,64,135,60,135,49' onclick='clickColor("#6699FF",-154,135)' onmouseover='mouseOverColor("#6699FF")' alt='#6699FF' /><area style='cursor:pointer' shape='poly' coords='162,45,171,49,171,60,162,64,153,60,153,49' onclick='clickColor("#6666FF",-154,153)' onmouseover='mouseOverColor("#6666FF")' alt='#6666FF' /><area style='cursor:pointer' shape='poly' coords='180,45,189,49,189,60,180,64,171,60,171,49' onclick='clickColor("#6600FF",-154,171)' onmouseover='mouseOverColor("#6600FF")' alt='#6600FF' /><area style='cursor:pointer' shape='poly' coords='198,45,207,49,207,60,198,64,189,60,189,49' onclick='clickColor("#6600CC",-154,189)' onmouseover='mouseOverColor("#6600CC")' alt='#6600CC' /><area style='cursor:pointer' shape='poly' coords='27,60,36,64,36,75,27,79,18,75,18,64' onclick='clickColor("#339933",-139,18)' onmouseover='mouseOverColor("#339933")' alt='#339933' /><area style='cursor:pointer' shape='poly' coords='45,60,54,64,54,75,45,79,36,75,36,64' onclick='clickColor("#00CC66",-139,36)' onmouseover='mouseOverColor("#00CC66")' alt='#00CC66' /><area style='cursor:pointer' shape='poly' coords='63,60,72,64,72,75,63,79,54,75,54,64' onclick='clickColor("#00FF99",-139,54)' onmouseover='mouseOverColor("#00FF99")' alt='#00FF99' /><area style='cursor:pointer' shape='poly' coords='81,60,90,64,90,75,81,79,72,75,72,64' onclick='clickColor("#66FFCC",-139,72)' onmouseover='mouseOverColor("#66FFCC")' alt='#66FFCC' /><area style='cursor:pointer' shape='poly' coords='99,60,108,64,108,75,99,79,90,75,90,64' onclick='clickColor("#66FFFF",-139,90)' onmouseover='mouseOverColor("#66FFFF")' alt='#66FFFF' /><area style='cursor:pointer' shape='poly' coords='117,60,126,64,126,75,117,79,108,75,108,64' onclick='clickColor("#66CCFF",-139,108)' onmouseover='mouseOverColor("#66CCFF")' alt='#66CCFF' /><area style='cursor:pointer' shape='poly' coords='135,60,144,64,144,75,135,79,126,75,126,64' onclick='clickColor("#99CCFF",-139,126)' onmouseover='mouseOverColor("#99CCFF")' alt='#99CCFF' /><area style='cursor:pointer' shape='poly' coords='153,60,162,64,162,75,153,79,144,75,144,64' onclick='clickColor("#9999FF",-139,144)' onmouseover='mouseOverColor("#9999FF")' alt='#9999FF' /><area style='cursor:pointer' shape='poly' coords='171,60,180,64,180,75,171,79,162,75,162,64' onclick='clickColor("#9966FF",-139,162)' onmouseover='mouseOverColor("#9966FF")' alt='#9966FF' /><area style='cursor:pointer' shape='poly' coords='189,60,198,64,198,75,189,79,180,75,180,64' onclick='clickColor("#9933FF",-139,180)' onmouseover='mouseOverColor("#9933FF")' alt='#9933FF' /><area style='cursor:pointer' shape='poly' coords='207,60,216,64,216,75,207,79,198,75,198,64' onclick='clickColor("#9900FF",-139,198)' onmouseover='mouseOverColor("#9900FF")' alt='#9900FF' /><area style='cursor:pointer' shape='poly' coords='18,75,27,79,27,90,18,94,9,90,9,79' onclick='clickColor("#006600",-124,9)' onmouseover='mouseOverColor("#006600")' alt='#006600' /><area style='cursor:pointer' shape='poly' coords='36,75,45,79,45,90,36,94,27,90,27,79' onclick='clickColor("#00CC00",-124,27)' onmouseover='mouseOverColor("#00CC00")' alt='#00CC00' /><area style='cursor:pointer' shape='poly' coords='54,75,63,79,63,90,54,94,45,90,45,79' onclick='clickColor("#00FF00",-124,45)' onmouseover='mouseOverColor("#00FF00")' alt='#00FF00' /><area style='cursor:pointer' shape='poly' coords='72,75,81,79,81,90,72,94,63,90,63,79' onclick='clickColor("#66FF99",-124,63)' onmouseover='mouseOverColor("#66FF99")' alt='#66FF99' /><area style='cursor:pointer' shape='poly' coords='90,75,99,79,99,90,90,94,81,90,81,79' onclick='clickColor("#99FFCC",-124,81)' onmouseover='mouseOverColor("#99FFCC")' alt='#99FFCC' /><area style='cursor:pointer' shape='poly' coords='108,75,117,79,117,90,108,94,99,90,99,79' onclick='clickColor("#CCFFFF",-124,99)' onmouseover='mouseOverColor("#CCFFFF")' alt='#CCFFFF' /><area style='cursor:pointer' shape='poly' coords='126,75,135,79,135,90,126,94,117,90,117,79' onclick='clickColor("#CCCCFF",-124,117)' onmouseover='mouseOverColor("#CCCCFF")' alt='#CCCCFF' /><area style='cursor:pointer' shape='poly' coords='144,75,153,79,153,90,144,94,135,90,135,79' onclick='clickColor("#CC99FF",-124,135)' onmouseover='mouseOverColor("#CC99FF")' alt='#CC99FF' /><area style='cursor:pointer' shape='poly' coords='162,75,171,79,171,90,162,94,153,90,153,79' onclick='clickColor("#CC66FF",-124,153)' onmouseover='mouseOverColor("#CC66FF")' alt='#CC66FF' /><area style='cursor:pointer' shape='poly' coords='180,75,189,79,189,90,180,94,171,90,171,79' onclick='clickColor("#CC33FF",-124,171)' onmouseover='mouseOverColor("#CC33FF")' alt='#CC33FF' /><area style='cursor:pointer' shape='poly' coords='198,75,207,79,207,90,198,94,189,90,189,79' onclick='clickColor("#CC00FF",-124,189)' onmouseover='mouseOverColor("#CC00FF")' alt='#CC00FF' /><area style='cursor:pointer' shape='poly' coords='216,75,225,79,225,90,216,94,207,90,207,79' onclick='clickColor("#9900CC",-124,207)' onmouseover='mouseOverColor("#9900CC")' alt='#9900CC' /><area style='cursor:pointer' shape='poly' coords='9,90,18,94,18,105,9,109,0,105,0,94' onclick='clickColor("#003300",-109,0)' onmouseover='mouseOverColor("#003300")' alt='#003300' /><area style='cursor:pointer' shape='poly' coords='27,90,36,94,36,105,27,109,18,105,18,94' onclick='clickColor("#009933",-109,18)' onmouseover='mouseOverColor("#009933")' alt='#009933' /><area style='cursor:pointer' shape='poly' coords='45,90,54,94,54,105,45,109,36,105,36,94' onclick='clickColor("#33CC33",-109,36)' onmouseover='mouseOverColor("#33CC33")' alt='#33CC33' /><area style='cursor:pointer' shape='poly' coords='63,90,72,94,72,105,63,109,54,105,54,94' onclick='clickColor("#66FF66",-109,54)' onmouseover='mouseOverColor("#66FF66")' alt='#66FF66' /><area style='cursor:pointer' shape='poly' coords='81,90,90,94,90,105,81,109,72,105,72,94' onclick='clickColor("#99FF99",-109,72)' onmouseover='mouseOverColor("#99FF99")' alt='#99FF99' /><area style='cursor:pointer' shape='poly' coords='99,90,108,94,108,105,99,109,90,105,90,94' onclick='clickColor("#CCFFCC",-109,90)' onmouseover='mouseOverColor("#CCFFCC")' alt='#CCFFCC' /><area style='cursor:pointer' shape='poly' coords='117,90,126,94,126,105,117,109,108,105,108,94' onclick='clickColor("#FFFFFF",-109,108)' onmouseover='mouseOverColor("#FFFFFF")' alt='#FFFFFF' /><area style='cursor:pointer' shape='poly' coords='135,90,144,94,144,105,135,109,126,105,126,94' onclick='clickColor("#FFCCFF",-109,126)' onmouseover='mouseOverColor("#FFCCFF")' alt='#FFCCFF' /><area style='cursor:pointer' shape='poly' coords='153,90,162,94,162,105,153,109,144,105,144,94' onclick='clickColor("#FF99FF",-109,144)' onmouseover='mouseOverColor("#FF99FF")' alt='#FF99FF' /><area style='cursor:pointer' shape='poly' coords='171,90,180,94,180,105,171,109,162,105,162,94' onclick='clickColor("#FF66FF",-109,162)' onmouseover='mouseOverColor("#FF66FF")' alt='#FF66FF' /><area style='cursor:pointer' shape='poly' coords='189,90,198,94,198,105,189,109,180,105,180,94' onclick='clickColor("#FF00FF",-109,180)' onmouseover='mouseOverColor("#FF00FF")' alt='#FF00FF' /><area style='cursor:pointer' shape='poly' coords='207,90,216,94,216,105,207,109,198,105,198,94' onclick='clickColor("#CC00CC",-109,198)' onmouseover='mouseOverColor("#CC00CC")' alt='#CC00CC' /><area style='cursor:pointer' shape='poly' coords='225,90,234,94,234,105,225,109,216,105,216,94' onclick='clickColor("#660066",-109,216)' onmouseover='mouseOverColor("#660066")' alt='#660066' /><area style='cursor:pointer' shape='poly' coords='18,105,27,109,27,120,18,124,9,120,9,109' onclick='clickColor("#336600",-94,9)' onmouseover='mouseOverColor("#336600")' alt='#336600' /><area style='cursor:pointer' shape='poly' coords='36,105,45,109,45,120,36,124,27,120,27,109' onclick='clickColor("#009900",-94,27)' onmouseover='mouseOverColor("#009900")' alt='#009900' /><area style='cursor:pointer' shape='poly' coords='54,105,63,109,63,120,54,124,45,120,45,109' onclick='clickColor("#66FF33",-94,45)' onmouseover='mouseOverColor("#66FF33")' alt='#66FF33' /><area style='cursor:pointer' shape='poly' coords='72,105,81,109,81,120,72,124,63,120,63,109' onclick='clickColor("#99FF66",-94,63)' onmouseover='mouseOverColor("#99FF66")' alt='#99FF66' /><area style='cursor:pointer' shape='poly' coords='90,105,99,109,99,120,90,124,81,120,81,109' onclick='clickColor("#CCFF99",-94,81)' onmouseover='mouseOverColor("#CCFF99")' alt='#CCFF99' /><area style='cursor:pointer' shape='poly' coords='108,105,117,109,117,120,108,124,99,120,99,109' onclick='clickColor("#FFFFCC",-94,99)' onmouseover='mouseOverColor("#FFFFCC")' alt='#FFFFCC' /><area style='cursor:pointer' shape='poly' coords='126,105,135,109,135,120,126,124,117,120,117,109' onclick='clickColor("#FFCCCC",-94,117)' onmouseover='mouseOverColor("#FFCCCC")' alt='#FFCCCC' /><area style='cursor:pointer' shape='poly' coords='144,105,153,109,153,120,144,124,135,120,135,109' onclick='clickColor("#FF99CC",-94,135)' onmouseover='mouseOverColor("#FF99CC")' alt='#FF99CC' /><area style='cursor:pointer' shape='poly' coords='162,105,171,109,171,120,162,124,153,120,153,109' onclick='clickColor("#FF66CC",-94,153)' onmouseover='mouseOverColor("#FF66CC")' alt='#FF66CC' /><area style='cursor:pointer' shape='poly' coords='180,105,189,109,189,120,180,124,171,120,171,109' onclick='clickColor("#FF33CC",-94,171)' onmouseover='mouseOverColor("#FF33CC")' alt='#FF33CC' /><area style='cursor:pointer' shape='poly' coords='198,105,207,109,207,120,198,124,189,120,189,109' onclick='clickColor("#CC0099",-94,189)' onmouseover='mouseOverColor("#CC0099")' alt='#CC0099' /><area style='cursor:pointer' shape='poly' coords='216,105,225,109,225,120,216,124,207,120,207,109' onclick='clickColor("#993399",-94,207)' onmouseover='mouseOverColor("#993399")' alt='#993399' /><area style='cursor:pointer' shape='poly' coords='27,120,36,124,36,135,27,139,18,135,18,124' onclick='clickColor("#333300",-79,18)' onmouseover='mouseOverColor("#333300")' alt='#333300' /><area style='cursor:pointer' shape='poly' coords='45,120,54,124,54,135,45,139,36,135,36,124' onclick='clickColor("#669900",-79,36)' onmouseover='mouseOverColor("#669900")' alt='#669900' /><area style='cursor:pointer' shape='poly' coords='63,120,72,124,72,135,63,139,54,135,54,124' onclick='clickColor("#99FF33",-79,54)' onmouseover='mouseOverColor("#99FF33")' alt='#99FF33' /><area style='cursor:pointer' shape='poly' coords='81,120,90,124,90,135,81,139,72,135,72,124' onclick='clickColor("#CCFF66",-79,72)' onmouseover='mouseOverColor("#CCFF66")' alt='#CCFF66' /><area style='cursor:pointer' shape='poly' coords='99,120,108,124,108,135,99,139,90,135,90,124' onclick='clickColor("#FFFF99",-79,90)' onmouseover='mouseOverColor("#FFFF99")' alt='#FFFF99' /><area style='cursor:pointer' shape='poly' coords='117,120,126,124,126,135,117,139,108,135,108,124' onclick='clickColor("#FFCC99",-79,108)' onmouseover='mouseOverColor("#FFCC99")' alt='#FFCC99' /><area style='cursor:pointer' shape='poly' coords='135,120,144,124,144,135,135,139,126,135,126,124' onclick='clickColor("#FF9999",-79,126)' onmouseover='mouseOverColor("#FF9999")' alt='#FF9999' /><area style='cursor:pointer' shape='poly' coords='153,120,162,124,162,135,153,139,144,135,144,124' onclick='clickColor("#FF6699",-79,144)' onmouseover='mouseOverColor("#FF6699")' alt='#FF6699' /><area style='cursor:pointer' shape='poly' coords='171,120,180,124,180,135,171,139,162,135,162,124' onclick='clickColor("#FF3399",-79,162)' onmouseover='mouseOverColor("#FF3399")' alt='#FF3399' /><area style='cursor:pointer' shape='poly' coords='189,120,198,124,198,135,189,139,180,135,180,124' onclick='clickColor("#CC3399",-79,180)' onmouseover='mouseOverColor("#CC3399")' alt='#CC3399' /><area style='cursor:pointer' shape='poly' coords='207,120,216,124,216,135,207,139,198,135,198,124' onclick='clickColor("#990099",-79,198)' onmouseover='mouseOverColor("#990099")' alt='#990099' /><area style='cursor:pointer' shape='poly' coords='36,135,45,139,45,150,36,154,27,150,27,139' onclick='clickColor("#666633",-64,27)' onmouseover='mouseOverColor("#666633")' alt='#666633' /><area style='cursor:pointer' shape='poly' coords='54,135,63,139,63,150,54,154,45,150,45,139' onclick='clickColor("#99CC00",-64,45)' onmouseover='mouseOverColor("#99CC00")' alt='#99CC00' /><area style='cursor:pointer' shape='poly' coords='72,135,81,139,81,150,72,154,63,150,63,139' onclick='clickColor("#CCFF33",-64,63)' onmouseover='mouseOverColor("#CCFF33")' alt='#CCFF33' /><area style='cursor:pointer' shape='poly' coords='90,135,99,139,99,150,90,154,81,150,81,139' onclick='clickColor("#FFFF66",-64,81)' onmouseover='mouseOverColor("#FFFF66")' alt='#FFFF66' /><area style='cursor:pointer' shape='poly' coords='108,135,117,139,117,150,108,154,99,150,99,139' onclick='clickColor("#FFCC66",-64,99)' onmouseover='mouseOverColor("#FFCC66")' alt='#FFCC66' /><area style='cursor:pointer' shape='poly' coords='126,135,135,139,135,150,126,154,117,150,117,139' onclick='clickColor("#FF9966",-64,117)' onmouseover='mouseOverColor("#FF9966")' alt='#FF9966' /><area style='cursor:pointer' shape='poly' coords='144,135,153,139,153,150,144,154,135,150,135,139' onclick='clickColor("#FF6666",-64,135)' onmouseover='mouseOverColor("#FF6666")' alt='#FF6666' /><area style='cursor:pointer' shape='poly' coords='162,135,171,139,171,150,162,154,153,150,153,139' onclick='clickColor("#FF0066",-64,153)' onmouseover='mouseOverColor("#FF0066")' alt='#FF0066' /><area style='cursor:pointer' shape='poly' coords='180,135,189,139,189,150,180,154,171,150,171,139' onclick='clickColor("#CC6699",-64,171)' onmouseover='mouseOverColor("#CC6699")' alt='#CC6699' /><area style='cursor:pointer' shape='poly' coords='198,135,207,139,207,150,198,154,189,150,189,139' onclick='clickColor("#993366",-64,189)' onmouseover='mouseOverColor("#993366")' alt='#993366' /><area style='cursor:pointer' shape='poly' coords='45,150,54,154,54,165,45,169,36,165,36,154' onclick='clickColor("#999966",-49,36)' onmouseover='mouseOverColor("#999966")' alt='#999966' /><area style='cursor:pointer' shape='poly' coords='63,150,72,154,72,165,63,169,54,165,54,154' onclick='clickColor("#CCCC00",-49,54)' onmouseover='mouseOverColor("#CCCC00")' alt='#CCCC00' /><area style='cursor:pointer' shape='poly' coords='81,150,90,154,90,165,81,169,72,165,72,154' onclick='clickColor("#FFFF00",-49,72)' onmouseover='mouseOverColor("#FFFF00")' alt='#FFFF00' /><area style='cursor:pointer' shape='poly' coords='99,150,108,154,108,165,99,169,90,165,90,154' onclick='clickColor("#FFCC00",-49,90)' onmouseover='mouseOverColor("#FFCC00")' alt='#FFCC00' /><area style='cursor:pointer' shape='poly' coords='117,150,126,154,126,165,117,169,108,165,108,154' onclick='clickColor("#FF9933",-49,108)' onmouseover='mouseOverColor("#FF9933")' alt='#FF9933' /><area style='cursor:pointer' shape='poly' coords='135,150,144,154,144,165,135,169,126,165,126,154' onclick='clickColor("#FF6600",-49,126)' onmouseover='mouseOverColor("#FF6600")' alt='#FF6600' /><area style='cursor:pointer' shape='poly' coords='153,150,162,154,162,165,153,169,144,165,144,154' onclick='clickColor("#FF5050",-49,144)' onmouseover='mouseOverColor("#FF5050")' alt='#FF5050' /><area style='cursor:pointer' shape='poly' coords='171,150,180,154,180,165,171,169,162,165,162,154' onclick='clickColor("#CC0066",-49,162)' onmouseover='mouseOverColor("#CC0066")' alt='#CC0066' /><area style='cursor:pointer' shape='poly' coords='189,150,198,154,198,165,189,169,180,165,180,154' onclick='clickColor("#660033",-49,180)' onmouseover='mouseOverColor("#660033")' alt='#660033' /><area style='cursor:pointer' shape='poly' coords='54,165,63,169,63,180,54,184,45,180,45,169' onclick='clickColor("#996633",-34,45)' onmouseover='mouseOverColor("#996633")' alt='#996633' /><area style='cursor:pointer' shape='poly' coords='72,165,81,169,81,180,72,184,63,180,63,169' onclick='clickColor("#CC9900",-34,63)' onmouseover='mouseOverColor("#CC9900")' alt='#CC9900' /><area style='cursor:pointer' shape='poly' coords='90,165,99,169,99,180,90,184,81,180,81,169' onclick='clickColor("#FF9900",-34,81)' onmouseover='mouseOverColor("#FF9900")' alt='#FF9900' /><area style='cursor:pointer' shape='poly' coords='108,165,117,169,117,180,108,184,99,180,99,169' onclick='clickColor("#CC6600",-34,99)' onmouseover='mouseOverColor("#CC6600")' alt='#CC6600' /><area style='cursor:pointer' shape='poly' coords='126,165,135,169,135,180,126,184,117,180,117,169' onclick='clickColor("#FF3300",-34,117)' onmouseover='mouseOverColor("#FF3300")' alt='#FF3300' /><area style='cursor:pointer' shape='poly' coords='144,165,153,169,153,180,144,184,135,180,135,169' onclick='clickColor("#FF0000",-34,135)' onmouseover='mouseOverColor("#FF0000")' alt='#FF0000' /><area style='cursor:pointer' shape='poly' coords='162,165,171,169,171,180,162,184,153,180,153,169' onclick='clickColor("#CC0000",-34,153)' onmouseover='mouseOverColor("#CC0000")' alt='#CC0000' /><area style='cursor:pointer' shape='poly' coords='180,165,189,169,189,180,180,184,171,180,171,169' onclick='clickColor("#990033",-34,171)' onmouseover='mouseOverColor("#990033")' alt='#990033' /><area style='cursor:pointer' shape='poly' coords='63,180,72,184,72,195,63,199,54,195,54,184' onclick='clickColor("#663300",-19,54)' onmouseover='mouseOverColor("#663300")' alt='#663300' /><area style='cursor:pointer' shape='poly' coords='81,180,90,184,90,195,81,199,72,195,72,184' onclick='clickColor("#996600",-19,72)' onmouseover='mouseOverColor("#996600")' alt='#996600' /><area style='cursor:pointer' shape='poly' coords='99,180,108,184,108,195,99,199,90,195,90,184' onclick='clickColor("#CC3300",-19,90)' onmouseover='mouseOverColor("#CC3300")' alt='#CC3300' /><area style='cursor:pointer' shape='poly' coords='117,180,126,184,126,195,117,199,108,195,108,184' onclick='clickColor("#993300",-19,108)' onmouseover='mouseOverColor("#993300")' alt='#993300' /><area style='cursor:pointer' shape='poly' coords='135,180,144,184,144,195,135,199,126,195,126,184' onclick='clickColor("#990000",-19,126)' onmouseover='mouseOverColor("#990000")' alt='#990000' /><area style='cursor:pointer' shape='poly' coords='153,180,162,184,162,195,153,199,144,195,144,184' onclick='clickColor("#800000",-19,144)' onmouseover='mouseOverColor("#800000")' alt='#800000' /><area style='cursor:pointer' shape='poly' coords='171,180,180,184,180,195,171,199,162,195,162,184' onclick='clickColor("#993333",-19,162)' onmouseover='mouseOverColor("#993333")' alt='#993333' /></map>
        <div id='selectedhexagon' style='visibility:hidden;position:relative;width:21px;height:21px;background-image:url("selectedcolor.gif")'></div>
      <div id='divpreview'>&nbsp;</div>
        <h3>Or Enter a Color:</h3>
        <div id="entercolorDIV" class="input-group">
          <input type="text" id="entercolor" class="form-control" placeholder="Colorvalue" onfocus="clearWrongInput();">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" onclick="clickColor(0,-1,-1)">OK</button>
          </span>
        </div>
        <div id="wronginputDIV">Wrong Input</div>
        <br>
        <div id="html5DIV">
          <h3>Or Use HTML5:</h3>
          <input type="color" id="html5colorpicker" class="form-control" onchange="clickColor(0, -1, -1, 5)" value="#ff0000">
        </div>
        <br>
        <br>        
      </div>
    </div>
    <div id="col2" class="col-md-4 col-sm-12" style="text-align:center;">
      <h3>Selected Color:</h3>
      <div id="selectedcolor"></div>
      <div id="colorhexDIV"></div>
      <div id="colorrgbDIV"></div>
      <div id="colornamDIV"></div>      
    </div>
    <div id="col3" class="col-md-4 col-sm-12" style="text-align:center;">
      <div id="colorshades" style="height:500px;font-size:14px;">
        <table class='colorshade' cellpadding='0' cellspacing='0' border='0'><tr><td><h3>Shades:</h3></td><td><h3>Hex:</h3></td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#000000",-1,-1)' onmouseover='mouseOverColor("#000000")' style='height:20px;color:#FFFFFF;background:rgb(0,0,0)'>&nbsp;</td><td class='colorshadetxt'>#000000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#1A0000",-1,-1)' onmouseover='mouseOverColor("#1A0000")' style='height:20px;color:#FFFFFF;background:rgb(26,0,0)'>&nbsp;</td><td class='colorshadetxt'>#1A0000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#330000",-1,-1)' onmouseover='mouseOverColor("#330000")' style='height:20px;color:#FFFFFF;background:rgb(51,0,0)'>&nbsp;</td><td class='colorshadetxt'>#330000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#4C0000",-1,-1)' onmouseover='mouseOverColor("#4C0000")' style='height:20px;color:#FFFFFF;background:rgb(76,0,0)'>&nbsp;</td><td class='colorshadetxt'>#4C0000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#660000",-1,-1)' onmouseover='mouseOverColor("#660000")' style='height:20px;color:#FFFFFF;background:rgb(102,0,0)'>&nbsp;</td><td class='colorshadetxt'>#660000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#800000",-1,-1)' onmouseover='mouseOverColor("#800000")' style='height:20px;color:#FFFFFF;background:rgb(128,0,0)'>&nbsp;</td><td class='colorshadetxt'>#800000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#990000",-1,-1)' onmouseover='mouseOverColor("#990000")' style='height:20px;color:#FFFFFF;background:rgb(153,0,0)'>&nbsp;</td><td class='colorshadetxt'>#990000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#B20000",-1,-1)' onmouseover='mouseOverColor("#B20000")' style='height:20px;color:#FFFFFF;background:rgb(178,0,0)'>&nbsp;</td><td class='colorshadetxt'>#B20000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#CC0000",-1,-1)' onmouseover='mouseOverColor("#CC0000")' style='height:20px;color:#FFFFFF;background:rgb(204,0,0)'>&nbsp;</td><td class='colorshadetxt'>#CC0000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#E60000",-1,-1)' onmouseover='mouseOverColor("#E60000")' style='height:20px;color:#FFFFFF;background:rgb(230,0,0)'>&nbsp;</td><td class='colorshadetxt'>#E60000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF0000",-1,-1)' onmouseover='mouseOverColor("#FF0000")' style='height:20px;background:rgb(255,0,0)'>&nbsp;</td><td class='colorshadetxt' style='height:30px;font-weight:bold;'>FF0000</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF1919",-1,-1)' onmouseover='mouseOverColor("#FF1919")' style='height:20px;background:rgb(255,25,25);'></td><td class='colorshadetxt'>#FF1919</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF3333",-1,-1)' onmouseover='mouseOverColor("#FF3333")' style='height:20px;background:rgb(255,51,51);'></td><td class='colorshadetxt'>#FF3333</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF4D4D",-1,-1)' onmouseover='mouseOverColor("#FF4D4D")' style='height:20px;background:rgb(255,77,77);'></td><td class='colorshadetxt'>#FF4D4D</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF6666",-1,-1)' onmouseover='mouseOverColor("#FF6666")' style='height:20px;background:rgb(255,102,102);'></td><td class='colorshadetxt'>#FF6666</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF8080",-1,-1)' onmouseover='mouseOverColor("#FF8080")' style='height:20px;background:rgb(255,128,128);'></td><td class='colorshadetxt'>#FF8080</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FF9999",-1,-1)' onmouseover='mouseOverColor("#FF9999")' style='height:20px;background:rgb(255,153,153);'></td><td class='colorshadetxt'>#FF9999</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FFB2B2",-1,-1)' onmouseover='mouseOverColor("#FFB2B2")' style='height:20px;background:rgb(255,178,178);'></td><td class='colorshadetxt'>#FFB2B2</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FFCCCC",-1,-1)' onmouseover='mouseOverColor("#FFCCCC")' style='height:20px;background:rgb(255,204,204);'></td><td class='colorshadetxt'>#FFCCCC</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FFE6E6",-1,-1)' onmouseover='mouseOverColor("#FFE6E6")' style='height:20px;background:rgb(255,230,230);'></td><td class='colorshadetxt'>#FFE6E6</td></tr><tr><td class='colorshade' onmouseout='mouseOutMap()' onclick='clickColor("#FFFFFF",-1,-1)' onmouseover='mouseOverColor("#FFFFFF")' style='height:20px;background:rgb(255,255,255);border-bottom:1px solid #e3e3e3;'></td><td class='colorshadetxt'>#FFFFFF</td></tr></table>
      </div>
    </div>
  </div>
</div>
<div class="chapter">
<div class="prev"><a class="chapter" href="ref_colorgroups.asp">&laquo; Previous</a></div>
<div class="next"><a class="chapter" href="ref_colormixer.asp">Next Reference &raquo;</a></div>
</div>

     <br>
    </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-12">
     <div class="row sidesection" style="margin-top:15px;padding:0;overflow:visible;">
      <div id="skyscraper">
       <div id="div-gpt-ad-1422003450156-5" style="min-height:600px;">
        <script>
         googletag.cmd.push(function() {
         googletag.display('div-gpt-ad-1422003450156-5');
         });
        </script> 
       </div>
      </div>
     </div>
     <div class="row sidesection">
      <h3>W3SCHOOLS EXAMS</h3>
      <a target="_blank" href="http://www.w3schools.com/cert/default.asp">HTML, CSS, JavaScript, PHP, jQuery, and XML Certifications</a>
     </div>
     <div class="row sidesection">
      <h3>COLOR PICKER</h3>
      <a href="/tags/ref_colorpicker.asp">
      <img src="/images/colorpicker.gif" alt="colorpicker"></a>
     </div>
     <div class="row sidesection">
      <h3>SHARE THIS PAGE</h3>
      <div class="sharethis">
       <script>
       <!--
       try{
       loc=location.pathname;
       if (loc.toUpperCase().indexOf(".ASP")<0) loc=loc+"default.asp";
       txt='<a href="http://www.facebook.com/sharer.php?u=http://www.w3schools.com'+loc+'" target="_blank" title="Facebook"><span class="share sharefacebook social social-facebook"></span></a>';
       txt=txt+'<a href="http://twitter.com/home?status=Currently reading http://www.w3schools.com'+loc+'" target="_blank" title="Twitter"><span class="share sharetwitter social social-twitter"></span></a>';
       txt=txt+'<a href="https://plus.google.com/share?url=http://www.w3schools.com'+loc+'" target="_blank" title="Google+"><span class="share sharegoogle social social-google-plus"></span></a>';
       document.write(txt);
       }
       catch(e) {}
       //-->
       </script>
      </div>
     </div>
     <div class="row sidesection">
       <a href="javascript:void(0);" onclick="clickFBLike()" title="Like W3Schools on Facebook">
         <span class="share sharefblike glyphicons glyphicons-thumbs-up"></span>
       </a>
       <div id="fblikeframe">
         <div id="popupframe"></div>
         <div id="popupDIV"></div>
       </div>
     </div>
   </div>
  </div>
  
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">

<hr style="margin-bottom:0;">
<div class="bottomads" style="overflow:hidden;">
<!-- BottomMediumRectangle -->
<div id='div-gpt-ad-1422003450156-0'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-0'); });
</script>
</div>
<!-- RightBottomMediumRectangle -->
<div id='div-gpt-ad-1422003450156-3'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-3'); });
</script>
</div>
<div style="clear:both"></div>
</div>



    <div class="footer">
     <hr style="margin-bottom:14px;margin-top:0px;">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
	   <a href="" onclick="displayError();return false" style="white-space:nowrap;">REPORT ERROR</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
       <a href="" target="_blank" onclick="printPage();return false;">PRINT PAGE</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
       <a href="/forum/default.asp" target="_blank">FORUM</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
	   <a href="/about/default.asp" target="_top">ABOUT</a>
      </div>
     </div>
     <hr style="margin-bottom:2px;margin-top:14px;">
     <div class="container-fluid jumbotron" id="err_form">
      <button type="button" class="close" onclick="hideError()"><span>&times;</span></button>
      <h2>Your Suggestion:</h2>
      <form role="form">
      <div class="form-group">
        <label for="err_email">Your Email:</label>
        <input class="form-control" type="email" id="err_email" name="err_email" />
      </div>
      <div class="form-group">
        <label for="err_email">Page address:</label>
        <input class="form-control" type="text" id="err_url" name="err_url" disabled="disabled" />
      </div>
      <div class="form-group">
        <label for="err_email">Description:</label>
        <textarea rows="10" class="form-control" id="err_desc" name="err_desc" style="max-width:100%;"></textarea>
      </div>
      <div class="form-group">        
        <button type="button" class="btn btn-default" onclick="sendErr()">Submit</button>
      </div>
      </form>
     </div>
     <div class="container-fluid jumbotron" id="err_sent" style="clear:both;">
      <button type="button" class="close" onclick="hideSent()"><span>&times;</span></button>
      <h2>Thank You For Helping Us!</h2>
      <p>Your message has been sent to W3Schools.</p>
     </div>
         
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 Tutorials</h3>
                  <a href="/html/default.asp">HTML Tutorial</a><br>
                  <a href="/css/default.asp">CSS Tutorial</a><br>
                  <a href="/js/default.asp">JavaScript Tutorial</a><br>
                  <a href="/sql/default.asp">SQL Tutorial</a><br>
                  <a href="/php/default.asp">PHP Tutorial</a><br>
                  <a href="/jquery/default.asp">jQuery Tutorial</a><br>
                  <a href="/bootstrap/default.asp">Bootstrap Tutorial</a><br>
                  <a href="/angular/default.asp">Angular Tutorial</a><br>
                  <a href="/aspnet/default.asp">ASP.NET Tutorial</a><br>
                  <a href="/xml/default.asp">XML Tutorial</a><br>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 References</h3>
                  <a href="/tags/default.asp">HTML Reference</a><br>
                  <a href="/cssref/default.asp">CSS Reference</a><br>
                  <a href="/jsref/default.asp">JavaScript Reference</a><br>
                  <a href="/browsers/default.asp">Browser Statistics</a><br>
                  <a href="/jsref/dom_obj_document.asp">HTML DOM</a><br>
                  <a href="/php/php_ref_array.asp">PHP Reference</a><br>
                  <a href="/jquery/jquery_ref_selectors.asp">jQuery Reference</a><br>
                  <a href="/tags/ref_colornames.asp">HTML Colors</a><br>
                  <a href="/charsets/default.asp">HTML Character Sets</a><br>
                  <a href="/dom/dom_nodetype.asp">XML DOM</a><br>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 Examples</h3>
                  <a href="/html/html_examples.asp">HTML Examples</a><br>
                  <a href="/css/css_examples.asp">CSS Examples</a><br>
                  <a href="/js/js_examples.asp">JavaScript Examples</a><br>
                  <a href="/js/js_dom_examples.asp">HTML DOM Examples</a><br>
                  <a href="/php/php_examples.asp">PHP Examples</a><br>
                  <a href="/jquery/jquery_examples.asp">jQuery Examples</a><br>
                  <a href="/xml/xml_examples.asp">XML Examples</a><br>
                  <a href="/dom/dom_examples.asp">XML DOM Examples</a><br>
                  <a href="/asp/asp_examples.asp">ASP Examples</a><br>
                  <a href="/svg/svg_examples.asp">SVG Examples</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Web Certificates</h3>
                  <a href="/cert/default.asp">HTML Certificate</a><br>
                  <a href="/cert/default.asp">HTML5 Certificate</a><br>
                  <a href="/cert/default.asp">CSS Certificate</a><br>
                  <a href="/cert/default.asp">JavaScript Certificate</a><br>
                  <a href="/cert/default.asp">jQuery Certificate</a><br>
                  <a href="/cert/default.asp">PHP Certificate</a><br>
                  <a href="/cert/default.asp">Bootstrap Certificate</a><br>
                  <a href="/cert/default.asp">XML Certificate</a><br>
                  
                </div>
              </div>        
            </div>        
     <hr>
    </div>
     <div class="footer">
       W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding.
       Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
       While using this site, you agree to have read and accepted our <a href="/about/about_copyright.asp">terms of use</a>,
       <a href="/about/about_privacy.asp">cookie and privacy policy</a>.
       <a href="/about/about_copyright.asp">Copyright 1999-2015</a> by Refsnes Data. All Rights Reserved.<br><br>
       <a href="http://www.w3schools.com">
       <img style="width:150px;height:28px;border:0" src="/images/w3schoolscom_gray.gif" alt="W3Schools.com"></a>
     </div>

   </div>
  </div>
 </div>

</div>
</div>
<div id='w3dropdowntutorials' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/html/default.asp'>HTML Tutorial</a>
<a href='/css/default.asp'>CSS Tutorial</a>
<a href='/w3css/default.asp'>W3.CSS Tutorial</a>
<a href='/bootstrap/default.asp'>Bootstrap Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href='/js/default.asp'>JavaScript Tutorial</a>
<a href='/jquery/default.asp'>jQuery Tutorial</a>
<a href='/jquerymobile/default.asp'>jQuery Mobile Tutorial</a>
<a href='/appml/default.asp'>AppML Tutorial</a>
<a href='/angular/default.asp'>AngularJS Tutorial</a>
<a href='/ajax/default.asp'>AJAX Tutorial</a>
<a href='/json/default.asp'>JSON Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Graphics</h3>
<a href='/canvas/default.asp'>Canvas Tutorial</a>
<a href='/svg/default.asp'>SVG Tutorial</a>
<a href='/icons/default.asp'>Icons Tutorial</a>
<a href='/googleapi/default.asp'>Google Maps Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href='/sql/default.asp'>SQL Tutorial</a>
<a href='/php/default.asp'>PHP Tutorial</a>
<a href='/asp/default.asp'>ASP Tutorial</a>
<a href='/aspnet/default.asp'>ASP.NET Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Web</h3>
<a href='/website/default.asp'>Web Building</a>
<a href='/browsers/default.asp'>Web Statistics</a>
<a href='/cert/default.asp'>Web Certification</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href='/xml/default.asp'>XML Tutorial</a>
<a href='/schema/default.asp'>Schema Tutorial</a>
<a href='/dom/default.asp'>XML DOM Tutorial</a>
<a href='/xsl/default.asp'>XSLT Tutorial</a>
<a href='/xquery/default.asp'>XQuery Tutorial</a>
<a href='/webservices/default.asp'>WSDL Tutorial</a>
</div>
</div>
</div>
<div id='w3dropdownreferences' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/tags/default.asp'>HTML Tag Reference</a>
<a href='/tags/ref_eventattributes.asp'>HTML Event Reference</a>
<a href='/tags/ref_colornames.asp'>HTML Color Reference</a>
<a href='/cssref/default.asp'>CSS 1,2,3 Reference</a>
<a href='/w3css/w3css_reference.asp'>W3.CSS Reference</a>
<a href='/bootstrap/bootstrap_ref_css_text.asp'>Bootstrap Reference</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href='/jsref/default.asp'>JavaScript Reference</a>
<a href='/jsref/default.asp'>HTML DOM Reference</a>
<a href='/jquery/jquery_ref_selectors.asp'>jQuery Reference</a>
<a href='/jquerymobile/jquerymobile_ref_data.asp'>jQuery Mobile Reference</a>
<a href='/googleAPI/google_maps_ref.asp'>Google Maps Reference</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href='/php/php_ref_array.asp'>PHP Reference</a>
<a href='/sql/sql_quickref.asp'>SQL Reference</a>
<a href='/asp/asp_ref_response.asp'>ASP Reference</a>
<a href='/aspnet/webpages_ref_classes.asp'>Razor Reference</a>
<a href='/aspnet/aspnet_refhtmlcontrols.asp'>ASP.NET Reference</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href='/dom/dom_nodetype.asp'>XML DOM Reference</a>
<a href='/xsl/xsl_w3celementref.asp'>XSLT Reference</a>
<a href='/xquery/xquery_reference.asp'>XQuery Reference</a>
<a href='/schema/schema_elements_ref.asp'>Schema Reference</a>
<a href='/svg/svg_reference.asp'>SVG Reference</a>
</div>
<div class="w3DropdownItem">
<h3>Charsets</h3>
<a href='/charsets/default.asp'>HTML Character Sets</a>
<a href='/charsets/ref_html_ascii.asp'>HTML ASCII</a>
<a href='/charsets/ref_html_ansi.asp'>HTML ANSI</a>
<a href='/charsets/ref_html_ansi.asp'>HTML Windows-1252</a>
<a href='/charsets/ref_html_8859.asp'>HTML ISO-8859-1</a>
<a href='/charsets/ref_html_symbols.asp'>HTML Symbols</a>
<a href='/charsets/ref_html_utf8.asp'>HTML UTF-8</a>
</div>
</div>
</div>
<div id='w3dropdownexamples' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/html/html_examples.asp'>HTML Examples</a>
<a href='/css/css_examples.asp'>CSS Examples</a>
<a href='/w3css/w3css_examples.asp'>W3.CSS Examples</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href="/js/js_examples.asp" target="_top">JavaScript Examples</a>
<a href="/js/js_dom_examples.asp" target="_top">HTML DOM Examples</a>
<a href="/jquery/jquery_examples.asp" target="_top">jQuery Examples</a>
<a href="/jquerymobile/jquerymobile_examples.asp" target="_top">jQuery Mobile Examples</a>
<a href="/angular/angular_examples.asp" target="_top">AngularJS Examples</a>
<a href="/ajax/ajax_examples.asp" target="_top">AJAX Examples</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href="/php/php_examples.asp" target="_top">PHP Examples</a>
<a href="/asp/asp_examples.asp" target="_top">ASP Examples</a>
<a href="/aspnet/webpages_examples.asp" target="_top">Razor Examples</a>
<a href="/aspnet/aspnet_examples.asp" target="_top">.NET Examples</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href="/xml/xml_examples.asp" target="_top">XML Examples</a>
<a href="/dom/dom_examples.asp" target="_top">XML DOM Examples</a>
<a href="/xsl/xsl_examples.asp" target="_top">XSL Examples</a>
<a href="/xsl/xsl_examples.asp" target="_top">XSLT Examples</a>
<a href="/xsl/xpath_examples.asp" target="_top">XPath Examples</a>
<a href="/xquery/xquery_example.asp" target="_top">XQuery Examples</a>
<a href="/schema/schema_example.asp" target="_top">Schema Examples</a>
<a href="/svg/svg_examples.asp" target="_top">SVG Examples</a>
</div>
</div>
</div>
<div id='w3dropdownsearch' class='w3DropdownMenu container-fluid' style="overflow:visible;">
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownInnerInner">
Search w3schools.com:
<div id='googleSearch' style="color:#000000;font-size:15px !important;"><div class='gcse-search'></div></div>
</div>
</div>
</div>
<div id='w3dropdowntranslate' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownInnerInner">
<div id='translateSection'>
Translate w3schools.com:<div id='google_translate_element'></div></div>
</div>
</div>
</div>

<script>
var menu = $('#topnavDIV'), pos = menu.offset();
$(window).scroll(function(){
    if($(this).scrollTop() > 40){    
        $("#topDIV").css("display","none");
    } else {
        $("#topDIV").css("display","");
    }
    if($(this).scrollTop() > pos.top){
        menu.addClass('topnavContainerScroll');        
        $(".w3DropdownMenu").addClass('w3DropdownMenuScroll');        
        $("#menyen").addClass('menyenScroll');
     } else if($(this).scrollTop() <= pos.top){
        menu.removeClass('topnavContainerScroll');
        $(".w3DropdownMenu").removeClass('w3DropdownMenuScroll');
        $("#menyen").removeClass('menyenScroll');
     } });
$(document).ready(function(){
    if(/Opera Mini/i.test(navigator.userAgent) ) {
        $(".topnavContainer").addClass('topnavContainerOperaMini');
        $(".prev").addClass('prevOperaMini');
        $(".next").addClass('nextOperaMini');
        $(".home").addClass('homeOperaMini');
        $(".video").addClass('videoOperaMini');
    }
    if($(this).scrollTop() > 40){    
        $("#topDIV").css("display","none");
    } else {
        $("#topDIV").css("display","");
    }
    $("#dropdownTutorialsBtn").click(function(){
    closeTheOthers("tutorials");
    if ($("#w3dropdowntutorials").css("display") == "none") {
      $("#dropdownTutorialsBtn").css("background-color","#f5f5f5");
      $("#dropdownTutorialsBtn").css("color","#555555");
    } else {
      $("#dropdownTutorialsBtn").css("background-color","");
      $("#dropdownTutorialsBtn").css("color","");
    }
    $("#w3dropdowntutorials").fadeToggle(200, function () {$("#dropdownTutorialsBtn").css("background-color","");$("#dropdownTutorialsBtn").css("color","");});
    return false;      
  });
  $("#dropdownReferencesBtn").click(function(){
    closeTheOthers("references");
    if ($("#w3dropdownreferences").css("display") == "none") {
      $("#dropdownReferencesBtn").css("background-color","#f5f5f5");
      $("#dropdownReferencesBtn").css("color","#555555");
    } else {
      $("#dropdownReferencesBtn").css("background-color","");
      $("#dropdownReferencesBtn").css("color","");
    }
    $("#w3dropdownreferences").fadeToggle(200, function(){$("#dropdownReferencesBtn").css("background-color","");$("#dropdownReferencesBtn").css("color","");});
    return false;      
  });
  $("#dropdownExamplesBtn").click(function(){
    closeTheOthers("examples");
    if ($("#w3dropdownexamples").css("display") == "none") {
      $("#dropdownExamplesBtn").css("background-color","#f5f5f5");
      $("#dropdownExamplesBtn").css("color","#555555");
    } else {
      $("#dropdownExamplesBtn").css("background-color","");
      $("#dropdownExamplesBtn").css("color","");
    }
    $("#w3dropdownexamples").fadeToggle(200, function(){$("#dropdownExamplesBtn").css("background-color","");$("#dropdownExamplesBtn").css("color","");});
    return false;      
  });
  $("#dropdownSearchBtn").click(function(){
    closeTheOthers("search");
    if ($("#w3dropdownsearch").css("display") == "none") {
      $("#dropdownSearchBtn").css("background-color","#f5f5f5");
      $("#dropdownSearchBtn").css("color","#555555");
    } else {
      $("#dropdownSearchBtn").css("background-color","");
      $("#dropdownSearchBtn").css("color","");
    }
    $("#w3dropdownsearch").fadeToggle(200, function(){$("#gsc-i-id1").focus();$("#dropdownSearchBtn").css("background-color","");});
    return false;      
  });
  $("#dropdownTranslateBtn").click(function(){
    closeTheOthers("translate");
    if ($("#w3dropdowntranslate").css("display") == "none") {
      $("#dropdownTranslateBtn").css("background-color","#f5f5f5");
      $("#dropdownTranslateBtn").css("color","#555555");
    } else {
      $("#dropdownTranslateBtn").css("background-color","");
      $("#dropdownTranslateBtn").css("color","");
    }
    $("#w3dropdowntranslate").fadeToggle(200, function(){$("#dropdownTranslateBtn").css("background-color","");});
    return false;      
  });
  $(".main").click(function(){
    closeTheOthers();
  });
  $(".top").click(function(){
    closeTheOthers();
  });
});
function closeTheOthers(x) {
    if (x != "tutorials") { 
        $("#dropdownTutorialsBtn").css("background-color","");
        $("#dropdownTutorialsBtn").css("color","");
        $("#w3dropdowntutorials").fadeOut(100);
    }
    if (x != "references") { 
        $("#dropdownReferencesBtn").css("background-color","");
        $("#dropdownReferencesBtn").css("color","");
        $("#w3dropdownreferences").fadeOut(100);
    }
    if (x != "examples") { 
        $("#dropdownExamplesBtn").css("background-color","");
        $("#dropdownExamplesBtn").css("color","");
        $("#w3dropdownexamples").fadeOut(100);
    }
    if (x != "search") { 
        $("#dropdownSearchBtn").css("background-color","");
        $("#dropdownSearchBtn").css("color","");
        $("#w3dropdownsearch").fadeOut(100);
    }
    if (x != "translate") { 
        $("#dropdownTranslateBtn").css("background-color","");
        $("#dropdownTranslateBtn").css("color","");
        $("#w3dropdowntranslate").fadeOut(100);
    }
}
var menyknapp_hartrykket = 0;
function vismenyen() {
closeTheOthers();
x = document.getElementById("menyen");
if (menyknapp_hartrykket == 0) {
    if(/Opera Mini/i.test(navigator.userAgent) ) {
        x.style.display = "block";
        x.style.paddingBottom = "40px";        
    } else {
		x.style.position = "fixed";
		x.style.zIndex = "1000";	
	    if ($("#toptext").css("display") == "none") {
	        x.style.top = "105px";
	    } else {
	        x.style.top = "135px";
	    }
		x.style.bottom = "0";	
		x.style.overflow = "auto";	
		x.style.display = "block";
		x.style.right = "0";
		x.style.backgroundColor = "#ffffff";
		x.style.padding = "20px";
		x.style.borderLeft = "2px solid #f1f1f1";
		x.style.borderBottom = "2px solid #f1f1f1";
	}
    menyknapp_hartrykket = 1;
} else {
    x.style.display = "none";
    menyknapp_hartrykket = 0;
}
}
function hideDropdownMenu() {
    closeTheOthers();
}
skyscraperResize();

</script>
<script src="/w3schools.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]--></body>
</html>
