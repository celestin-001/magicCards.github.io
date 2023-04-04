let prix=document.getElementsByClassName('prix');
let prize=document.getElementById('prize');
let update=document.getElementById('update')

let total=0;
for(let i=0; i<prix.length;i++){
    total=total+Number(prix[i].value)
}
prize.innerHTML=String(total*0.25)+"$"


for(let i=0; i<prix.length; i++){
    let cmpt=total*0.25
    let tmp=prix[i].value;
    prix[i].addEventListener('change',function (evt){
        if(tmp>prix[i].value){
            total=total-1;
            prize.innerHTML=String(total*0.25)+"$"
            tmp=prix[i].value;
        }
        else if(tmp<prix[i].value){
            total=total+1;
            prize.innerHTML=String(total*0.25)+"$"
            tmp=prix[i].value;
        }
        if(cmpt!=total*0.25){
            update.classList.remove('hidden')
        }
        else{
            update.classList.add('hidden')
        }

    })
}

