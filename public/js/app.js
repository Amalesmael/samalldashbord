let ladingPage = document.querySelector(".welcome");
let imageArry = ["ilpdakgajil15_article.webp","بحث-عن-مهارات-التفكير.jpg","معوقات_التفكير_الابداعي.jpeg"];
    bgInterval =  setInterval(() => { 
    let randomPage = Math.floor(Math.random() * imageArry.length);
    ladingPage.style.backgroundImage = 'url("ac/img/' + imageArry[randomPage] + '")';
    },4000) ;