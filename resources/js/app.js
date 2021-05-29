require('./bootstrap');

Vue.component('momo', require('./components/Momo.vue').default);
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import VueLoading from 'vuejs-loading-plugin';
import { EmbedPlugin } from 'bootstrap-vue'
Vue.use(EmbedPlugin);

Vue.use(VueLoading, {
    dark: true, // default false
    text: 'Loading..', // default 'Loading'
    loading: false, // default false
    background: 'rgb(255,255,255)', // set custom background
    classes: ['momo'] // array, object or string
  })
// Optionally install the BootstrapVue icon components plugin
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
const app = new Vue({
    el: '#app',

    data: {
        messages: [],
        apierrors:[],
        apiresponse:[]
    },

    created() {
        // this.fetchMessages();
        Echo.private('chat')
        .listen('MessageSent', (e) => {
            console.log('event',el);
            this.messages.push({
            message: e.message.message,
            user: e.user
            });
        });
    },

    methods: {
        momoPay(payload) {
            axios.post('/api/pay-with-momo', payload).then(response => {
                this.$loading(false);
                this.apiresponse = response.data;
                this.$bvModal.show('iFrame');
            },error=>{
                this.$loading(false);
                console.log(error);
                this.apierrors.push(error);
            });
        
        }
    }
});