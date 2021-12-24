<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
<header>
        <div class='headerText'>Фотогалерея</div>
</header>
<main>
<div id="photo">
    <div class="row imgDiv">
    </div>
    <input type="button" value="Загрузить ФОТО" id="button" class="imgDiv headerText"/>	
</div>
<script>
    
    let mainContent = '',
    main = document.querySelector('#photo .row');
    let start =0;
    let count =3;
   //обернула метод загрузки в обработку клика
   button.onclick = function(){
       
        fetch(`page.php?startPage=${start}&countPage=${count}`)
        .then(function (response) {
            return response.json()
        })
        .then(function (photo) {
            if(start < 11) {            //незнаю как передать сюда длинну массива из БД
                start = start + 3;
                photo.forEach(photo => {
                mainContent+=`
                <div>
                    <img class= "img" src={$photo.address_photo}></br>
                    <h2>${photo.photo_name}</h2>
                </div>`;
                button.value = "Подгрузить ещё";
                })
            }else {
                button.value = "Больше нечего показывать";
                
        };
        console.log(photo);
        console.log(start);
        
        main.innerHTML = mainContent;
        });
   };

</script>



<style type="text/css">
 /*стилей не много, поэтому не подключала их отдельно*/
body {
    background-color: #d8da3d; 
}

.headerText {
    color:green;
    font-size: 30px;
    text-align: center;
    padding-bottom: 10px;
}

.imgDiv {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 10px; 

}
.img {
    max-width: 300px;
    height: 200px;
    border: 2px solid green;
    margin: 10px;
} 

.img:hover {
    transform: scale(1.3); 
    border: 5px solid black; 
}
</style>