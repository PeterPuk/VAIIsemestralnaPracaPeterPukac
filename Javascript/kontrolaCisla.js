
 function zistiPocetCisel(input){
     let cislo =10;
     if(input.value.length !== cislo){
         var nespravne = document.getElementById('tel_cislo');
         nespravne.innerHTML = "Číslo musi mať 10 znakov!";
         nespravne.style.color = 'red';
         nespravne.style.backgroundColor = '#E4DDED';
         nespravne.style.marginLeft = '22px';
         nespravne.style.borderRadius = '4px';
         nespravne.style.padding= '7px 7px';

     }else{
         var spravne = document.getElementById('tel_cislo');
        /* spravne.addEventListener('focusout',ev =>{
             ev.
         });*/
         spravne.innerHTML = "Číslo je zadané správne.";
         spravne.style.color = 'green';
         spravne.style.marginLeft = '22px';
         spravne.style.backgroundColor = '#E4DDED';
         spravne.style.borderRadius = '4px';
         spravne.style.padding= '7px 7px';
     }
}



