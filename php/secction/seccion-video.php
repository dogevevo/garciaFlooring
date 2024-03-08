<div class="container_r">

    <div class="slide-container active_r">
        <div class="slide">
            <div class="content">
                <!-- <h3>video slider 01</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque reiciendis vel animi, voluptatem laudantium quas enim asperiores quae saepe! </p>
                <a href="" class="btn"> Learn More</a> -->
            </div>
            <video src="img/videos/1.mp4" loop  muted autoplay> </video>
        </div>
    </div>

    
    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <h3>video slider 02</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque reiciendis vel animi, voluptatem laudantium quas enim asperiores quae saepe! </p>
                <a href="" class="btn"> Learn More</a>
            </div>
            <video src="img/videos/2.mp4" loop autoplay muted> </video>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <h3>video slider 03</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque reiciendis vel animi, voluptatem laudantium quas enim asperiores quae saepe! </p>
                <a href="" class="btn"> Learn More</a>
            </div>
            <video src="img/videos/3.mp4" loop autoplay muted > </video>
        </div>
    </div>

    <div id="next" onclick="next()">    >   </div>
    <div id="prev" onclick="prev()">    <   </div>

</div>

<script>
    
    let slides = document.querySelectorAll('.slide-container');
    let index = 0;

    function next(){
        slides[index].classList.remove('active_r');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active_r');
    }

    function prev(){
        slides[index].classList.remove('active_r');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active_r');
    }


</script>

