<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home"></i> <b>Home</b> <i class="fa fa-angle-right"></i> <font color="#f50057">Data Guru</font></h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b><i class="fa fa-table"></i> HIMPUNAN DATA GURU</b>
                        </div>
                           <div class="table-responsive">                    
                        <div class="panel-body">
                            <p align="left">
                                <a href="?page=guru&action=add_guru"><button type="" class="btn btn-danger"> <i class="fa fa-edit"></i> Tambah Data</button></a>                                
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>JK</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi/koneksi.php';
                                        $sql = mysqli_query($connect,"select * from data_guru") or die (mysqli_error());
                                        $no=1;
                                        while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nip']; ?></td>
                                            <td><?php echo $data['nama_guru']; ?>, <?php echo $data['gelar']; ?></td>
                                            <td><?php echo $data['tempat_lahir']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
                                            <td><?php echo $data['kelamin']; ?></td>
                                            <td><?php echo $data['agama']; ?></td>
                                            <td><?php echo $data['alamat_guru']; ?></td>
                                            <td><?php echo $data['telpon_guru']; ?></td>
                                            <td> <img src="../photo_guru/<?php echo $data ['photo'];?>" height="40" width="40" align="middle" style="border-radius: 100%;"></td>

                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


