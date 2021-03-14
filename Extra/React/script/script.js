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
    }
    async getPlayer() {
        const charURL = 'https://xivapi.com/character/search?name=' + this.state.charFName + '+' + this.state.charSName + '&' + this.state.selectedServer;
        const res = await fetch(charURL);
        const result = await res.json();
        this.setState({ charID: result.Results[0].ID });
        const char = await fetch('https://xivapi.com/character/' + this.state.charID);
        const charResult = await char.json();
        this.setState({ charName: charResult.Character.Name })
        this.setState({ charNameDay: charResult.Character.Nameday })
        this.setState({ charFC: charResult.Character.FreeCompanyName })
        this.setState({ charPortrait: charResult.Character.Portrait })
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
                            <select name="Server" class="categories" value={this.state.selectServer}>
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
                                <li>
                                </li>
                            </ul>
                        </div>
                        <img src={this.state.charPortrait} alt="" />
                    </article>
                </div>
            </div >
        )
    }
}









ReactDOM.render(<PlayerGenerator />, document.querySelector('#app'));