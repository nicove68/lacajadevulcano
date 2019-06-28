var hintcontainer = null;   
function showhint(obj, txt) {   
   if (hintcontainer==null) {   
      hintcontainer = document.createElement("div");   
      hintcontainer.className="hintstyle";   
      document.body.appendChild(hintcontainer);   
   }   
   obj.onmouseout = hidehint;   
   obj.onmousemove=movehint;   
   hintcontainer.innerHTML=txt;   
}   
function movehint(e) {   
    if (!e) e = event; //line for IE compatibility   
    hintcontainer.style.top =  (e.clientY+document.documentElement.scrollTop+2)+"px"; 
	hintcontainer.style.left = (e.clientX+document.documentElement.scrollLeft+10)+"px"; 
    hintcontainer.style.display="";   
}   
function hidehint() {   
   hintcontainer.style.display="none";   
}