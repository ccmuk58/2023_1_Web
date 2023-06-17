function showClass(className) {
    var menus = document.getElementsByClassName('menu');
    for (var i = 0; i < menus.length; i++) {
        menus[i].classList.add('hidden');
    }

    var selectedMenu = document.getElementById(className);
    selectedMenu.classList.remove('hidden');
}




function highlight(menu) {
    var menus = document.getElementsByClassName('menutype');
    for (var j = 0; j < menus.length; j++) {
        menus[j].classList.remove('highlight');
    }

    var highlightype = document.getElementById(menu);
    highlightype.classList.add('highlight');
}