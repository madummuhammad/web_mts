        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="quixnav">
            	<div class="quixnav-scroll">
            		<ul class="metismenu" id="menu">
            			<li class="nav-label first">Main Menu</li>
                        <li>
                            <a href="<?php echo base_url('adminsystem') ?>" aria-expanded="false">
                             <i class="icon icon-chart-bar-33"></i>
                             <span class="nav-text">Dashboard</span>
                         </a>
                     </li>

                     <li class="nav-label">Website</li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Artikel</span></a>
                       <ul aria-expanded="false">
                          <li><a href="<?php echo base_url('adminsystem/artikel') ?>">Kelola Artikel</a></li>
                          <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Tulis Artikel</a></li>
                      </ul>
                  </li>
                  <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span
                    class="nav-text">Galeri</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="far fa-image"></i><span
                        class="nav-text">Cover Web</span></a></li>

                        <li class="nav-label">Madrasah</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Profil Madrasah</span></a>
                           <ul aria-expanded="false">
                              <li><a href="<?php echo base_url('adminsystem/profile_madrasah') ?>">Profile</a></li>
                              <li><a href="<?php echo base_url('adminsystem/profile_madrasah/visi_misi') ?>">Visi dan Misi</a></li>
                              <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Struktur</a></li>
                              <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Kepengurusan</a></li>
                              <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Prestasi</a></li>
                              <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Sarana dan Prasarana</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Tanah dan Bangunan</a></li>
                                    <li><a href="./email-inbox.html">Ruang dan Gedung</a></li>
                                    <li><a href="./email-read.html">Lahan non Bangunan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">SDM</span></a>
                       <ul aria-expanded="false">
                          <li><a href="<?php echo base_url('adminsystem/artikel') ?>">Data Ketenagaan</a></li>
                          <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Data Kesiswaan</a></li>
                          <li><a href="<?php echo base_url('adminsystem/artikel/tulis') ?>">Pembina Ektrakulikuler</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
        <!--**********************************
            Sidebar end
            ***********************************-->