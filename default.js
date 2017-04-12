function yukleBranslar(){
    
    var formName = 'get_brans';
    var bolum = document[formName]['bolum'].value;
    
    var xmlhttp = null;
    if(typeof XMLHttpRequest != 'udefined'){
        xmlhttp = new XMLHttpRequest();
    }else if(typeof ActiveXObject != 'undefined'){
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }else 
        throw new Error('You browser doesn\'t support ajax');
        
    xmlhttp.open('GET', 'brans1.php?blm='+bolum, true);
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState == 4)
            window.ekleBranslar(xmlhttp);
    };
    xmlhttp.send(null);
}

function ekleBranslar(xhr){
    if(xhr.status == 200){
        document.getElementById('brans_kutusu').innerHTML = xhr.responseText;
    }else 
        throw new Error('Server has encountered an error\n'+
                         'Error code = '+xhr.status);
}
