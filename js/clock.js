function GetClock(){
d = new Date();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();
ntz    = d.toString().match(/\(([A-Za-z\s].*)\)/)[1];
if(nhour <= 9) {nhour = "0" +nhour;}
if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}



document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+" "+ntz+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;