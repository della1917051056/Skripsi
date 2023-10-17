<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4><?php echo $count_krit ; ?></h4>
                        <p>Data Kriteria</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4><?php echo $count_sub ; ?></h4>
                        <p>Data Subkriteria</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><?php echo $count_alternatif ; ?></h4>
                        <p>Data Alternatif</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mt-10">
                <img class ="img-fluid"src="/assets/images/KOPI.jpg" >
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="maintext text-center">
                        <h2>Tentang Kopi</h2>
                        <p>Biji kopi merupakan benih yang berasal dari buah kopi yang bergerombolan dalam tangkai,
                            dengan kulit buah berwarna merah ketika sudah masak. Dibawah lapisan daging buah, terdapat
                            dua keping biji yang sisi ratanya saling berhadapan satu sama lain, masing-masing
                            diselubungi oleh lapisan tipis.</p>
                        <p>Kopi merupakan salah satu jenis tanaman perkebunan yang sudah lama dibudidayakan dan memiliki
                            nilai ekonomis yang lumayan tinggi. Kopi memiliki banyak spesies diantaranya adalah kopi
                            robusta. </p>
                        <p>Kopi robusta adalah tanaman budidaya berbentuk pohon yang termasuk dalam famili rubiaceae dan
                            genus coffea. Saat ini lebih dari 90% dari areal pertanaman kopi indonesia terdiri atas kopi
                            robusta. Kopi robusta merupakan keturunan beberapa spesies kopi, terutama Coffea Canephora.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('myscript'); ?>
<script>
$(function() {
    $('#example2').DataTable();
});
</script>
<?= $this->endSection(); ?>