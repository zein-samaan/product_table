
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-primary text-white p-4 rounded-top-4">
                    <h3 class="mb-1">Create New Product</h3>
                    <p class="mb-0">Enter the product information below.</p>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name"
                                class="form-control rounded-3"
                                placeholder="Enter product name"
                                value="{{ old('name') }}">

                            @error('name')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Price</label>
                            <input type="number" name="price"
                                class="form-control rounded-3"
                                placeholder="Enter product price"
                                value="{{ old('price') }}">

                            @error('price')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Category</label>
                            <select name="category" class="form-select rounded-3">
                                <option value="Electronics" {{ old('category') == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                                <option value="Clothes" {{ old('category') == 'Clothes' ? 'selected' : '' }}>Clothes</option>
                                <option value="Accessories" {{ old('category') == 'Accessories' ? 'selected' : '' }}>Accessories</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description"
                                class="form-control rounded-3"
                                rows="4"
                                placeholder="Write product description...">{{ old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary px-4 rounded-3">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
