import React, { Component } from 'react'
import axios from 'axios';

export default class ShowFood extends Component {
    constructor(props) {
        super(props);
        this.state = {
            foods: [],
        };

    }
    async componentDidMount() {
        await axios.get(`http://127.0.0.1:8000/api/get-food`)
            .then(res => {
                this.setState(() => ({ foods: res.data }));
            })
    }
    handleSearch(e) {
        let request = {
            params: {
                keyword: e.target.value
            }
        }
        axios.get("http://127.0.0.1:8000/api/get-food-by-keyword", request)
            .then((res) => {
                this.setState({
                    foods: res.data
                })
            })
    }
    render() {
        return (
            <div className="container">
                <div className="text-center my-4">
                    <input
                        placeholder="Search..."
                        onChange={(e) => {
                            this.handleSearch(e);
                        }}
                    />
                    <br />
                </div>
                <h2>Welcome to FoodShop</h2>
                <div className='row'>
                    {
                        this.state.foods.map((food, index) => (
                            <div className='col-md-3' key={index}>
                                <img style={{ width: "200px", height: "200px" }}
                                    src={food.image} alt='file'></img>
                                <p>{food.name}</p>
                                <div>
                                    <span className="price">Price: {food.price}VND</span> |
                                    <span className="price"> OldPrice: {food.oldprice}VND</span>
                                </div>
                                <div>
                                    <button className='btn btn-info '>Detail</button>
                                    <button className='btn btn-success '> Buy</button>
                                </div>
                            </div>
                        ))
                    }
                </div>

            </div>


        )
    }
}

