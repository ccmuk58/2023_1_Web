function showClass(className) {
            var menus = document.getElementsByClassName('menu');
            for (var i = 0; i < menus.length; i++) {
                menus[i].classList.add('hidden');
            }
            
            var selectedMenu = document.getElementById(className);
            selectedMenu.classList.remove('hidden');
        }