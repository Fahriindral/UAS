<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-user-edit"></i>&nbsp;&nbsp;Pendaftaran FLS2N SMA/MA 2023</h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

			<form action="<?= base_url('semnas/save'); ?>" method="POST">
				<?= csrf_field(); ?>
				<div class="registry">
					<div class="avatar">
						<i class="pencil fas fa-pencil-alt"></i>
						<i class="book fas fa-book-open"></i>
					</div>

					<div class="box-registry">
						<i class="fas fa-envelope-open-text"></i>
						<input type="email" placeholder="Email" name="email" autofocus required>
					</div>

					<div class="box-registry">
						<i class="fas fa-child"></i>
						<input type="name" placeholder="Nama Lengkap" name="nama" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-building"></i>
						<input type="text" placeholder="Asal Sekolah" name="insek" required>
					</div>

					<div class="box-registry">
						<i class="fab fa-whatsapp"></i>
						<input type="text" placeholder="No Whatsapp" name="wa" required>
					</div>
					<div class="box-registry">
                                        <select class="form-control" placeholder="Kategori" name="jenkel" required>
                                                <option value="">-Pilih Kategori-</option>
                                                <option value="Putra">Putra</option>
                                                <option value="Putri">Putri</option>
                                        </select>
                                    </div>

                                    <div class="box-registry">
                                        <select class="form-control" placeholder="Mata Lomba" name="lomba" required>
                                                <option value="">-Pilih Cabang Lomba-</option>
                                                <option value="Solo Gitar">Solo Gitar</option>
                                                <option value="Solo Vocal">Solo Vocal</option>
                                                <option value="Cipta Lagu">Cipta Lagu</option>
                                                <option value="Film Pendek">Film Pendek</option>
                                                <option value="Baca Puisi">Baca Puisi</option>
                                                <option value="Tulis Puisi">Tulis Puisi</option>
                                                <option value="Kriya">Kriya</option>
                                                <option value="Puisi">Puisi</option>
                                                <option value="Tari">Tari</option>
                                                <option value="Desain Poster">Desain Poster</option>
                                                <option value="Monolog">Monolog</option>
                                        </select>
                                    </div>

					<div class="button-class">
						<button type="submit" name="save" class="button btn btn-primary">
							<i class="fas fa-check"></i>&nbsp;&nbsp;Daftar
						</button>

						<button onclick=" window.location.href='<?= base_url('registry'); ?>" type="submit" name="cancel" class="button btn btn-danger">
							<i class="fas fa-times"></i>&nbsp;&nbsp;Batal
						</button>
					</div>
				</div><br>
			</form>

		</div>
	</div>
</div>

<?= $this->endSection(); ?>