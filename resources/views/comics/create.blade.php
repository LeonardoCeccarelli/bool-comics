@extends('layouts.default')

@section("page_title", "Add a Comic")

@section("main_content")

<div class="container">
    <h1 class="my-4">Insert a new Comic</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 border-end ">

                <div class="form-group  mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="enter the new comic's title" required>
                </div>

                <div class="form-row row">
                    <div class="col-md-6 mb-3">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" id="series" placeholder="enter the series name" name="series" required>
                        {{-- <div class="valid-feedback">
                    Looks good!
                </div> --}}
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type">Type</label>
                        <select class="form-select" aria-label="type" id="type" name="type" required>
                            <option selected value="">select the comic's type</option>
                            <option value="graphic novel">Graphic Novel</option>
                            <option value="comic book">Comic Book</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" placeholder="enter the sale date" name="sale_date" required>
                        {{-- <div class="valid-feedback">
                    Looks good!
                </div> --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationServerUsername">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">$</span>
                            </div>
                            <input type="number" min="0" value="0.00" step="0.01" class="form-control" id="price" name="price" placeholder="enter comic's price" aria-describedby="inputGroupPrepend3" required>
                            {{-- <div class="invalid-feedback">
                        Please choose a username.
                    </div> --}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5" 
                            placeholder="Enter the comic's description" name="description">
                    </textarea>
                </div>

            </div>
            <div class="col">
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="enter the new comic's thumb" required>
                        </div>
                        <div class="ms-2">

                            <div class="btn btn-outline-info" id="preview-button">Test Link</div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-content-center">
                    <div class="col-12 my-2 ">

                        <div class="card">
                            {{-- <div class="card"> --}}
                            <div class="card-body h-100 overflow-auto" style="max-height: 300px">

                                <img class="w-100" style="" src="" alt="image preview" id="image-prevew">
                                {{-- </div> --}}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-info my-3 w-100" type="submit">Save</button>

            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('preview-button').addEventListener("click", function() {

        document.getElementById('image-prevew').src = document.getElementById('thumb').value;
    })

</script>
@endsection