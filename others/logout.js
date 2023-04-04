let logout=document.getElementById('select');
let button=document.getElementById('button');
let img=document.getElementsByClassName('images');
let check=document.getElementsByClassName('check')
let span=document.getElementById('span')
let contain=document.getElementsByClassName('leg')
let add=document.getElementById('add')
let ad=document.getElementsByClassName('title')
let card_shop=document.getElementById('cards-shop')
let a=document.createElement('img')
const c=document.getElementsByName('check')
let val=0;
let tab=[]
if(contain.length>0){
    for(let i=0; i<contain.length; i++){
        if(contain[i]!=undefined && check[i]!=undefined){
            contain[i].addEventListener('click',function (event){

            listener(i)
            })
        }



    }
}


if(logout!=null){
    logout.addEventListener('click',function (){
        window.location.href="logout.php"
    })
}


for(let i=0; i<contain.length; i++){
    if(check[i]!=undefined){
        check[i].addEventListener('click',function (e){
            if(check[i].checked==true){
                check[i].checked=false
            }
            else{
                check[i].checked=true
            }




        })
    }
}

function listener(i){
    if(check[i].checked==false){
        add.style.background='black'
        check[i].checked=true
        val++
        tab.push(img[i].src)
        console.log(tab)
        a.src=tab[0]
        console.log(a)
        if(card_shop!=null){
            card_shop.appendChild(a)
        }
        span.innerHTML=val
        contain[i].classList.add('card-class')

    }
    else{

        check[i].checked=false
        val--
        span.innerHTML=val
        tab.pop(img[i].src)
        console.log(tab)

        contain[i].classList.remove('card-class')
    }
    if(val==0){
        add.style.background='linear-gradient(70deg, black, transparent)'
    }
}
