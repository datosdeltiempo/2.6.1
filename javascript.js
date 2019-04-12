function seleccionarCode(o){
	var obj=o.parentNode.parentNode.getElementsByTagName('code')[0];
    if(obj.nodeName.toLowerCase()=='textarea' || (obj.nodeName.toLowerCase()=='input' && obj.type=='text')){
        obj.select();
        return;
    }
    if (window.getSelection) { 
        var sel = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(obj);
        sel.removeAllRanges();
        sel.addRange(range);
    } 
    else if (document.selection) { 
        document.selection.empty();
        var range = document.body.createTextRange();
        range.moveToElementText(obj);
        range.select();
    }
} 
