<?php 
echo form_open(base_url('index.php/Welcome/insert'));
echo form_label('ID Penghuni ');
echo form_input('id_penghuni');
echo "<br>";
echo form_label('Nama Penghuni ');
echo form_input('nama_penghuni');
echo "<br>";
$options = array(
        'Laki-laki' => 'Laki-laki',
        'Perempuan' => 'Perempuan'
);
echo form_label('Jenis Kelamin ');
echo form_dropdown('jenis_kelamin', $options,'Laki-laki');
echo "<br>";
echo form_label('No. Telp');
echo form_input('no_telp');
echo "<br>";
echo form_label('Email');
echo form_input('email');
echo "<br>";
echo form_label('Umur');
echo form_input('umur');
echo "<br>";
echo form_submit('submit','submit');
echo "<br>";
echo form_close();
 ?>
 <button><a href="<?php echo base_url('index.php/Welcome/list'); ?>">List Penghuni</a></button>