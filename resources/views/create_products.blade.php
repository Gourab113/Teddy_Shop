<x-layout>

    <h1>Create Products</h1>

    <form action="/products/create" method="POST">
        @csrf

        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <br>

        <div>
            <label for="price">Product Price:</label>
            <input type="number" id="price" name="amount" required>
        </div>

        <br>


        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                <option value="">Select Category</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Save Product</button>
    </form>

</x-layout>
