class PlayerGenerator extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            charID: "",
            FcID: "",
            FcMembers: [],
            serverList: [],
            selectedServer: "",
            charFName: "",
            charSName: "",
            charName: "",
            charNameDay: "",
            charPortrait: "",
            charFC: "",
        };
        this.handleChange = this.handleChange.bind(this);
    }
    handleChange(event) {
        this.setState({ selectedServer: event.target.value })
    }
    async fcClick(fcmember) {
        const newName = fcmember.replace(" ", "+");
        console.log(newName);
        const charURL = 'https://xivapi.com/character/search?name=' + newName + '&server=' + this.state.selectedServer;
        //console.log(charURL)
        const res = await fetch(charURL);
        const result = await res.json();
        console.log(result);
        this.setState({ charID: result.Results[0].ID });
        const char = await fetch('https://xivapi.com/character/' + this.state.charID);
        const charResult = await char.json();
        this.setState({ charName: charResult.Character.Name })
        this.setState({ charNameDay: charResult.Character.Nameday })
        this.setState({ charFC: charResult.Character.FreeCompanyName })
        this.setState({ FcID: charResult.Character.FreeCompanyId })

        this.setState({ charPortrait: charResult.Character.Portrait })
        document.querySelector("#charImg").classList.remove("charImg");
    }
    async getPlayer() {
        document.querySelector("#charImg").classList.add("charImg");
        const charURL = 'https://xivapi.com/character/search?name=' + this.state.charFName + '+' + this.state.charSName + '&server=' + this.state.selectedServer;
        //console.log(charURL)
        const res = await fetch(charURL);
        const result = await res.json();
        console.log(result);
        this.setState({ charID: result.Results[0].ID });
        const char = await fetch('https://xivapi.com/character/' + this.state.charID);
        const charResult = await char.json();
        this.setState({ charName: charResult.Character.Name })
        this.setState({ charNameDay: charResult.Character.Nameday })
        this.setState({ charFC: charResult.Character.FreeCompanyName })
        this.setState({ FcID: charResult.Character.FreeCompanyId })

        this.setState({ charPortrait: charResult.Character.Portrait })
        document.querySelector("#charImg").classList.remove("charImg");
        this.getFc();
    }
    changeFName = (e) => {
        this.setState({ charFName: e.target.value });
    }
    changeSName = (e) => {
        this.setState({ charSName: e.target.value });
    }
    selectServer = (e) => {
        this.setState({ selectedServer: e.target.value });
    }
    async getFc() {
        const fcURL = 'https://xivapi.com/freecompany/' + this.state.FcID + '?data=FCM';
        console.log(fcURL);
        const res = await fetch(fcURL);
        const result = await res.json();
        console.log(result.FreeCompanyMembers);
        this.setState({ FcMembers: result.FreeCompanyMembers });
        console.log(this.state.FcMembers);
    }

    async componentDidMount() {
        const res = await fetch('https://xivapi.com/servers');

        const jsonrRes = await res.json();
        this.setState(() => ({
            serverList: jsonrRes,
        }));
        console.log(this.state.serverList);
    }

    render() {
        return (
            <div>
                <section id="search">
                    <article>
                        <div>
                            <input placeholder="First Name" type="text" value={this.state.charFName}
                                onChange={this.changeFName} />
                            <input placeholder="Second Name" name="character" type="text" value={this.state.charSName}
                                onChange={this.changeSName} />
                            <label for="character">Character Name</label>
                        </div>
                        <div>
                            <select name="Server" class="categories" onChange={this.handleChange} value={this.state.selectedServer}>
                                {this.state.serverList.map((server) => (
                                    <option value={server}>{server}</option>
                                ))}
                            </select>
                            <label>Select a Server</label>
                            <button onClick={() => this.getPlayer()}> Find Char</button>
                        </div>
                    </article>
                    <img src="ff14Logo.png" alt="" />
                </section>

                <div id="container">
                    <article id="player">
                        <div>
                            <h2 id="name">{this.state.charName}</h2>
                            <h3 id="level">{this.state.charNameDay}</h3>
                            <h4 id="FC">{this.state.charFC}</h4>
                            <ul class="fcMembers">
                                {this.state.FcMembers.map((fcmember) => (
                                    <li onClick={() => this.fcClick(fcmember.Name)} > {fcmember.Name}</li>
                                ))}
                            </ul>
                        </div>
                        <img class="charImg" id="charImg" src={this.state.charPortrait} alt="" />
                    </article>
                </div>
            </div >
        )
    }
}









ReactDOM.render(<PlayerGenerator />, document.querySelector('#app'));