function deleteConfirm(msg) {    
    var con = confirm(`Are you sure you want to ${msg} ?`);
    if (con) {           
        return true;           
    }
    else{
        return false;
    }       
}