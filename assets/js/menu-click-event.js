jQuery(setupTogglers);

function setupTogglers()
{
  var togglers = document.getElementsByClassName('toggles');
    

  for(var i = 0; i<togglers.length; i++){
  	 togglers[i].addEventListener('click', toggleComponent);
	}


}

function toggleComponent()
{
	jQuery("#overlay").toggleClass("toggle-on");
}



