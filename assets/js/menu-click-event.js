jQuery(menuOnClick);

function menuOnClick()
{
  var menu_button_open = document.getElementById('menu-toggle-open');
  var menu_button_close = document.getElementById('menu-toggle-close');
    

  menu_button_open.addEventListener('click', toggleMenu);
  menu_button_close.addEventListener('click', toggleMenu);



}

function toggleMenu()
{
        var navigation_main = jQuery(document.getElementsByClassName('navigation-main'));
        
        if(navigation_main.hasClass("open")){
            navigation_main.toggleClass("open");
        }
        else{
            navigation_main.addClass("open");
        }
}



