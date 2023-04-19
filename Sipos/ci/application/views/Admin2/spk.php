<br>
<div class="row">

        <div class="page-title-box">
                    
                    <h4 class="page-title"> Data Training</h4>
                </div>
                </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                     <!-- Begin Page Content -->
                     <div class="container-fluid">


            <?php if ($this->session->flashdata('msg')) : ?>
                <div class="alert alert-info" role="alert">
                    Data <strong><?= $this->session->flashdata('msg'); ?></strong> ditambahkan.
                </div>
            <?php endif; ?>

            <div class="card shadow">
                <div class="card-header">
                    <a href="<?= base_url('SPK/add_dataset'); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data Training</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive" style="height: 400px;">
                        <thead>
                            <th>No.</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur (bulan)</th>
                            <th>Berat Badan (kg)</th>
                            <th>Tinggi Badan (cm)</th>
                            <th>Status Gizi</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php foreach ($dataset as $num => $row) : ?>
                                <tr>
                                    <td><?= $num + 1; ?></td>
                                    <td><?= $row['jenis_kelamin'] == '1' ? 'L' : 'P'; ?></td>
                                    <td>
                                        <?php if ($row['umur'] == 1) {
                                            echo "12";
                                        } else if ($row['umur'] == 2) {
                                            echo "13";
                                        } else if ($row['umur'] == 3) {
                                            echo "14";
                                        }else if ($row['umur'] == 4) {
                                            echo "15";
                                        }else if ($row['umur'] == 5 ){
                                            echo "16";
                                        }else if ($row['umur'] == 6){
                                            echo "17";
                                        }else if ($row['umur'] == 7){
                                            echo "18";
                                        }else if ($row['umur'] == 8){
                                            echo "19";
                                        }else if ($row['umur'] == 9){
                                            echo "20";
                                        }else if ($row['umur'] == 10){
                                            echo "21";
                                        }else if ($row['umur'] == 11){
                                            echo "22";
                                        }else if ($row['umur'] == 12){
                                            echo "23";
                                        }else if ($row['umur'] == 13){
                                            echo "24";
                                        }else if ($row['umur'] == 14){
                                            echo "25";
                                        }else if ($row['umur'] == 15){
                                            echo "26";
                                        }else if ($row['umur'] == 16){
                                            echo "27";
                                        }else if ($row['umur'] == 17){
                                            echo "28";
                                        }else if ($row['umur'] == 18){
                                            echo "29";
                                        }else if ($row['umur'] == 19){
                                            echo "30";
                                        }else if ($row['umur'] == 20){
                                            echo "31";
                                        }else if ($row['umur'] == 21){
                                            echo "32";
                                        }else if ($row['umur'] == 22){
                                            echo "33";
                                        }else if ($row['umur'] == 23){
                                            echo "34";
                                        }else if ($row['umur'] == 24){
                                            echo "35";
                                        }else if ($row['umur'] == 25){
                                            echo "36";
                                        }else if ($row['umur'] == 26){
                                            echo "37";
                                        }else if ($row['umur'] == 27){
                                            echo "38";
                                        }else if ($row['umur'] == 28){
                                            echo "39";
                                        }else if ($row['umur'] == 29){
                                            echo "40";
                                        }else if ($row['umur'] == 30){
                                            echo "41";
                                        }else if ($row['umur'] == 31){
                                            echo "42";
                                        }else if ($row['umur'] == 32){
                                            echo "43";
                                        }else if ($row['umur'] == 33){
                                            echo "44";
                                        }else if ($row['umur'] == 34){
                                            echo "45";
                                        }else if ($row['umur'] == 35){
                                            echo "46";
                                        }else if ($row['umur'] == 36){
                                            echo "47";
                                        }else if ($row['umur'] == 37){
                                            echo "48";
                                        }else if ($row['umur'] == 38){
                                            echo "49";
                                        }else if ($row['umur'] == 39){
                                            echo "50";
                                        }else if ($row['umur'] == 40){
                                            echo "51";
                                        }else if ($row['umur'] == 41){
                                            echo "52";
                                        }else if ($row['umur'] == 42){
                                            echo "53";
                                        }else if ($row['umur'] == 43){
                                            echo "54";
                                        }else if ($row['umur'] == 44){
                                            echo "55";
                                        }else if ($row['umur'] == 45){
                                            echo "56";
                                        }else if ($row['umur'] == 46){
                                            echo "57";
                                        }else if ($row['umur'] == 47){
                                            echo "58";
                                        }else if ($row['umur'] == 48){
                                            echo "59";
                                        }else if ($row['umur'] == 49){
                                            echo "60";
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($row['bb'] == 1) {
                                            echo "7";
                                        } else if ($row['bb'] == 2) {
                                            echo "8";
                                        } else if ($row['bb'] == 3) {
                                            echo "9";
                                        }else if ($row['bb'] == 4){
                                            echo "10";
                                        }else if ($row['bb'] == 5){
                                            echo "11";
                                        }else if ($row['bb'] == 6){
                                            echo "12";
                                        }else if ($row['bb'] == 7){
                                            echo "13";
                                        }else if ($row['bb'] == 8){
                                            echo "14";
                                        }else if ($row['bb'] == 9){
                                            echo "15";
                                        }else if ($row['bb'] == 10){
                                            echo "16";
                                        }else if ($row['bb'] == 11){
                                            echo "17";
                                        }
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($row['tb'] == 1) {
                                            echo "68";
                                        } else if ($row['tb'] == 2) {
                                            echo "69";
                                        } else if ($row['tb'] == 3) {
                                            echo "70";
                                        }else if ($row['tb'] == 4){
                                            echo "71";
                                        }else if ($row['tb'] == 5){
                                            echo "72";
                                        }else if ($row['tb'] == 6){
                                            echo "73";
                                        }else if ($row['tb'] == 7){
                                            echo "74";
                                        }else if ($row['tb'] == 8){
                                            echo "75";
                                        }else if ($row['tb'] == 9){
                                            echo "76";
                                        }else if ($row['tb'] == 10){
                                            echo "77";
                                        }else if ($row['tb'] == 11){
                                            echo "78";
                                        }else if ($row['tb'] == 12){
                                            echo "79";
                                        }else if ($row['tb'] == 13){
                                            echo "80";
                                        }else if ($row['tb'] == 14){
                                            echo "81";
                                        }else if ($row['tb'] == 15){
                                            echo "82";
                                        }else if ($row['tb'] == 16){
                                            echo "83";
                                        }else if ($row['tb'] == 17){
                                            echo "84";
                                        }else if ($row['tb'] == 18){
                                            echo "85";
                                        }else if ($row['tb'] == 19){
                                            echo "86";
                                        }else if ($row['tb'] == 20){
                                            echo "87";
                                        }else if ($row['tb'] == 21){
                                            echo "88";
                                        }else if ($row['tb'] == 22){
                                            echo "89";
                                        }else if ($row['tb'] == 23){
                                            echo "90";
                                        }else if ($row['tb'] == 24){
                                            echo "91";
                                        }else if ($row['tb'] == 25){
                                            echo "92";
                                        }else if ($row['tb'] == 26){
                                            echo "93";
                                        }else if ($row['tb'] == 27){
                                            echo "94";
                                        }else if ($row['tb'] == 28){
                                            echo "95";
                                        }else if ($row['tb'] == 29){
                                            echo "96";
                                        }else if ($row['tb'] == 30){
                                            echo "97";
                                        }else if ($row['tb'] == 31){
                                            echo "98";
                                        }else if ($row['tb'] == 32){
                                            echo "99";
                                        }else if ($row['tb'] == 33){
                                            echo "100";
                                        }else if ($row['tb'] == 34){
                                            echo "101";
                                        }else if ($row['tb'] == 35){
                                            echo "102";
                                        }else if ($row['tb'] == 36){
                                            echo "103";
                                        }else if ($row['tb'] == 37){
                                            echo "104";
                                        }else if ($row['tb'] == 38){
                                            echo "105";
                                        }else if ($row['tb'] == 39){
                                            echo "106";
                                        }else if ($row['tb'] == 40){
                                            echo "107";
                                        }else if ($row['tb'] == 41){
                                            echo "108";
                                        }else if ($row['tb'] == 42){
                                            echo "109";
                                        }
                                        ?>
                                    </td>
                                    <td><?= $row['status_gizi'] == '1' ? 'baik' : 'kurang'; ?></td>
                                    <td>
                                                <?php
                                                
                                                echo '<a href="'.base_url('SPK/edit_data/'.$row['id_dataset']).'"><button type="button" class="btn-primary">Edit</button></a>';
                                                
                                                echo " ";
                                                echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-dataset="' . $row['id_dataset']. '">Hapus</button>';
                                                ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--<div class="col-lg-4 col-md-4 col-sm-4">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Data Testing</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('SPK/uji_data'); ?>" method="post">
                        <div class="form-group">
                            <label for="umur">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="1"> L </option> 
                                <option value="2"> P </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur (bulan)</label>
                            <select name="umur" id="umur" class="form-control" required>
                                <option value="1">12</option>
                                <option value="2">13</option>
                                <option value="3">14</option>
                                <option value="4">15</option>
                                <option value="5">16</option>
                                <option value="6">17</option>
                                <option value="7">18</option>
                                <option value="8">19</option>
                                <option value="9">20</option>
                                <option value="10">21</option>
                                <option value="11">22</option>
                                <option value="12">23</option>
                                <option value="13">24</option>
                                <option value="14">25</option>
                                <option value="15">26</option>
                                <option value="16">27</option>
                                <option value="17">28</option>
                                <option value="18">29</option>
                                <option value="19">30</option>
                                <option value="20">31</option>
                                <option value="21">32</option>
                                <option value="22">33</option>
                                <option value="23">34</option>
                                <option value="24">35</option>
                                <option value="25">36</option>
                                <option value="26">37</option>
                                <option value="27">38</option>
                                <option value="28">39</option>
                                <option value="29">40</option>
                                <option value="30">41</option>
                                <option value="31">42</option>
                                <option value="32">43</option>
                                <option value="33">44</option>
                                <option value="34">45</option>
                                <option value="35">46</option>
                                <option value="36">47</option>
                                <option value="37">48</option>
                                <option value="38">49</option>
                                <option value="39">50</option>
                                <option value="40">51</option>
                                <option value="41">52</option>
                                <option value="42">53</option>
                                <option value="43">54</option>
                                <option value="44">55</option>
                                <option value="45">56</option>
                                <option value="46">57</option>
                                <option value="47">58</option>
                                <option value="48">59</option>
                                <option value="49">60</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bb">Berat Badan (kg)</label>
                            <select name="bb" id="bb" class="form-control" required>
                                <option value="1">7</option>
                                <option value="2">8</option>
                                <option value="3">9</option>
                                <option value="4">10</option>
                                <option value="5">11</option>
                                <option value="6">12</option>
                                <option value="7">13</option>
                                <option value="8">14</option>
                                <option value="9">15</option>
                                <option value="10">16</option>
                                <option value="11">17</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tb">Tinggi Badan (cm)</label>
                            <select name="tb" id="tb" class="form-control" required>
                                <option value="1">68</option>
                                <option value="2">69</option>
                                <option value="3">70</option>
                                <option value="4">71</option>
                                <option value="5">72</option>
                                <option value="6">73</option>
                                <option value="7">74</option>
                                <option value="8">75</option>
                                <option value="9">76</option>
                                <option value="10">77</option>
                                <option value="11">78</option>
                                <option value="12">79</option>
                                <option value="13">80</option>
                                <option value="14">81</option>
                                <option value="15">82</option>
                                <option value="16">83</option>
                                <option value="17">84</option>
                                <option value="18">85</option>
                                <option value="19">86</option>
                                <option value="20">87</option>
                                <option value="21">88</option>
                                <option value="22">89</option>
                                <option value="23">90</option>
                                <option value="24">91</option>
                                <option value="25">92</option>
                                <option value="26">93</option>
                                <option value="27">94</option>
                                <option value="28">95</option>
                                <option value="29">96</option>
                                <option value="30">97</option>
                                <option value="31">98</option>
                                <option value="32">99</option>
                                <option value="33">100</option>
                                <option value="34">101</option>
                                <option value="35">102</option>
                                <option value="36">103</option>
                                <option value="37">104</option>
                                <option value="38">105</option>
                                <option value="39">106</option>
                                <option value="40">107</option>
                                <option value="41">108</option>
                                <option value="42">109</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="proses" class="btn btn-primary">Cek Hasil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <?php if ($this->session->flashdata('hasil')) : ?>
                <div class="alert alert-info mt-3" role="alert">
                    Nilai posterior probabilities untuk <strong>Status Gizi Baik</strong> adalah : <strong><?= $hasil_baik ?></strong>, dan <strong>Status Gizi Kurang</strong> adalah : <strong><?= $hasil_kurang ?></strong>.<br>
                    <?= $kesimpulan; ?>.
                </div>
        </div>
        <div class="col-md-5">
            <table class="mt-3 table table-striped table-hover">
                <thead>
                    <th>Jenis Kelamin</th>
                    <th>Umur (bulan)</th>
                    <th>BB (kg)</th>
                    <th>TB (cm)</th>
                    <th>Status Gizi</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $jenis_kelamin == 1 ? 'L' : 'P'; ?></td>
                        <td><?= $umur = ($umur == 1) ? "12" : (($umur == 2)  ? "13" : (($umur == 3)? "14" : (($umur == 4) ? "15" : (($umur == 5) ? "16" : (($umur == 6) ? "17" : (($umur == 7)? "18" : (($umur == 8)? "19" : (($umur == 9)? "20" : (($umur == 10)? "21" : (($umur == 11)? "22" : (($umur == 12)? "23" : (($umur == 13)? "24" :(($umur == 14)? "25" : (($umur == 15)? "26" : (($umur == 16)? "27" : (($umur == 17)? "28" : (($umur == 18)? "29" : (($umur == 19)? "30" : (($umur == 20)? "31" : (($umur == 21)? "32" : (($umur == 22)? "33" : (($umur == 23)? "34" : (($umur == 24)? "35" : (($umur == 25)? "36" : (($umur == 26)? "37" : (($umur == 27)? "38" : (($umur == 28)? "39" : (($umur == 29)? "40" : (($umur == 30)? "41" : (($umur == 31)? "42" : (($umur == 32)? "43" : (($umur == 33)? "44" : (($umur == 34)? "45" : (($umur == 35)? "46" : (($umur == 36)? "47" : (($umur == 37)? "48" : (($umur == 38)? "49" : (($umur == 39)? "50" : (($umur == 40)? "51" : (($umur == 41)? "52" : (($umur == 42)? "53" : (($umur == 43)? "54" : (($umur == 44)? "55" : (($umur == 45)? "56" : (($umur == 46)? "57" : (($umur == 47)? "58" : (($umur == 48)? "59" : "60"))))))))))))))))))))))))))))))))))))))))))))))) ; ?></td>
                        <td><?= $bb = ($bb == 1) ? "7" : (($bb == 2)  ? "8" : (($bb == 3)? "9" : (($bb == 4) ? "10" : (($bb == 5) ? "11" : (($bb == 6) ? "12" : (($bb == 7) ? "13" : (($bb == 8) ? "14" : (($bb == 9) ? "15" : (($bb == 10) ? "16" : "17" ))))))))) ; ?></td>
                        <td><?= $tb = ($tb == 1) ? "68" : (($tb == 2)  ? "69" : (($tb == 3)? "70" : (($tb == 4) ? "71" : (($tb == 5) ? "72" : (($tb == 6) ? "73" : (($tb == 7)? "74" : (($tb == 8)? "75" : (($tb == 9)? "76" : (($tb == 10)? "77" : (($tb == 11)? "78" : (($tb == 12)? "79" : (($tb == 13)? "80" : (($tb == 14)? "81" : (($tb == 15)? "82" : (($tb == 16)? "83" : (($tb == 17)? "84" : (($tb == 18)? "85" : (($tb == 19)? "86" : (($tb == 20)? "87" : (($tb == 21)? "88" : (($tb == 22)? "89" : (($tb == 23)? "90" : (($tb == 24)? "91" : (($tb == 25)? "92" : (($tb == 26)? "93" : (($tb == 27)? "94" : (($tb == 28)? "95" : (($tb == 29)? "96" :(($tb == 30)? "97" : (($tb == 31)? "98" : (($tb == 32)? "99" : (($tb == 33)? "100" : (($tb == 34)? "101" : (($tb == 35)? "102" : (($tb == 36)? "103" : (($tb == 37)? "104" : (($tb == 38)? "105" : (($tb == 39)? "106" : (($tb == 40)? "107" : (($tb == 41)? "108" : "109")))))))))))))))))))))))))))))))))))))))) ; ?></td>
                        <td><?= $jenis_statusgizi == 1 ? 'baik' : 'kurang'; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
        </div>-->
         
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Training</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</div>
                            <div class="modal-footer">

                                <?php
                            echo '<a class="btn-hapus"><button type="button" class="btn btn-danger">Hapus</button></a>';
                            echo " ";
                            echo '<a><button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button></a>';
                            ?>
                </div>
            </div>
        </div>
    </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

    </div><!-- container -->

    </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        © 2018 - 2020 Dashor by Themesdesign.
    </footer>

    </div>
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    <script src="<?= base_url('assets/js/delete-confirm-dataset.js') ?>"></script>  
    </div>

</div>
<!-- ./ container -->