const btn = document.getElementById('menu-btn');
const dropDown = document.getElementById('dropdown');
const logo = document.getElementById('logo')

btn.addEventListener('click', toggleNav);

function toggleNav(){
  if(dropdown.style.display === 'grid'){
    dropdown.style.display = 'none';
    logo.style.visibility = 'visible'

  }else{
    dropdown.style.display = 'grid';
    logo.style.visibility = 'hidden'
  }
  console.log('you clicked me')
}





