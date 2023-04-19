 <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Training</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <p class="card-title">Masukkan jumlah data yang ingin ditambahkan!(Maksimal 8 data)</p>
                                <input type="number" max="8" name="jumlah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-req">Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-lg-12">

                <form action="<?= base_url('SPK/save_dataset'); ?>" method="post">

                    <div class="row">

                        <input type="hidden" class="jml-req" name="jmlReq" value="<?= $jmlReq; ?>">

                        <?php for ($i = 1; $i <= $jmlReq; $i++) : ?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card card-data">
                                    <div class="card-header">
                                        <h2>Data - <?= $i; ?></h2>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin ?</label>
                                            <select name="jenis_kelamin<?= $i; ?>" id="jenis_kelamin" class="form-control" required>
                                                <option value="1">L</option>
                                                <option value="2">P</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="umur">Umur (bulan)?</label>
                                            <select name="umur<?= $i; ?>" id="umur" class="form-control" required>
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
                                            <label for="bb">Berat Badan (kg)?</label>
                                            <select name="bb<?= $i; ?>" id="bb" class="form-control" required>
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
                                            <label for="tb">Tinggi Badan (cm)?</label>
                                            <select name="tb<?= $i; ?>" id="tb" class="form-control" required>
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
                                            <label for="status_gizi">Status Gizi ?</label>
                                            <select name="status_gizi<?= $i; ?>" id="status_gizi" class="form-control" required>
                                                <option value="1">baik</option>
                                                <option value="2">kurang</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group btn-submit">
                <button type="submit" name="tambah_dataset" class="btn btn-primary btn-block mb-4">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<br>

    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            var jmlReq = $('.jml-req').val();

            if (jmlReq > 0) {
                $('.card-data').css('display', 'inline');
                $('.btn-submit').css('display', 'inline');
            }

        })
    </script>
