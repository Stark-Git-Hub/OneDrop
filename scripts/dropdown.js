function dropdown() {
    document.getElementById("topics").classList.toggle("show");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.drop')) {
      var dropdowns = document.getElementsByClassName("dropdown_content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }