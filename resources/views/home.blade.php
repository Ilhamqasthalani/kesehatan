@extends("master")

@section('title')
Kesehatan Kita
@endsection

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/sehatt.jpg" class="d-block w-100" alt="0">
        </div>
        <div class="carousel-item">
            <img src="/img/sehat1.jpg" class="d-block w-100" alt="0">
        </div>
        <div class="carousel-item">
            <img src="/img/tenang.jpg" class="d-block w-100" alt="0">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <center>
                <h3 class="heading">PLATFORM KESEHATAN</h3>
            </center>
            <p>kesehatan Kita adalah platform kesehatan terbaik dengan fitur terlengkap di Indonesia yang selalu hadir memberikan tips dan informasi terbaru mengenai kesehatan. Situs kesehatan ini sukses diluncurkan pada 2016 dan berada dalam naungan PT Global Urban Esensial. Guesehat menjadi produk pertama tentang kesehatan yang memiliki fitur terlengkap di Indonesia.</p>
        </div>
        <p class="btmspace-50 justified">Di sini Kamu dapat membaca berbagai artikel tentang kesehatan, mulai dari tema wanita, medis, hubungan percintaan dan seks, hingga gaya hidup sehat. Tak perlu takut hoax, karena semua artikel ini berasal dari sumber terpercaya dan direview oleh pakar kesehatan.</p>
        <p class="btmspace-50 justified">Sehat itu seru lho, apalagi kalau sehatnya bareng-bareng. Website kesehatan ini memiliki banyak fitur yang unik dan menarik untuk mendukung kesehatanmu. Melalui fitur sakit apa, Kamu dapat melakukan cek kesehatan secara online. Kemudian, cari tahu tentang penyakit tersebut, mulai dari pengertian penyakit, gejala, hingga cara pencegahan di fitur penyakit. Setelah itu, lakukan penanganan yang tepat dengan mengonsumsi obat sesuai anjuran di fitur info obat.</p>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
@endsection