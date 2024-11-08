 body {

    font-family: Arial, sans-serif;

    margin: 50px;

    padding: 100px;

    display: flex;

    flex-direction: column;

    align-items: center;

    background-color: #f8f4b3;

}


h1 {

    margin: 10px 0;

    text-align: center;

    width: 100%;

    font-size: 2em;

    font-weight: bold;

}


.container {

    display: flex;

    flex-direction: row;

    flex-wrap: wrap;

    justify-content: center;

    align-items: flex-start;

    width: 100%;

    max-width: 1200px;

    background-color: #f7d0d0;

    border-radius: 8px;

    box-shadow: 0 0 10px rgba(5, 0, 0, 0.1);

    padding: 10px;

    box-sizing: border-box;

    margin-top: 10px;

}


.search-container {

    margin: 20px;

    text-align: center;

}


#search-input {

    padding: 10px;

    border: 1px solid #ccc;

    border-radius: 4px;

    width: 300px;

    font-size: 1em;

}


.profile {

    flex: 1 1 30%;

    box-sizing: border-box;

    padding: 20px;

    text-align: center;

    margin: 10px;

    border-radius: 8px;

    background-color: #fcebeb;

    box-shadow: 0 0 5px rgba(10, 10, 10, 0.1);

}





.profile img {

    width: 100px;

    height: 100px;

    border-radius: 50%;

    object-fit: cover;

}


.profile h2 {

    margin: 10px 0 5px;

    font-size: 1.2em;

}


.profile p {

    margin: 5px 0;

    font-size: small;

}


.back-button {

    margin: 20px;

    padding: 10px 15px;

    background-color: #007BFF;

    color: white;

    border: none;

    border-radius: 5px;

    cursor: pointer;

    font-size: 1em;

}


.back-button:hover {

    background-color: #0056b3;

}


@media (max-width: 768px) {

    .profile {

        flex: 1 1 45%;

    }

}


@media (max-width: 480px) {

    .profile {

        flex: 1 1 100%;

    }

}
