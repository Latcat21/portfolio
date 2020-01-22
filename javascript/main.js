const btn = document.getElementById('menu-btn');
const dropDown = document.getElementById('dropdown');

btn.addEventListener('click', toggleNav);

function toggleNav(){
  if(dropdown.style.display === 'grid'){
    dropdown.style.display = 'none';
  }else{
    dropdown.style.display = 'grid';
  }
  console.log('you clicked me')
}
