<template>
    <section class="about-content">
        <div class="about-data">
            <section class="about-section">
                <h2>ABOUT US</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>    
            </section>
            <section class="client">
                <h2>SOME OF OUR CLIENTS</h2>
                <p>We love our clients and we want the best for all them.</p>
                <div class="client-container">
                    <div class="client-item">
                        <img src="/images/clients/client-01.png" alt="Client">
                    </div>
                    <div class="client-item">
                        <img src="/images/clients/client-02.png" alt="Client">
                    </div>
                    <div class="client-item">
                        <img src="/images/clients/client-03.png" alt="Client">
                    </div>
                    <div class="client-item">
                        <img src="/images/clients/client-04.png" alt="Client">
                    </div>
                    <div class="client-item">
                        <img src="/images/clients/client-05.png" alt="Client">
                    </div>
                    <div class="client-item">
                        <img src="/images/clients/client-06.png" alt="Client">
                    </div>                    
                </div>
            </section>    
            <section class="testimonio">
                <h2>CLIENTS SAYS</h2>
                <div class="testimonio-content">
                    <div class="testomino-descripcion-container">
                        <div class="quote">
                            <img src="/images/about/quote-sign.svg" class="quote-img" alt="Quote sign">
                        </div>
                        <div class="testomino-descripcion">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, 
                            by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, 
                            you need to be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                        </div>
                    </div>
                    <div class="testimonio-author">
                        <span>HUGH JACKMAN, ACTOR</span>
                    </div>
                </div>
                <div class="testimonio-img-container">
                    <a href="#" class="testimonio-item active">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    <a href="#" class="testimonio-item">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    <a href="#" class="testimonio-item">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    <a href="#" class="testimonio-item">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    <a href="#" class="testimonio-item">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    <a href="#" class="testimonio-item">
                        <img src="/images/user.png" alt="Testimonio Imagen">
                    </a>                    
                    
                </div>
            </section>        
        </div>
        <div class="about-imagen">
            <div class="about-imagen-container">
                <img src="/images/about/about-img.jpg" alt="About Us">
            </div>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style lang="stylus">

    .about-content
        display: flex
        
    .about-data
        display: flex
        width: 50%
        justify-content: center
        align-items: center
        flex-direction: column
        padding: 95px 0px
        section
            width: 642px
        .about-section
            padding-bottom: 48px
            p
                padding: 16px 0px

    .about-imagen
        display: flex
        width: 50%
        min-height: 100%
        justify-content: center
        align-items: center

    .about-imagen-container
        width: 640px
        height: 850px

    .client 
        p
            padding-bottom: 22px

    .client-container
        display: flex
        justify-content: space-between
        flex-wrap: wrap
        flex-shrink: 1
        padding: 28px 0px
        .client-item
            min-height: 74px
            height: 74px
            min-width: 197px
            padding-bottom: 18px

    .testomino-descripcion-container
        display: flex
        min-height: 125px   
        .quote
            display: inherit
            align-items: center
            padding-right: 55px
            min-height: inherit
            .quote-img
                width: 220px

    .testomino-descripcion
        display: inherit
        align-items: flex-start
        min-height: inherit
    

    .testimonio-author
        text-align: right
        font-size: 1em
        padding: 15px 0px
        color: #546972
    

    .testimonio-img-container
        display: flex
        align-items: center
        a
            &.testimonio-item
                width: 38px
                height: 38px
                padding: 0px 10px
                &.active
                    width: 52px
                    height: 52px

</style>

