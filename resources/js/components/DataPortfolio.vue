<template>
    <VPortfolio :items=items />
</template>

<script>

import VPortfolio from './VPortfolio.vue'

export default {
    mounted(){
        console.log('Mounted')
    },
    data () {
        return {
            items: [
                    {
                        id: 1, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-01.png', 
                        img: '/images/portfolio/portfolio-01.png'
                    },
                    {
                        id: 2, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-02.png', 
                        img: '/images/portfolio/portfolio-02.png'
                    },
                    {
                        id: 3, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-03.png', 
                        img: '/images/portfolio/portfolio-03.png'
                    },
                    {
                        id: 4, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-04.png', 
                        img: '/images/portfolio/portfolio-04.png'
                    },
                    {
                        id: 5, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-05.png', 
                        img: '/images/portfolio/portfolio-05.png'
                    },
                    {
                        id: 6, 
                        url: '#', 
                        logoImg: '/images/portfolio/logo-06.png', 
                        img: '/images/portfolio/portfolio-06.png'
                    }

                ]
        }
    },
    components: {
        VPortfolio
    }
}
</script>
