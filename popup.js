
/* Author: James Craig ( james[at]cookiecrook[dot]com) */
/* License: Free for reuse. Forget credit. Need a designer/coder? My job's kinda boring. */

/* modified for sybilshanestudio.com by Barbara Miller (bjm[at]well[dot]com) */

var sUserAgent = navigator.userAgent.toLowerCase();
var isIE = document.all?true:false;
var isNS4 = document.layers?true:false;
var isOp = (sUserAgent.indexOf('opera')!=-1)?true:false;

var isMoz = (sUserAgent.indexOf('mozilla/5')!=-1 && sUserAgent.indexOf('opera')==-1 && sUserAgent.indexOf('msie')==-1)?true:false;

// ****************************************************************
// Make a new popup window...
// Parameters:
//   oAnchor: required object reference to the anchor (link)
//   sWindow: string for the window name if wanting to reuse window or null string ('') to use the default.
//   sProps: string of window properties ('width=300,height=200') or null string ('') to use the defaults defined here.
// Notes:
//   Notice in the example that the 'href' value maintains URL
//   (not "#" or "javascript:") and the 'title' attribute indicates
//   this will be a popup window. These things are required for
//   accessibility reasons.
// Example use:
//   <a href="/foo.htm" onclick="return pop(this,'survey');" title="Survey opens a new window.">Take our survey!</a>
//   <a href="/foo.htm" onclick="return pop(this,'','width=200,height=200');" title="Opens a new window.">Foo</a>
//   <a href="/foo.htm" onclick="return pop(this);" title="Opens a new window.">Foo</a>
// ****************************************************************
function pop(oAnchor,sWindow,sProps){
	var sUrl = '';
	if(oAnchor.getAttribute) sUrl = oAnchor.getAttribute('href');
	if(sUrl=='' && isIE) sUrl = window.event.srcElement.getAttribute('href');
	if(sUrl=='') sUrl = oAnchor.href;
	var sWindowName = sWindow?sWindow:'_blank';
	if(!sProps) sProps = 'width=800,scrollbars,resizable,toolbar,status,menubar,location';
	if(sUrl) var oPopup = window.open(sUrl,sWindowName,sProps);
	// An Opera bug returns too early if you focus the window, so we don't focus it in that browser.
	// Only a noticable defect (in that browser) if a window is already open and hidden behind another window.
	if(oPopup && !isOp) oPopup.focus();
	// If popup was created successfully, cancel link in calling window.
	// Acts as regular link in browser that has popup blocking enabled.
	return (oPopup)?false:true;
}

