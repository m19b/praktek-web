<main id="main" class="main">

    <div class="pagetitle">
        <h1>Beranda</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="cal-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Sales <span>| Today</span></h5> -->
                                <h5 class="card-title">Mahasiswa</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>180</h6>
                                        <span class="text-success small pt-1 fw-bold">Orang</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">



                            <div class="card-body">
                                <h5 class="card-title">Dosen</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>400</h6>
                                        <span class="text-success small pt-1 fw-bold">Orang</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card customers-card">



                            <div class="card-body">
                                <h5 class="card-title">Alumn</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">orang</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
            </div>
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">



                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Laporan Mahasiswa <span>/Today</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#reportsChart"), {
                                        series: [{
                                                name: 'Mahasiswa Baru',
                                                data: [410, 450, 512, 391, 570],
                                            },
                                            {
                                                name: 'Mahasiswa',
                                                data: [1001, 1200, 950, 200, 1350],
                                            }
                                        ],
                                        chart: {
                                            height: 350,
                                            type: 'area',
                                            toolbar: {
                                                show: false
                                            },
                                        },
                                        markers: {
                                            size: 4
                                        },
                                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                        fill: {
                                            type: "gradient",
                                            gradient: {
                                                shadeIntensity: 1,
                                                opacityFrom: 0.3,
                                                opacityTo: 0.4,
                                                stops: [0, 90, 100]
                                            }
                                        },
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            curve: 'smooth',
                                            width: 2
                                        },
                                        xaxis: {
                                            type: 'year',
                                            categories: ["2020", "2021", "2022", "2023", "2024"]
                                        },
                                        tooltip: {
                                            x: {
                                                format: 'dd/MM/yy HH:mm'
                                            },
                                        }
                                    }).render();
                                });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">





                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Mahasiswa <span>| Prodi</span></h5>

                        <div id="trafficChart" style="min-height: 385px;" class="echart"></div>

                        <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Access From',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: [{
                                            value: 950,
                                            name: 'TI'
                                        },
                                        {
                                            value: 650,
                                            name: 'SI'
                                        },
                                        {
                                            value: 530,
                                            name: 'TF'
                                        },
                                        {
                                            value: 484,
                                            name: 'RSK'
                                        },
                                        {
                                            value: 300,
                                            name: 'RPL'
                                        }
                                    ]
                                }]
                            });
                        });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->



            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->