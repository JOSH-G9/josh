function goToSearch() {
    var search, form, connect;
    
    search = document.getElementById('search_input').value;
    
    if (search != '') {
        form = 'search=' + search;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function () {
            if (connect.readyState == 4 && connect.status == 200) {
                location.replace("index.php?page=searchPage&term=" + search);
            }
        }
        connect.open('POST', 'ajax.php?mode=search', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
    }
}

function runScriptSearch(e) {
    if (e.keyCode == 13) {
        goToSearch();
    }
}
