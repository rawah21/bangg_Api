<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- sortable and jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- style css -->
   <style>
    *{
        font-family: 'rawah';
    }
    body{
        background: #d1d9eb;
    }
    .box{
        max-width: 30%;
        height: 470px;
        background-color: #fff;
        border-radius: 15px;
        margin-top: 50px;
        padding: 20px;
    }
    h1{
        margin-top: 35px;
        font-weight: bolder;
        font-size: 55px;
    }
    p{
        background-color: #d1d9eb;
        height: 62px;
        border-radius: 15px;
        display: flex;
        /* d paragrafe da mn soan o nvesina hai veja mn spase between yan around dvet */
        justify-content: space-between;
        align-items: center;
        direction: rtl;
        /* padding navda 0 top and left but 20px right and left dirkava */
        padding: 0px 20px;
    }

   

/* aw fonte ma download kri de bvi shewazi bkar inni */
@font-face {
    font-family: 'rawah';
    src: url('./Rabar_004.ttf');
} 
/* manave fonyi kra rawah src ava locatione wya */
input{
    border-radius: 15px;
    border: 1px solid grey;
    text-align: center;
    width: 100%;
    height: 45px;
}
button{
    background-color: #000;
    color: #d1d9eb;
    border: none;
    border-radius: 10px;
    margin-top: 10px;
    padding: 5px;
    cursor: pointer;
}
   </style>
    <!-- titttle -->
    <title>test</title>
</head>
<body>

<center>
    <h1>دةمين بانكي</h1>
    
    <div class="box">

    <form action="" method="get">
        <!-- autocomplete offf dame d input da chedkain bo hnde ya waxte fucksa xo bexma sa input ch xnditin nahen -->
        <input autocomplete="on" type="text" name="bajer" placeholder="نافي بازيري بنفيسة :">
        <!-- waxte submit le dam data de hena get krn wargrtn -->
        <button type="submit">ليكةريان</button>
    </form>

        <p>سبيدة : <span id="speda"></span></p>
        <p>نيفرو : <span id="nivro"></span></p>
        <p>ايفار : <span id="evar"></span></p>
        <p>مةغرةب : <span id="maxrab"></span></p>
        <p>عةيشا : <span id="aisha"></span></p>
    </div>
</center>

    <!-- script -->
<script>
//bo serchkrna damen bangi

// $("#search").on('keyup', function(){
//     var getText = $("#search").val();
//     $(".box p").filter(function(){
//         $(this).toggle($(this).text().indexOf(getText) > -1)
//     })
// })


// sort content
const sortBox = document.querySelector(".box");
new Sortable(sortBox, {
    animation:500
})

// search country or city
// get de value of bajer
var bajer = "<?php echo $_GET['bajer'] ?>";

// damen bangi api
$.getJSON('https://muslimsalat.com/'+ bajer +'/daily.json?key=API_KEY&jsoncallback=?', function(dam){
    $("#speda").append(dam.items[0].fajr);
    $("#nivro").append(dam.items[0].dhuhr);
    $("#evar").append(dam.items[0].asr);
    $("#maxrab").append(dam.items[0].shurooq);
    $("#aisha").append(dam.items[0].isha);
})


</script>



</body>
</html>