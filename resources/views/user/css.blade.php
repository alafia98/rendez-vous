<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar {
            background-image: linear-gradient(#92ccff, white);
        }
        .nav-item {
            padding: 15px;
        }
        .nav-item .nav-link {
            padding: 10px;
            color: #00549F;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .nav-item .nav-link:hover {
            background-color: #00549F;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Adjust the number of columns as needed */
  grid-gap: 20px; /* Adjust the gap between product cards */
  padding: 20px;
}

.product-card {
  background-color: #92ccff;
  padding: 10px;
  text-align: center;
}

.product-card a {
    text-decoration: none;
    color: black;
}

.product-card h2 {
  color: #00549F;
  font-style: italic;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.product-card .btn {
  dding: 10px;
  margin: auto 20px;
  font-size: 1.2rem;
  color: white;
  background-color: #00549F;
  border: none;
  border-radius: 50px;
}

.product-card .btn:hover {
  cursor: pointer;
  transition: all 0.5s ease;
  transform: scale(1.1);
}

        
    </style>
    <title>Document</title>
</head>