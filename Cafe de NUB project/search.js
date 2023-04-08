function search(){
    let filter = document.getElementById('search-box').ariaValueMax.toUpperCase();
  
    let item = document.querySelectorAll('.box');
    
  
    let l = document.getElementsByTagName('h3');
  
    for(var i=0; i<=l.length; i++){
      let a=item[i].getElementsByTagName('h3')[0];
  
      let value = a.innerHTML || a.innerText || a.textContent;
  
      if(value.toUpperCase(),indexof(filter) > -1) {
        item[i].style.display="";
      }
      else{
        item[i].style.display="none";
      }
    }
  }