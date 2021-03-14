const app = Vue.createApp({
    data() {
        return {
            leJoke: "Chuck norris joke generator woo",
            picture: 'https://api.chucknorris.io/img/chucknorris_logo_coloured_small@2x.png'
        };
    },

    methods: {
        async getChuckJoke() {
            const res = await fetch("https://api.chucknorris.io/jokes/random");
            const jsonRes = await res.json();
            this.leJoke = jsonRes.value;
            this.picture = jsonRes.icon_url; 
        }
    }
})
app.mount('#app');