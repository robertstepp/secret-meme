function GetClock(){
d = new Date();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();
//ntz    = d.toString().match(/\(([A-Za-z\s].*)\)/)[1];
if(nhour <= 9) {nhour = "0" +nhour;}
if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}
uhour  = d.getUTCHours();
umin   = d.getUTCMinutes();
usec   = d.getUTCSeconds();
if(uhour <= 9) {uhour = "0" +uhour;}
if(umin <= 9) {umin = "0" +umin;}
if(usec <= 9) {usec = "0" +usec;}

document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+"L | "+uhour+":"+umin+":"+usec+"Z";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;