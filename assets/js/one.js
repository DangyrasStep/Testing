import React from "react";
import ReactDOM from "react-dom";

class One extends React.Component {
    render() {
        return (
            <div>Hello</div>
        );
    }
}

ReactDOM.render(
    <One />,
    document.getElementById("One")
);