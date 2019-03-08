window.Vue = require('vue');

import DataTheSideBar from './components/DataTheSideBar.vue'

const sidebar = new Vue({
    el: '#sidebar',
    data: {
        message: "Test Sidebar"
    },
    components: {
        DataTheSideBar
    }
});

import DataPortfolio from './components/DataPortfolio.vue'
import DataPortfolioDetail from './components/DataPortfolioDetail.vue'
import VAbout from './components/VAbout.vue'
import VBlog from './components/VBlog.vue'
import VBlogDetail from './components/VBlogDetail.vue'
import VContact from './components/VContact.vue'

const app = new Vue({
    el: '#app',
    components: {
        DataPortfolio,
        DataPortfolioDetail,
        VAbout,
        VBlog,
        VBlogDetail,
        VContact
    }
});