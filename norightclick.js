
// ***********************************************
// AUTHOR: WWW.CGISCRIPT.NET, LLC
// URL: http://www.cgiscript.net
// Use the script, just leave this message intact.
// Download your FREE CGI/Perl Scripts today!
// ( http://www.cgiscript.net/scripts.htm )
// ***********************************************

var message="Please contact Sybil Shane Studio if you wish to make use of one of our images";
function click(e)
   {
   if (document.all) {
      if (event.button == 2) {
         alert(message);
         return false;
      }
   }
   if (document.layers) {
      if (e.which == 3) {
         alert(message);
         return false;
      }
   }
   }
   if (document.layers) {
      document.captureEvents(Event.MOUSEDOWN);
   }
   document.onmousedown=click;
// 
