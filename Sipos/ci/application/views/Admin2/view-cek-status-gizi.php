<br>
<br>
<div class="row">
    <a href="<?php echo base_url('SPK/data_per_anak/' . $id_anakk);?>">
                            <i class="fa fa-arrow-circle-left fa-1x" ></i>
                            <br>
                        </a>
        <div class="page-title-box">
                    
                    <h4 class="page-title">SPK Penentu Status Gizi Balita Metode Naive Bayes </h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">


            <div class="card shadow">
                <div class="card-header">
                    <h5>Data Penimbangan</h5>
                </div>

                                            
                                <div class="col-12 mt-3" >
                                    
                                    <?php foreach($user as $baris){ ?>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->nama_anak; ?>" id="nama_anak" name="nama_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->nik_anak; ?>" id="nik_anak" name="nik_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->jenis_kelamin_anak; ?>" id="jenis_kelamin_anak" name="jenis_kelamin_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->umur_anak; ?>" id="umur_anak" name="umur_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Berat Badan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->bb_anak; ?>" id="bb_anak" name="bb_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tb_anak; ?>" id="tb_anak" name="tb_anak" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-4 col-form-label">Tgl Penimbangan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tgl_timbang_anak; ?>" id="tgl_timbang_anak" name="tgl_timbang_anak" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Data Testing</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_Penimbangan/uji_data/'. $baris->id_penimbangan . '?id_anakk=' . $id_anakk); ?>" method="post">
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
        </div>
    </div>

</div>
<!-- ./ container -->
                                </div>
                                <?php } ?>
                                
