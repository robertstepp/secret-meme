var myWindow = window.open("", "", "width=200, height=100");
myWindow.document.write("<p>Failed to add bookmark</p>");
setTimeout(function(){myWindow.close()}, 3000);


