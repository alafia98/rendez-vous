<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar {
            background-image: linear-gradient(#92ccff, white);
        }
        .nav-item .nav-link {
            padding: 10px;
            color: #00549F;
            font-size: 1.2rem;
            font-weight: bold;
            margin: auto 20px;
        }
        .nav-item .nav-link:hover {
            background-color: #00549F;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .grid-container {
          display: grid;
          grid-template-columns: repeat(3, 2fr); /* Adjust the number of columns as needed */
          grid-gap: 30px; /* Adjust the gap between product cards */
        }

        .grid-container .product-card {
          background-image: linear-gradient(#92ccff, white);
          padding: 20px;
          text-align: center;
          border-radius: 50px;
        }

        .grid-container .product-card h2 {
          color: #00549F;
          font-style: italic;
          text-align: center;
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
          font-size: 1.5rem;
        }

        .grid-container .product-card h3 {
          font-size: 1.5rem;
        }

        .product-card .btn {
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

        footer {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          width: 100%;
          padding: 10px;
          background-image: linear-gradient(to top,#92ccff, white);
        }

        footer a{
          margin: auto 100px;
          color: #00549F;
          font-weight: bold;
        }

    </style>
    <title>Document</title>
</head>