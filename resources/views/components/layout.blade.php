<html>

<head>

    <style>
        a {
            text-decoration: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background-color: #0b8ef2;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }
    </style>

</head>

<body>

    <header>
        <nav>
            <a href="/">
                <button>

                    Home

                </button>

            </a>
            <a href="/categories">
                <button>

                    Categories

                </button>

            </a>
            <a href="{{ url('/products/create') }}">
                <button type="button">Add New Product</button>
            </a>
        </nav>

    </header>

    <main>
        {{ $slot }}
    </main>

</body>


</html>
