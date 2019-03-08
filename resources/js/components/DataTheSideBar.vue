<template>
    <TheSideBar :imageUrl = urlLogotipo :itemsNav = navegation :rsList = redesSociales :navActive = navActive />
</template>

<script>

import TheSideBar from './TheSideBar.vue'

export default {
    created() {
        console.log(this.url)
        this.getSelectedUrl()
    },
    data () {
        return {
            urlLogotipo: '/images/logotipo.png',
            navegation: [
                {
                    id: 1,
                    url: "/portfolio",
                    name: "Portfolio",
                    activeName: "portfolio",
                },
                {
                    id: 2,
                    url: "/about",
                    name: "About Us",
                    activeName: "about",
                },
                {
                    id: 3,
                    url: "/blog",
                    name: "Blog",
                    activeName: "blog",
                },
                {
                    id: 4,
                    url: "/contact",
                    name: "Contact Us",
                    activeName: "contact",
                }
            ],
            redesSociales: [
                {
                    id: 1,
                    className: "fab fa-instagram",
                    url: "#"
                },
                {
                    id: 2,
                    className: "fab fa-github",
                    url: "#"
                },
                {
                    id: 3,
                    className: "fab fa-facebook",
                    url: "#"
                },
                {
                    id: 4,
                    className: "fab fa-twitter",
                    url: "#"
                }
            ],
            navActive: ''
        }
    },
    methods: {
        getSelectedUrl () {
            if( this.url.includes('about') ){
                this.navActive = 'about'
            }else if( this.url.includes('blog') ){
                this.navActive = 'blog'
            }else if( this.url.includes('contact') ){
                this.navActive = 'contact'
            }else {
                this.navActive = 'portfolio'
            }
        }
    },
    components: {
        TheSideBar
    },
    props: [
        'url'
    ]
}
</script>

