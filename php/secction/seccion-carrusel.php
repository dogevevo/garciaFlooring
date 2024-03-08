<style>


.slide-container_r {
    width: 100%;
    height: 85vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background-color: rgb(110, 110, 250);
}

.image-slider {
    width: 100%;
    height: 600px;
    position: absolute;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1s;
}

.slides-div {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 30px;
}

.img_r {
    position: relative;
    width: 240px;
    height: 370px;
    transition: 0.5s;
}

.button {
    position: absolute;
    width: 240px;
    height: 370px;
    transition: 0.5s;
    background-color: rgba(67, 67, 151, 0.2);
}

#slider-span1:target~.image-slider #img1,
#slider-span1:target~.image-slider #button-1 {
    width: 380px;
    height: 585px;
    background-color: transparent;
}

#slider-span2:target~.image-slider #img2,
#slider-span2:target~.image-slider #button-2 {
    width: 380px;
    height: 585px;
    background-color: transparent;
}

#slider-span3:target~.image-slider #img3,
#slider-span3:target~.image-slider #button-3 {
    width: 380px;
    height: 585px;
    background-color: transparent;
}

#slider-span1:target~.image-slider {
    left: 20%;
}

#slider-span2:target~.image-slider {
    left: 0%;
}

#slider-span3:target~.image-slider {
    left: -20%;
}
</style>



<div class="slide-container_r">

    <span class="slider-span" id="slider-span1"></span>
    <span class="slider-span" id="slider-span2"></span>
    <span class="slider-span" id="slider-span3"></span>

    <div class="image-slider">

        <div class="slides-div" id="slide-1">

            <video src="img/videos/3.mp4" autoplay muted loop class="img_r" id="img1"></video>
            <a href="#slider-span1" class="button" id="button-1"></a>
        
        </div>


        <div class="slides-div" id="slide-2">
            
            <video src="img/videos/2.mp4" controls muted loop class="img_r" id="img2"></video>
            <a href="#slider-span2" class="button" id="button-2"></a>
        
        </div>
        
        
        <div class="slides-div" id="slide-3">
            
            <video src="img/videos/1.mp4" controls muted loop class="img_r" id="img3"></video>
            <a href="#slider-span3" class="button" id="button-3"></a>
        
        </div>

        <div class="slides-div" id="slide-3">
            
            <video src="img/videos/1.mp4" controls muted loop class="img_r" id="img3"></video>
            <a href="#slider-span3" class="button" id="button-3"></a>
        
        </div>

        <div class="slides-div" id="slide-3">
            
            <video src="img/videos/1.mp4" controls muted loop class="img_r" id="img3"></video>
            <a href="#slider-span3" class="button" id="button-3"></a>
        
        </div>

        <div class="slides-div" id="slide-3">
            
            <video src="img/videos/1.mp4" controls muted loop class="img_r" id="img3"></video>
            <a href="#slider-span3" class="button" id="button-3"></a>
        
        </div>

    </div>
</div>