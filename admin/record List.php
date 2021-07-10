<?php $title="Record list"; include 'layout.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 capital">Record list management</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol> -->
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Transaction Detail
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Payment type</th>
                                            <th>Date</th>
                                            <th>Rate</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Payment type</th>
                                            <th>Date</th>
                                            <th>Rate</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dev</td>
                                            <td>Desai</td>
                                            <td>6134267843</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vivek</td>
                                            <td>Chodhri</td>
                                            <td>9134267843</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jainam</td>
                                            <td>Chavda</td>
                                            <td>6334267843</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Damodar</td>
                                            <td>bhatt</td>
                                            <td>9832167843</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Aditya</td>
                                            <td>Sharma</td>
                                            <td>9884267843</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Meet</td>
                                            <td>Joshi</td>
                                            <td>9555267843</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Devendra</td>
                                            <td>Yadav</td>
                                            <td>8134267843</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Rahil</td>
                                            <td>Chotani</td>
                                            <td>6934267843</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Abhinav</td>
                                            <td>Rajput</td>
                                            <td>9798433456</td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Abhinav</td>
                                            <td>Rajput</td>
                                            <td>9798433456</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>13</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
 <?php include 'footer.php';?>