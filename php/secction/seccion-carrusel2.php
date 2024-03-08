<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<style>
.slide-container_r {
    width: 100%;
    height: 100vh;
    
    overflow: hidden;
    background-image: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
}


/* .image-slider {
    width: 100%;
    height: 600px;
    position: absolute;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1s;
} */

.cell {
    width: 30%;
    height: 800px;
    margin: 0 15px;
    overflow: hidden;
    border-radius: 8px;
}

.cell img {
    width: 100%;
    height: 700px;
    object-fit: cover;

}

.cell video {
    width: 100%;
    height: 630px;
    object-fit: cover;
}



@media only screen and (max-width: 767px) {

.cell {
    width: 90%;
    height: 1200px;
    margin: 10px 10px 10px 10px
    overflow: hidden;
    border-radius: 8px;
    display: flex;
    flex-direction: row-reverse;
    flex-wrap: nowrap;
    align-content: flex-start;
    align-items: flex-start;
    justify-content: space-evenly;
}

.cell video {
    width: 80%;
    height: 621px;
    object-fit: cover;
    margin-left: 40px;
    border-radius: 20px 30px 45px 20px;
    margin-top: -100px;
}

}
</style>

<div class="slide-container_r">



        <div class="main-carousel" style=" margin-top: 50px ">

            <div class="cell">

                <video src="img/videos/1.mp4" loop muted controls class=" img "></video>
                <!-- <img src="img/gallery/1.png " > </img>  -->
            </div>


            <div class="cell">
                <video src="img/videos/2.mp4" loop muted controls class=" img "></video>
            </div>


            <div class="cell">
                <video src="img/videos/3.mp4" loop muted controls class=" img "></video>
            </div>



            <div class="cell">
                <video src="img/videos/4.mp4" loop muted controls class=" img "></video>
            </div>

            ...
        </div>





</div>





<br> <br> <br> <br>



<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
$('.main-carousel').flickity({
    // options
    wrapAround: true,
    cellAlign: 'left',
    freeScroll: true
});
</script>