@extends('layouts.app') @section('title') Product Upload @endsection 

@section('content')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <div class="row container"> 
    
            <div>
                <div class="row text-center">
                    <div class="col">
                        <h2 class="text-primary">Product Insert Page</h2>
                    </div>
                    
                </div>


            </div>

            <section class="mt-5 card-body rounded shadow col-10" >

                <div class="mt-5 row mb-2">
                    

                    <form action="{{ route('insert_product') }}" method="post" enctype="multipart/form-data"> 
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <input name="name" type="text" class="form-control" placeholder="Product Name" aria-label="name" required>
                            </div>


                            <div class="col-6">
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="Mobile">Mobile</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="TV">TV</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-3 mt-3 mb-3">
                                <input name="price" type="number" class="form-control" placeholder="Price" aria-label="price" required>
                            </div>
                        </div>

                        <textarea name="description" id="editor"></textarea>
                        
                        <div class="row mb-4">
                           
                            <div class="col-8 mt-3">
                                
                                <input name="img" type="file" class="form-control" required>
                                <label class="text-muted" for="product_color" class="form-label">Insert Image Here</label>
                            </div>

                        </div>
                                            
                        <button class="btn btn-secondary offset-5" type="submit">Submit</button>
                        <a href="{{route('product_list')}}"><button class="btn btn-danger" type="button">Cancel</button></a>
                     
                        

                    </form>

   


                </div>
            </section>


        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
                <script>
                    CKEDITOR.replace('description');
                </script>
</body>

</html>

@endsection



