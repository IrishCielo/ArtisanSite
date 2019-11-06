@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="margin-top:30px; margin-bottom: 30px; alignment: center;">
                    <div class="card-header" style="color: limegreen; text-align: center;">
                        <strong>REQUEST A DEMO</strong>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" style="margin-left: 15px">Business Name</label>
                                    <div class="col-sm-12">
                                        <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="MSU-IIT">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" style="margin-left: 15px">Address</label>
                                    <div class="col-sm-12">
                                        <input class="form-control form-control-sm" id="colFormLabelSm" placeholder="445 Mount Eden Road, Mount Eden">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabelSm" style="margin-left: 15px">Date Preferred for Demo</label>
                                    <div class="col-sm-12">
                                        <input placeholder="Selected date" id="date-picker-example" class="form-control datepicker form-control form-control-sm">
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit" style="background-color: limegreen; color: white; alignment: center;">
                                    <strong>SCHEDULE DEMO</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="container" style="margin-top: 30px">
                    <h2><STRONG>PRODUCT NAME</STRONG></h2>
                    <h3>Hotel</h3>
                </div>
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium placerat ipsum,
                        quis ultrices eros egestas eget. Fusce dolor lectus, euismod id sollicitudin ac, dapibus
                        quis ultrices eros egestas eget. Fusce dolor lectus, euismod id sollicitudin ac, dapibus

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium placerat ipsum,
                        quis ultrices eros egestas eget. Fusce dolor lectus, euismod id sollicitudin ac, dapibus
                        quis ultrices eros egestas eget. Fusce dolor lectus, euismod id sollicitudin ac, dapibus
                    </p>

                    <h5 style="color: limegreen"><strong>SEE OTHER PRODUCTS</strong></h5>
                    <div class="container">
                        <div class="bd-example" style="background-color: deeppink; margin-bottom: 30px; margin-top: 60px;">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators" style="margin-top: 60px">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="col-md-4">
                                        <div class="col-item">
                                            <div class="photo">
                                                <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5>WAREHOUSE</h5>
                                                        <h5 class="price-text-color">LEARN MORE >>></h5>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>PAYROLL</h5>
                                                            <h5 class="price-text-color">LEARN MORE >>></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-item">
                                                <div class="photo">
                                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                </div>
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="price col-md-6">
                                                            <h5>SALES</h5>
                                                            <h5 class="price-text-color">LEARN MORE >>></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>

        </script>
    @endpush

@endsection