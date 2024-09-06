<html>
    <head>
        <title>Product Page</title>
    </head>
    <body>
        <h1>Categories</h1>
        <ul>
            <li><a href="{{ route('category.food-beverage') }}">Food and Beverages</a></li>
            <li><a href="{{ route('category.beauty-health') }}">Beauty and Health</a></li>
            <li><a href="{{ route('category.home-care') }}">Home Care</a></li>
            <li><a href="{{ route('category.baby-kid') }}">Baby and Kids</a></li>
            <li><a href="{{ route('user') }}">User Page</a></li>
            <li><a href="{{ route('transact') }}">Transaction Page</a></li>
        </ul>
        <p><a href="{{ route('home') }}">Back to Home</a></p>
    </body>
</html>
