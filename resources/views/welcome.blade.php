<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->

</head>

<body>

  
   


    <div class="container">
        <div class="row">
         
            <main class="col-md-12">
                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                class="">
                <h6 class="title">Search by Title, Author, Publication date, ISBN, Genre </h6>
            </a>
           
                <form action="" method="get">
                    <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control m-input" name="search" placeholder="Search by Title, Author, Publication date, ISBN, Genre" value="">
                        <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-search"></i></span></span>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                    </div>
                </div>
                    </form>
            
            
                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">{{ $products->count() }} Items found in this Page</span>
                       

                    </div>
                </header><!-- sect-heading -->

                <div class="row">
                    @foreach ($products as $product)
                        {{-- {{$product}} --}}
                        <div class="col-md-4">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    

                                    <a class="btn-overlay" href="#">
                                        <img src="{{ $product->image }}" height="200px" width="100%"></a>
                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        {{-- <a href="#" class="title">Title - {{$product->title}}</a><br> --}}
                                        <span class="badge badge-danger col-12"> Title - {{ $product->title }} </span>
                                        <span class="badge badge-info col-12"><b>Author - </b> {{ $product->author }}</span>
                                        <span class="badge badge-success col-12"><b>Publisher - </b> {{ $product->publisher }}
                                            ({{ date('d-m-Y', strtotime($product->published)) }})</span>

                                    </div>

                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    @endforeach

                </div> <!-- row end.// -->
                <div class="row"> 
                @if ($products->lastPage() > 1)
                    <nav class="mt-4" aria-label="Page navigation sample">
                        <ul class="pagination">
                            <li class=" page-item {{ $products->currentPage() == 1 ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $products->url(1) }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class=" page-item{{ $products->currentPage() == $i ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li
                                class=" page-item{{ $products->currentPage() == $products->lastPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $products->url($products->currentPage() + 1) }}">Next</a>
                            </li>
                        </ul>
                    </nav>
                @endif
                </div>

            </main>
        </div>
    </div>
</body>

</html>
