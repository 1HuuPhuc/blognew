@extends('master.master')
@section('title','Trang chủ')
@section('content')
    <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/sym1.png" class="d-block w-100" alt="1">
                    </div>
                    <div class="carousel-item">
                    <img src="img/sym2.png" class="d-block w-100" alt="2">
                    </div>
                    <div class="carousel-item">
                    <img src="img/sym3.jpg" class="d-block w-100" alt="3">
                    </div>
                    <div class="carousel-item">
                    <img src="img/sym4.jpg" class="d-block w-100" alt="4">
                    </div>
                    <div class="carousel-item">
                    <img src="img/sym5.jpg" class="d-block w-100" alt="5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="phuc-2">
                    <h2>Khám Phá Các Dòng Xe</h2>
                </div>
            </div>
        </div>
    </div>
   <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="xega50cc" src="img/xega50cc1.png" alt="1">
            </div>
            <div class="col-md-4">
                <img class="xega50cc" src="img/xega50cc2.png" alt="2">
            </div>
            <div class="col-md-4">
                <img class="xega50cc" src="img/xega50cc3.png" alt="3">
            </div>
        </div>
        <div class="row">
            <h2 class="xetayga50cc">Xe Tay Ga 50cc</h2>
        </div>
        <div class="row">
            <button class="xe1">Xem Thêm</button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="xeso50cc" src="img/xeso50cc1.png" alt="1">
            </div>
            <div class="col-md-4">
                <img class="xeso50cc" src="img/xeso50cc2.png" alt="2">
            </div>
            <div class="col-md-4">
                <img class="xeso50cc" src="img/xeso50cc3.png" alt="3">
            </div>
        </div>
        <div class="row">
            <h2 class="xeso50pk">Xe Số 50cc</h2>
        </div>
        <div class="row">
            <button class="xe1">Xem Thêm</button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="xeso100cc" src="img/xeso100cc1.png" alt="1">
            </div>
            <div class="col-md-4">
                <img class="xeso100cc" src="img/xeso100cc2.png" alt="2">
            </div>
            <div class="col-md-4">
                <img class="xeso100cc" src="img/xeso100cc3.png" alt="3">
            </div>
        </div>
        <div class="row">
            <h2 class="xeso100pk">Xe Số 100cc</h2>
        </div>
        <div class="row">
            <button class="xe1">Xem Thêm</button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="anh1" src="img/anh1.png" alt="1">
            </div>
            <div class="col-md-3">
                <img class="anh2" src="img/anh2.png" alt="2">
            </div>
            <div class="col-md-3">
                <img class="anh3" src="img/anh3.png" alt="3">
            </div>
        </div>
    </div>
     
@endsection 