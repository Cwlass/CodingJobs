let charURL;
let charID;
let fcID;
const app = Vue.createApp({
    data() {
        return {
            categories: [],
            selectedCat: "",
            charName: 'char Name',
            lvl: 'NameDay',
            FC: 'FreeCompany',
            firstNameSearch: "",
            secondNameSearch: "",
            picture: "",
            fcMembers: [],
            selectedMember: "",
            loading: false,
        };
    },
    methods: {
        async getChar() {
            this.loading = true
            const charUrl = charURL;
            const res = await fetch(charURL);
            const result = await res.json();
            charID = result.Results[0].ID;
            console.log(charID);
            this.findCharById();
        },
        getURL() {
            charURL = 'https://xivapi.com/character/search?name=' + this.firstNameSearch + '+' + this.secondNameSearch + '&' + this.selectedCat;
            this.getChar();
        },
        async loadServers() {
            const res = await fetch('https://xivapi.com/servers');
            const result = await res.json();
            this.categories = result;
        },
        async findCharById() {
            const char = await fetch('https://xivapi.com/character/' + charID);
            const charResult = await char.json();
            this.charName = charResult.Character.Name;
            this.lvl = charResult.Character.Nameday;
            this.FC = charResult.Character.FreeCompanyName;
            this.picture = charResult.Character.Portrait;
            fcID = charResult.Character.FreeCompanyId;
            console.log(fcID);
            this.loadmembers();
        },
        async loadmembers() {
            // FETCH ( call -> convert to JSON -> extract )
            const res = await fetch('https://xivapi.com/freecompany/' + fcID + '?data=FCM');
            const result = await res.json();
            this.fcMembers = result.FreeCompanyMembers;
            this.loading = false;
        },
        async fcMemberFetch(e) {
            const newTarget = e.target.innerText;
            newTarget.replace(" ", "+");
            charURL = 'https://xivapi.com/character/search?name=' + newTarget + '&' + this.selectedCat;
            this.getChar();
        }
    },
    mounted() {
        this.loadServers();
    }

});
app.mount('#app')