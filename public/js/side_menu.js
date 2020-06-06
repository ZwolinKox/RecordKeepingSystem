function openNav()
{
  document.getElementById("mySidenav").style.width = "250px";
}
  
function closeNav()
{
  document.getElementById("mySidenav").style.width = "0";
}

function openNav_list()
{
  document.getElementById("mySidenav-list").style.width = "250px";
  document.getElementById("mySidenav-list").style.setProperty("overflow-x", "visible");
}
  
function closeNav_list()
{
  document.getElementById("mySidenav-list").style.width = "0";
  document.getElementById("mySidenav-list").style.setProperty("overflow-x", "hidden");
}