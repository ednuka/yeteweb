function salonYukle(){
    
    var formName = 'sinav';
    var bina = document[formName]['bina'].value;
    
    var xmlhttp = null;
    if(typeof XMLHttpRequest != 'udefined'){
        xmlhttp = new XMLHttpRequest();
    }else if(typeof ActiveXObject != 'undefined'){
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }else 
        throw new Error('You browser doesn\'t support ajax');
        
    xmlhttp.open('GET', 'salonsss.php?sln='+bina, true);
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState == 4)
            window.salonEkle(xmlhttp);
    };
    xmlhttp.send(null);
}

function salonEkle(xhr){
    if(xhr.status == 200){
        document.getElementById('salon_kutusu').innerHTML = xhr.responseText;
    }else 
        throw new Error('Server has encountered an error\n'+
                         'Error code = '+xhr.status);
}
function bransYukle(){
    
    var formName = 'sinav';
    var bolum = document[formName]['bolum'].value;
    
    var xmlhttp = null;
    if(typeof XMLHttpRequest != 'udefined'){
        xmlhttp = new XMLHttpRequest();
    }else if(typeof ActiveXObject != 'undefined'){
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }else 
        throw new Error('You browser doesn\'t support ajax');
        
    xmlhttp.open('GET', 'brans2.php?blm='+bolum, true);
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState == 4)
            window.bransEkle(xmlhttp);
    };
    xmlhttp.send(null);
}

function bransEkle(xhr){
    if(xhr.status == 200){
        document.getElementById('brans_kutusu').innerHTML = xhr.responseText;
    }else 
        throw new Error('Server has encountered an error\n'+
                         'Error code = '+xhr.status);
}
