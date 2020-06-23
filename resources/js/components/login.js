import React, {Component, Fragment} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import ListProduct from "./listProduct";

export default class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: ''
        }
        this.doLogin = this.doLogin.bind(this);
        this.handleInputChange = this.handleInputChange.bind(this);
    }

    handleInputChange(event){
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value ? target.type === 'number' ? parseInt( target.value ) : target.value : target.value;
        const name = target.name;

        this.setState({
            [name]: value
        });
    }

   async doLogin(){
        console.log(this.state);
        const response = await axios.post('http://localhost:8888/clase/public/api/user/login', this.state);
        console.log(response);
    }


    render ( ) {
        return (
            <Fragment>
                <div className="field">
                    <label className="label">User Name</label>
                    <div className="control">
                        <input onChange={this.handleInputChange} value={this.state.email} name="email" className="input" type="email" placeholder="e.g Alex Smith" />
                    </div>
                </div>

                <div className="field">
                    <label className="label">Password</label>
                    <div className="control">
                        <input onChange={this.handleInputChange} value={this.state.password} name="password" className="input" type="password" />
                    </div>
                </div>

                <div className="field is-grouped">
                    <div className="control">
                        <button className="button is-link" onClick={ () => this.doLogin() }>Submit</button>
                    </div>
                    <div className="control">
                        <button className="button is-link is-light">Cancel</button>
                    </div>
                </div>
            </Fragment>
        );
    }


}

if (document.getElementById('loginForm')) {
    ReactDOM.render(<Login />, document.getElementById('loginForm'));
}
